<?php

class ProjectController extends BaseController
{

    public function getForm()
    {
        return View::make('home.index');
    }

     public function postCreate()
    {
        $rules = array(
            'title' => 'required|min:6',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'RS' =>'required',
            'types' =>'required',
            'telephone' =>'required|alpha_num|min:10|max:10|',
            'description' => 'required|min:20',
            'context'=> 'required',
            'objectives'=> 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {

            $project = new Project;
            $project->title = Input::get('title');
            $project->firstname = Input::get('firstname');
            $project->lastname = Input::get('lastname');
            $project->email = Input::get('email');
            $project->RS = Input::get('RS');
            $project->types = Input::get('types');
            $project->telephone = Input::get('telephone');
            $project->description = Input::get('description', true);
            $project->context = Input::get('context');
            $project->objectives = Input::get('objectives');
            $project->constraint = Input::get('constraint');
            $project->confirmed = 0;
            $project->save();
            return Redirect::back();
        }
    }

    public function getValidate($id)
    {
        $post = Project::find($id);
        $post->confirmed = 2;
        $post->save();
        //Ajouter fonction mail
    }

    public function getDecline($id)
    {
        $post = project::find($id);
        $post->confirmed = 1;
        $post->save();
        return Redirect::back();
        //Ajouter fonction mail

    }

}