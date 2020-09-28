@extends('layouts.app')
@section('title', 'Edit Course')
@section('content')
<div class="login-background">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-box">
                <div class="card-body">
                    <h1>Edit Course</h1>
                    <br>
                    <form method="POST" action="{{ route('editCourse') }}">
                        <input type="hidden" name="course_id" value="<?php echo $course->id; ?>">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <input id="course_name" type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name" placeholder="Course Name" value="<?php echo $course->name; ?>" autocomplete="off" required autofocus>

                                @error('course_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <input id="course_description" type="text" class="form-control @error('course_description') is-invalid @enderror" name="course_description" value="<?php echo $course->description; ?>" required autocomplete="off" placeholder="Course Description">

                                @error('course_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <select id="course_category" class="form-control @error('course_category') is-invalid @enderror" name="course_category" required autocomplete="off">
                                    <option value="">Course Category</option>
                                    <option value="0" <?php if($course->category == 0) { echo "selected"; } ?>>Free</option>
                                    <option value="1" <?php if($course->category == 1) { echo "selected"; } ?>>Premium</option>
                                </select>

                                @error('course_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn btn-def">Save</button>
                                <a class="btn btn-def btn-delete" href="/courses/delete/<?php echo $course->id; ?>">Delete</a>
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
