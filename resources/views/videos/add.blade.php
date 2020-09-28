@extends('layouts.app')
@section('title', 'Add Course')
@section('content')
<div class="login-background">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-box">
                <div class="card-body">
                    <h1>Add a video</h1>
                    <br>
                    <form method="POST" action="{{ route('addVideo') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <div class="col-12">
                                <input id="video_name" type="text" class="form-control @error('video_name') is-invalid @enderror" name="video_name" placeholder="Video Name" value="{{ old('video_name') }}" autocomplete="off" required autofocus>

                                @error('video_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <input id="video_description" type="text" class="form-control @error('video_description') is-invalid @enderror" name="video_description" required autocomplete="off" placeholder="Video Description">

                                @error('video_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <input type="file" id="video_file" type="text" class="form-control @error('video_file') is-invalid @enderror" name="video_file" required>

                                @error('video_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <select id="course_id" class="form-control @error('course_id') is-invalid @enderror" name="course_id" required autocomplete="off">
                                    <option value="">Select Course</option>
                                    <?php foreach($courses as $course): ?>
                                      <option value="<?php echo $course->id; ?>"><?php echo $course->name; ?></option>
                                    <?php endforeach; ?>
                                </select>

                                @error('course_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn btn-def">
                                    Create
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
