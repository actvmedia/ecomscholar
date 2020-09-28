@extends('layouts.app')
@section('title', 'View Course')
@section('content')
<div class="dashboard">
    <div class="container">
        <?php if($course->category == 1 && Auth::user()->user_type == 0): ?>
          <div class="row">
                <div class="col-12">
                    <div class="course-box">
                      <h2 style="margin-bottom:0px;">This course is accessible by premium users only.</h2>
                      <a href="#" class="btn btn-def">Upgrade</a>
                    </div>
                </div>
          </div>
        <?php else: ?>
          <div class="row">
              <div class="col-sm-6">
                <h1><?php echo $course->name; ?></h1>
                <p><?php echo $course->description; ?></p>
              </div>
          </div>
        <div class="row">
              <div class="col-8">
                  <div class="course-box">
                      <?php $i = 0; foreach($videos as $video): $i++;?>
                        <?php if($i == 1): ?>
                            <h2 class="video-name"><?php echo $video->name; ?></h2>
                            <video width="100%" height="auto" controls>
                              <?php $filename = "uploads/videos/test.mp4"; ?>
                              <source src="/storage/<?php echo $video->video_path; ?>" type="video/webm">
                              Your browser does not support the video tag.
                            </video>
                          <p class="video-description"><?php echo $video->description; ?></p>
                        <?php endif; ?>
                      <?php endforeach; ?>
                  </div>
              </div>

              <div class="col-4">
                  <div class="course-box">
                    <h2>Course Content</h2>
                    <?php foreach($videos as $video): ?>
                      <a href="#" class="video-link" data-videosrc="<?php echo $video->video_path; ?>" data-videoname="<?php echo $video->name; ?>" data-videodesc="<?php echo $video->description; ?>"><?php echo $video->name; ?></a>
                    <?php endforeach; ?>
                  </div>
              </div>
        </div>
      <?php endif; ?>
    </div>
</div>
@endsection
