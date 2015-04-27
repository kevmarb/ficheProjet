<?php


class Project extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projetsroles';

    public function users(){
        $this->hasMany('User');
    }
    public function projets(){
        $this->hasMany('Project');
    }

}


