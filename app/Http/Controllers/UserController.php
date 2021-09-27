<?php

namespace App\Http\Controllers;

use App\Http\Validations\UserValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $this->validate($request, UserValidation::$rules, UserValidation::$messages);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return response()->json(
            $user,
            201
        );
    }

    // public function show(string $id)
    // {
    //     $character = Character::find($id);
    //     if (is_null($character)) {
    //         return response('', 204);
    //     }
    //     $character->constellation = json_decode($character->constellation);
    //     $character->artifact = json_decode($character->artifact);
    //     $character->talent = json_decode($character->talent);
    //     $character->weapon = json_decode($character->weapon);
    //     return response()->json(
    //         $character
    //     );
    // }

    // public function update(string $id, Request $request)
    // {
    //     $character = Character::find($id);

    //     if (is_null($character)) {
    //         return response('', 204);
    //     }

    //     $character->fill($request->all());
    //     $character->save();
    //     return response()->json(
    //         $character
    //     );
    // }
    // public function destroy(string $id)
    // {
    //     $character = Character::destroy($id);

    //     if ($character === 0) {
    //         return response()->json(['erro' => 'Personagem não encontrado'], 404);
    //     }

    //     return response()->json('', 204);;
    // }
}
