<?php

namespace App\Http\Validations\CharacterController;


class StoreValidation
{
    public static $rules = [
        'name' => 'required',
        'up_atributte' => 'required',
        'element' => 'required',
        'weapon_type' => 'required',
        'constellation' => 'required|array',
        'artifact' => 'required|array',
        'talent' => 'required|array',
        'weapon' => 'required|array',
    ];

    public static $messages = [
        'name.required' => 'O nome é obrigatório',
        'up_atributte.required' => 'O atributo para subir de nível é obrigatório',
        'element.required' => 'O Elemento é obrigatório',
        'weapon_type.required' => 'O tipo de arma é obrigatório',
        'constellation.required' => 'A constelação  é obrigatório',
        'artifact.required' => 'O artefato é obrigatório',
        'talent.required' => 'O talento é obrigatório',
        'weapon.required' => 'A arma é obrigatório',
    ];
}
