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



        <p style="padding-left: 308px;
    font-weight: bold;margin: 20px 10px 20px;" class="login-box-msg">Sign in</p>
        

        <form method="post" action="{{url('login')}}">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group row">
             <label for="email" class="col-md-1 col-form-label text-md-right">Email</label>
            <div class="col-md-4">
                <input type="email" name="email" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
             <label for="email" class="col-md-1 col-form-label text-md-right">Password</label>
            <div class="col-md-4">
                <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            
            <div class="row">
                <!-- /.col -->
                <div class="col-md-4">
                    <button style="margin: 9px 287px 10px;
    width: 150px;" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{{url('register')}}">Click here to register</a>

    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    </body>
    </html>
@stop