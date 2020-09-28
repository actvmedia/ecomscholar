<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Videos;
use Illuminate\Support\Facades\DB;

class VideosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function show() {
      $videos = DB::table('videos')->get();
      return view('videos.index', ['videos' => $videos]);
    }

    public function showAdd() {
      $courses = DB::table('courses')->get();
      return view('videos.add', ['courses' => $courses]);
    }

    public function showEdit($id) {
      $video = DB::table('videos')->where('id', $id)->first();
      $courses = DB::table('courses')->get();
      return view('videos.edit', ['video' => $video, 'courses' => $courses]);
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
          'video_name' => 'required',
          'video_description' => 'required',
          'video_file' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required',
        ]);

        $file = $request->file('video_file');
        $filename = $file->getClientOriginalName();
        $path = '/public';
        $upload_path = Storage::putFileAs($path, $file, $filename);

        $video = new Videos([
          'name' => $request->get('video_name'),
          'description' => $request->get('video_description'),
          'video_path' => $filename,
          'course_id' => $request->get('course_id')
        ]);

        $video->save();
        return redirect()->route('showVideos');
    }

    public function postEdit(Request $request)
    {
        $video = new Videos();
        $video->exists = true;

        if(!empty($request->video_file)) {
          $this->validate($request, [
            'video_name' => 'required',
            'video_description' => 'required',
            'video_file' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
          ]);
          $filename = time();
          $request->video_file->storeAs('videos', $filename);
          $video->video_path = $filename;
        } else {
          $this->validate($request, [
            'video_name' => 'required',
            'video_description' => 'required',
          ]);
        }
        $video->id = $request->get('video_id');
        $video->name =  $request->get('video_name');
        $video->description =  $request->get('video_description');
        $video->course_id = $request->get('course_id');

        $video->save();
        return redirect()->route('showVideos');
    }

    public function delete($id) {
      $video = DB::table('videos')->where('id', $id)->delete();
      return redirect()->route('showVideos');
    }

    public function getVideo(Video $video)
    {
        $name = $video->name;
        $fileContents = Storage::disk('local')->get("uploads/videos/{$name}");
        $response = Response::make($fileContents, 200);
        $response->header('Content-Type', "video/mp4");
        return $response;
    }
}
