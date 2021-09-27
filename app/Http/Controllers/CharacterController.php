<?php

namespace App\Http\Controllers;

use App\Http\Validations\CharacterController\StoreValidation;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        return Character::all();
    }

    public function store(Request $request)
    {

        $this->validate($request, StoreValidation::$rules, StoreValidation::$messages);

        $character = Character::create([
            'name' => $request->name,
            'up_atributte' => $request->up_atributte,
            'element' => $request->element,
            'weapon_type' => $request->weapon_type,
            'constellation' => json_encode($request->constellation),
            'artifact' => json_encode($request->artifact),
            'talent' => json_encode($request->talent),
            'weapon' => json_encode($request->weapon),
        ]);
        return response()->json(
            $character,
            201
        );
    }

    public function show(string $id)
    {
        $character = Character::find($id);
        if (is_null($character)) {
            return response('', 204);
        }
        $character->constellation = json_decode($character->constellation);
        $character->artifact = json_decode($character->artifact);
        $character->talent = json_decode($character->talent);
        $character->weapon = json_decode($character->weapon);
        return response()->json(
            $character
        );
    }

    public function update(string $id, Request $request)
    {
        $character = Character::find($id);

        if (is_null($character)) {
            return response('', 204);
        }

        $character->fill($request->all());
        $character->save();
        return response()->json(
            $character
        );
    }
    public function destroy(string $id)
    {
        $character = Character::destroy($id);

        if ($character === 0) {
            return response()->json(['erro' => 'Personagem não encontrado'], 404);
        }

        return response()->json('', 204);;
    }
}
