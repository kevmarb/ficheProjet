@extends('layouts.master')

@section('content')

    @if(Auth::guest())
        <h1> BAP FICHE PROJET </h1>

        {{Form::open(array('url' => 'create/project'))}}

        <div class="form-group">
            {{Form::label('title', 'Nom du projet')}}
            {{Form::text('title', Input::old('title'),  array('placeholder'=>'Entrer le nom du projet', 'class' => 'form-control'))}}
        </div>
        <p class="error">{{$errors->first('title')}}</p>

        <div class="form-group">
            {{Form::label('firstname', 'Prénom du contact')}}
            {{Form::text('firstname', Input::old('firstname'),  array('placeholder'=>'entrer le prénom', 'class' => 'form-control'))}}
        </div>
        <p class="error">{{$errors->first('firstname')}}</p>

        <div class="form-group">
            {{Form::label('lastname', 'Nom du contact')}}
            {{Form::text('lastname', Input::old('lastname'),  array('placeholder'=>'entrer le nom', 'class' => 'form-control'))}}
        </div>
        <p class="error">{{$errors->first('firstname')}}</p>

        <div class="form-group">
            {{Form::label('email','Addresse E-mail')}}
            {{Form::text('email', Input::old('email'),  array('placeholder'=>'Entre votre email', 'class' => 'form-control'))}}
        </div>
        <p class="error">{{$errors->first('email')}}</p>

        <div class="form-group">
            {{Form::label('telephone','Telephone')}}
            {{Form::text('telephone', Input::old('telephone'),  array('placeholder'=>'Numéro de téléphone', 'class' => 'form-control'))}}
        </div>
        <p class="error">{{$errors->first('telephone')}}</p>

        <div class="form-group">
            {{Form::label('RS','Description de la société')}}
            {{Form::text('RS', Input::old('RS'),  array('placeholder'=>'Décrivez en quelque mots', 'class' => 'form-control'))}}
        </div>
        <p class="error">{{$errors->first('RS')}}</p>
        <div class="form-group">
            {{Form::label('types','Type de projet')}}
            {{Form::select('types', array('Web' => 'Web', 'jv' => 'jeux videos', '3D' => '3D', '2D'=>' animation 2D',
            'IM' => 'Installation Multimédia', 'print' => 'Print', 'cd' => 'CD-ROM', 'evenement'=> 'Evenement', 'AO' => 'Appel d\'offre',
            'BP' => 'Business Plan'));}}
        </div>
        <p class="error">{{$errors->first('types')}}</p>

        <div class="form-group">
            {{Form::label('description', 'Description du projet')}}
            {{Form::textarea('description', Input::old('description'),  array('placeholder'=>'Décrivez votre projet', 'class' => 'form-control'))}}
        </div>
        <p class="error">{{$errors->first('description')}}</p>

        <div class="form-group">
            {{Form::label('context', 'Contexte de la demande')}}
            {{Form::textarea('context', Input::old('context'),  array('placeholder'=>'Contexte de la demande', 'class' => 'form-control'))}}
        </div>
        <p class="error">{{$errors->first('context')}}</p>

        <div class="form-group">
            {{Form::label('objectives', 'Objectifs du projet')}}
            {{Form::textarea('objectives', Input::old('objectives'),  array('placeholder'=>'Définissez les objectifs du projet', 'class' => 'form-control'))}}
        </div>
        <p class="error">{{$errors->first('objectives')}}</p>

        <div class="form-group">

            {{Form::label('constraint', 'Contraintes du projet (ne pas remplir s\'il n\'y en a pas)')}}
            {{Form::textarea('constraint', Input::old('constraint'),  array('placeholder'=>'Définissez les contraintes du projet', 'class' => 'form-control'))}}
        </div>
        <p class="error">{{$errors->first('objectives')}}</p>


        {{Form::submit('Create!', array('class' => 'btn btn-success btn-lg btn-block'))}}

        {{Form::close()}}
    @else
        @foreach($projects as $project)
            <div class="well">

                <h3>{{{$project->title}}}</h3>

                <p>{{{$project->description}}}</p>

                <p>{{$project->type}}</p>

                <p>{{{$project->email}}}</p>

                @if($project->confirmed == 0)

                    <a href="{{URL::to('validProject/'.$project->id)}}" class="btn btn-success"> Confirm</a>
                    <a href="{{URL::to('declineProject/'.$project->id)}}" class="btn btn-danger"> Decline</a>

                @endif
            </div>
        @endforeach
        {{$projects->links()}}
    @endif
@stop

@section('sidebar')

    @if(Auth::guest())
        <div class="well">
            <h3>Log In</h3>
            <p class="auth-message error animated shake text-center {{Session::get('authError') ? 'active' : ''}}">
                {{Session::get('authError')}}
            </p>
            <hr>
            {{Form::open(array('url' => 'auth/login'))}}
            <div class="form-group">
                {{Form::label('email', 'E-Mail Address')}}
                {{Form::text('email', Input::old('email'),  array('placeholder'=>'Enter email', 'class' => 'form-control'))}}
            </div>
            <p class="error">{{$errors->first('email')}}</p>
            <div class="form-group">
                {{Form::label('password', 'Password')}}
                {{Form::password('password',  array('placeholder'=>'Enter password', 'class' => 'form-control'))}}
            </div>
            <p class="error">{{$errors->first('password')}}</p>
            {{Form::submit('Log In!', array('class' => 'btn btn-success btn-lg btn-block'))}}
            {{Form::close()}}
        </div>
    {{--@if( admin == true)

    @if(agence =true)--}}
    @else
        Hello {{{Auth::user()->username}}}
        <a href="{{URL::to('logout')}}" class="btn btn-primary"> Log Out</a>
    @endif
@stop