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
        return response()->json(
            Character::create([
                'name' => $request->name,
                'up_atributte' => $request->up_atributte,
                'element' => $request->element,
                'weapon_type' => $request->weapon_type,
            ]),
            201
        );
    }

    public function get(int $id)
    {
        $character = Character::find($id);
        if (is_null($character)) {
            return response('', 204);
        }
        return response()->json(
            $character
        );
    }
}
