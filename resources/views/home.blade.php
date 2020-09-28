@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <h1>Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="course-box">
                  <h2>Free Course</h2>
                  <p>Explore the basics of ecommerce and get a good understanding of how to get the ball rolling with dropshipping.</p>
                  <p class="video-count">10 Videos</p>
                  <a href="/courses/view/4" class="btn btn-def">Explore</a>
                </div>
            </div>
            <div class="col-6">
                <div class="course-box">
                  <h2>Premium Course</h2>
                  <p>In this course we will get our hands dirty and walk you step by step how to launch an automated ecommerce store.</p>
                  <p class="video-count">10 Videos</p>
                  <a href="/courses/view/2" class="btn btn-def">Explore</a>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
              <div class="course-box">
                <h2>A community of entrepreneurs</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin est mauris, suscipit nec sapien nec, gravida auctor est. Suspendisse faucibus nec turpis vitae suscipit. Morbi eget fermentum quam. Aliquam erat volutpat. Integer ultrices magna ut erat tincidunt sodales. Curabitur dapibus magna non lorem condimentum tempor vel sed neque. Maecenas a tempus lacus, vehicula gravida erat. Nam a neque odio. Suspendisse blandit viverra turpis at maximus.</p>
                <a href="#" class="btn btn-def" style="background:#7289da;">Join our discord</a>
              </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
