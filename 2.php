<?php

    function is_email_valid($email)
    {
        if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) 
        {
            echo 'Email valid';
        } else {
            echo 'Email not valid';
        }
    }

    function is_phone_valid($phone)
    {
        if(preg_match("/(\+62(\d{8,15}))+/", $phone)) 
        {
            echo 'Phone valid';
        } else {
            echo 'Phone not valid';
        }
    }

    function is_usernamel_valid($username)
    {
        if(preg_match("/(^[a-z]{5,9})+/", $username)) 
        {
            echo 'Username valid';
        } else {
            echo 'Username not valid';
        }
    }

    function is_password_valid($password)
    {
        if(preg_match("/(^([a-zA-Z0-9\W\#]+){8,})+/", $password)) 
        {
            echo 'Password valid';
        } else {
            echo 'Password not valid';
        }
    }

    is_email_valid('ardi@gmail.com');
    is_phone_valid('081200000000');
    is_usernamel_valid('ardiw');
    is_password_valid('akulapaR@#');

?>