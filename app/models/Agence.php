<?php

class Agence extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agences';

    public function user(){
        $this->hasMany('User');
    }

    public function getId(){
        $this->id;
    }
}