<?php
namespace classes\User;

class User{

    public $user_id;
    public $user_name;
    public $user_login;
    public $user_mail;
    public $user_role;

    public function createUser(){

    }
    //  TODO - запускать сессию и сохраянть туда креды
    //  TODO - сигнлтон при логине
    //  TODO - после создания возвращать ID
}