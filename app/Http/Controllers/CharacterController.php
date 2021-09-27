<?php

namespace App\Http\Controllers;

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
        $character = Character::create([
            'name' => $request->name,
            'up_atributte' => $request->up_atributte,
            'element' => $request->element,
            'weapon_type' => $request->weapon_type,
            'constellation' => $request->constellation,
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
