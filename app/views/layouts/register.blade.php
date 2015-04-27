@extends('layouts.master')

@section('content')

        <div class="well">
            <h3>Sign Up</h3>
            <hr>
            {{Form::open(array('url' => 'register'))}}
            <div class="form-group">
                {{Form::label('firstname', 'Firstname')}}
                {{Form::text('firstname', Input::old('firstname'),  array('placeholder'=>'Enter firstname', 'class' => 'form-control'))}}
            </div>
            <p class="error">{{$errors->first('firstname')}}</p>
            <div class="form-group">
                {{Form::label('lastname', 'Lastname')}}
                {{Form::text('lastname', Input::old('lastname'),  array('placeholder'=>'Enter lastname', 'class' => 'form-control'))}}
            </div>
            <p class="error">{{$errors->first('lastname')}}</p>


            <div class="form-group">
                {{Form::label('email', 'E-mail Address')}}
                {{Form::text('email', Input::old('email'),  array('placeholder'=>'Enter email', 'class' => 'form-control'))}}
            </div>
            <p class="error">{{$errors->first('email')}}</p>

            <div class="form-group">
                {{Form::label('password', 'password')}}
                {{Form::password('password', array('placeholder'=>'Enter password', 'class' => 'form-control'))}}

            </div>
            <p class="error">{{$errors->first('password')}}</p>

            {{Form::submit('Sign Up!', array('class' => 'btn btn-primary btn-lg btn-block'))}}
            {{Form::close()}}
        </div>


@stop
