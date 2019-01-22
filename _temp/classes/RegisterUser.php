<?php

class RegisterUser
{
    public $login = '';

    public function checkForm()
    {
        $this->login = $_POST['login_form'];
        if (isset($this->login)){
            $brr = $_POST['login_form'];
            return $brr;
    }
    }

}
$obh = new RegisterUser();
echo $obh->checkForm();
interface iii
{
    const iooo = 12;
    public function uyu();
}

