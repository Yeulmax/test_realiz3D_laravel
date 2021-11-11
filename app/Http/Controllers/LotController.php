<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lot;
use Validator;

class LotController extends Controller
{
    public function index()
    {
        $lots = Lot::all()->toArray();
        return array_reverse($lots);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'name'      => 'required',
            'group_id'  => 'required | integer | exists:groups,id'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        Lot::create($input);
        return response()->json('Lot créé !', 200);
    }

    public function show($id)
    {
        $lot = Lot::find($id);

        if (is_null($lot)){
            return response()->json("Le lot n'existe pas", 404);
        }
        return response()->json($lot);
    }

    public function update($id, Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'group_id' => 'integer| exists:groups,id'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $lot = Lot::find($id);
        if (is_null($lot)){
            return response()->json("Le lot n'existe pas", 404);
        }

        $lot->update($input);
        return response()->json('Lot modifié !', 200);
    }

    public function destroy($id)
    {
        $lot = Lot::find($id);

        if (is_null($lot)){
            return response()->json("Le lot n'existe pas", 404);
        }

        $lot->delete();
        return response()->json('Lot supprimé !');
    }
}
