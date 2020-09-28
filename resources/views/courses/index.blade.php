@extends('layouts.app')
@section('title', 'Courses')
@section('content')
<div class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
              <h1>Manage Courses</h1>
            </div>
            <div class="col-sm-6 text-right">
              <a href="/courses/add" class="btn btn-def">Add Course</a>
            </div>
        </div>
        <div class="row">
          <?php foreach($courses as $course): ?>
              <div class="col-12">
                  <div class="course-box">
                    <h2><?php echo $course->name; ?></h2>
                    <p><?php echo $course->description; ?></p>
                    <!--<p class="video-count">10 Videos</p>-->
                    <a href="/courses/edit/<?php echo $course->id; ?>" class="btn btn-def">Edit</a>
                  </div>
              </div>
          <?php endforeach; ?>
        </div>
    </div>
</div>
@endsection
