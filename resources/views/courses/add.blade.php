@extends('layouts.app')
@section('title', 'Add Course')
@section('content')
<div class="login-background">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-box">
                <div class="card-body">
                    <h1>Add a course</h1>
                    <br>
                    <form method="POST" action="{{ route('addCourse') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-12">
                                <input id="course_name" type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name" placeholder="Course Name" value="{{ old('course_name') }}" autocomplete="off" required autofocus>

                                @error('course_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <input id="course_description" type="text" class="form-control @error('course_description') is-invalid @enderror" name="course_description" required autocomplete="off" placeholder="Course Description">

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
                                    <option value="0">Free</option>
                                    <option value="1">Premium</option>
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
