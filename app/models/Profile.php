<?php


class Profile extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    public function agence(){
        $this->hasMany('Agence');
    }
    public function user(){
        $this->belongsTo('User');
    }
}