@extends('layouts.app')
@section('title', 'Edit User')
@section('content')
<div class="login-background">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-box">
                <div class="card-body">
                    <h1>Edit User</h1>
                    <br>
                    <form method="POST" action="{{ route('editUser') }}">
                        <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="<?php echo $user->name; ?>" autocomplete="off" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="<?php echo $user->email; ?>" required autocomplete="off" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <select id="user_type" class="form-control @error('user_type') is-invalid @enderror" name="user_type" required autocomplete="off">
                                    <option value="">Member Type</option>
                                    <option value="0" <?php if($user->user_type == 0) { echo "selected"; } ?>>Free</option>
                                    <option value="1" <?php if($user->user_type == 1) { echo "selected"; } ?>>Premium</option>
                                    <option value="2" <?php if($user->user_type == 2) { echo "selected"; } ?>>Administrator</option>
                                </select>

                                @error('user_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn btn-def">Save</button>
                                <a class="btn btn-def btn-delete" href="/users/delete/<?php echo $user->id; ?>">Delete</a>
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
