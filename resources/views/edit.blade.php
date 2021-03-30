@extends('layout.header')

@section('content')

    @include('layout.user-headers')
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



        <p class="login-box-msg">Update User</p>

        <form method="post" enctype="multipart/form-data" action="{{url('update')}}">
            {{csrf_field()}}
            <div class="form-group has-feedback">
                <input type="hidden" name="id" value="{{$userDetails->id}}">

                <div class="form-group row">
                    <label for="name" class="col-md-1 col-form-label text-md-right">Name</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$userDetails->name}}" required autocomplete="name" autofocus>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-1 col-form-label text-md-right">Email</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                        name="email" value="{{$userDetails->email}}" required autocomplete="email" autofocus>

                    </div>
                </div>

                <div class="form-group row">
                            <label for="phone" class="col-md-1 col-form-label text-md-right">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('password') is-invalid @enderror" 
                                value="{{$userDetails->phone}}" name="phone" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-1 col-form-label text-md-right">Upload Profile Image</label>

                            <div class="col-md-6">
                            <img src="{{ URL::to('/') }}/images/{{ $userDetails->image }}" class="img-thumbnail" width="100" />
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" 
                                 name="image" required >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-1 col-form-label text-md-right">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" 
                                value="{{$userDetails->dob}}" name="dob" required >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-1 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="address" class="form-control @error('address') is-invalid @enderror" 
                                value="{{$userDetails->address}}" name="address" required>
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-1 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{$userDetails->city}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-1 col-form-label text-md-right">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{$userDetails->state}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-1 col-form-label text-md-right">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{$userDetails->country}}" required>
                            </div>
                        </div>

                
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    </body>
    </html>
@stop