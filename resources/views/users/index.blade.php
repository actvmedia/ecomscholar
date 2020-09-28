@extends('layouts.app')
@section('title', 'Users')
@section('content')
<div class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
              <h1>Manage Users</h1>
            </div>
        </div>
        <div class="row">
          <?php foreach($users as $user): ?>
              <div class="col-12">
                  <div class="course-box">
                    <h2><?php echo $user->name; ?></h2>
                    <p style="font-size:14px;font-weight:600;font-style:italic;">Member since <?php echo $user->created_at; ?></p>
                    <p>
                      <?php
                          switch($user->user_type) {
                            case 0:
                            echo "Free Member";
                            break;
                            case 1:
                            echo "Premium Member";
                            break;
                            case 2:
                            echo "Administrator";
                            break;
                          }
                      ?>
                    </p>
                    <!--<p class="video-count">10 Videos</p>-->
                    <a href="/users/edit/<?php echo $user->id; ?>" class="btn btn-def">Edit</a>
                  </div>
              </div>
          <?php endforeach; ?>
        </div>
    </div>
</div>
@endsection
