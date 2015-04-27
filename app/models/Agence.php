<?php
/**
 * Created by PhpStorm.
 * User: Steeve Jerent
 * Date: 27/04/2015
 * Time: 17:50
 */

class Agence extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profile';

    public function user(){
        $this->hasMany('User');
    }
}