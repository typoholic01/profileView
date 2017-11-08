<?php
class User {
    public $uid;
    public $name;
    public $password;
    public $auth;
    public $status;
    
    public function info()
    {
        return '#'.$this->uid.': '.$this->name.' '.$this->password;
    }
}
?>