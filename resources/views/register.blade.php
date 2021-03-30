@extends('layout.header')

@section('content')

    <!-- /.login-logo -->
    <div class="login-box-body">

        <!-- for validation errors -->
        @if(count($errors) > 0)
            <div id="error" class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                @foreach($errors->all() as $error)
                    <div class="msg">{{$error}}</div>
                @endforeach
            </div>
        @endif



        @if(Session::get('error_msg'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                {{Session::get('error_msg')}}
            </div>
        @elseif(Session::get('success_msg'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success !</h4>
                {{Session::get('success_msg')}}
            </div>
        @endif



        <p  class="login-box-msg">Sign up</p>

        <!-- <form method="post" action="{{url('register')}}">
            {{csrf_field()}}
            <div class=" col-md-4">
            <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
            <label for="email">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Email"  value="{{old('email')}}">
            <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            
            <div class="row col-md-4">
                
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
               
            </div>
        </form> -->

        <form method="POST" enctype="multipart/form-data" action="{{url('register')}}">
        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-1 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-1 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirm_password" class="col-md-1 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="confirm_password" type="password" class="form-control" name="confirm_password" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-md-1 col-form-label text-md-right">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('password') is-invalid @enderror" name="phone" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-1 col-form-label text-md-right">Upload Profile Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-1 col-form-label text-md-right">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" required >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-1 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="address" class="form-control @error('address') is-invalid @enderror" name="address" required>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-1 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-1 col-form-label text-md-right">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-1 col-form-label text-md-right">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                Register
                                </button>
                            </div>
                        </div>
                    </form>
        <div class="row col-xs-4">
        <a href="{{url('login')}}">Click here to login</a>
        </div>
    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    </body>
    </html>
@stop