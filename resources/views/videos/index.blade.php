@extends('layouts.app')
@section('title', 'Videos')
@section('content')
<div class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
              <h1>Manage Videos</h1>
            </div>
            <div class="col-sm-6 text-right">
              <a href="/videos/add" class="btn btn-def">Add Video</a>
            </div>
        </div>
        <div class="row">
          <?php foreach($videos as $video): ?>
              <div class="col-12">
                  <div class="course-box">
                    <h2><?php echo $video->name; ?></h2>
                    <p><?php echo $video->description; ?></p>
                    <!--<p class="video-count">10 Videos</p>-->
                    <a href="/videos/edit/<?php echo $video->id; ?>" class="btn btn-def">Edit</a>
                  </div>
              </div>
          <?php endforeach; ?>
        </div>
    </div>
</div>
@endsection
