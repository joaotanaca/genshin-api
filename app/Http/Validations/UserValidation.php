<?php

namespace App\Http\Validations;


class UserValidation
{
    public static $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        'confirmPassword' => 'required|same:password',
    ];

    public static $messages = [
        'name.required' => 'O nome é obrigatório',
        'email.required' => 'O email é obrigatório',
        'password.required' => 'A senha é obrigatório',
        'password.min' => 'A senha deve ter no minimo 8 caracteres',
        'confirmPassword.same' => 'É preciso que as senhas estejem iguais',
        'confirmPassword.required' => 'É preciso que as senhas estejem iguais',
    ];
}
