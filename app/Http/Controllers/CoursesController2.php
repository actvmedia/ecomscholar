<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use Illuminate\Support\Facades\DB;

class CoursesController2 extends Controller
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
      $courses = DB::table('courses')->get();
      return view('courses.index', ['courses' => $courses]);
    }

    public function showAdd() {
      return view('courses.add');
    }

    public function showEdit($id) {
      $course = DB::table('courses')->where('id', $id)->first();
      return view('courses.edit', ['course' => $course]);
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
          'course_name' => 'required',
          'course_description' => 'required',
          'course_category' => 'required'
        ]);
        $course = new Courses([
          'name' => $request->get('course_name'),
          'description' => $request->get('course_description'),
          'category' => $request->get('course_category')
        ]);
        $course->save();
        return redirect()->route('showCourses');
    }

    public function postEdit(Request $request)
    {
        $this->validate($request, [
          'course_name' => 'required',
          'course_description' => 'required',
          'course_category' => 'required'
        ]);
        $course =  new Courses();
        $course->exists = true;
        $course->id = $request->get('course_id');
        $course->name =  $request->get('course_name');
        $course->description =  $request->get('course_description');
        $course->category = $request->get('course_category');
        $course->save();
        return redirect()->route('showCourses');
    }

    public function delete($id) {
      $course = DB::table('courses')->where('id', $id)->delete();
      return redirect()->route('showCourses');
    }

    public function view($id) {
      $course = DB::table('courses')->where('id', $id)->first();
      $videos = DB::table('videos')->where('course_id', $id)->get();
      return view('courses.view', ['course' => $course, 'videos' => $videos]);
    }
}
