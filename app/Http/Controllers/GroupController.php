<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Validator;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all()->toArray();
        return array_reverse($groups);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'name'              => 'required | string',
            'group_type_id'     => 'required | integer | exists:group_types,id'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        Group::create($input);
        return response()->json('Groupe créé !');
    }

    public function show($id)
    {
        $group = Group::find($id);

        if (is_null($group)){
            return response()->json("Le groupe n'existe pas", 404);
        }

        return response()->json($group);
    }

    public function update($id, Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'name'              => 'string',
            'group_type_id'     => 'integer| exists:group_types,id'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $group = Group::find($id);
        if (is_null($group)){
            return response()->json("Le groupe n'existe pas", 404);
        }

        $group->update($input);
        return response()->json('Groupe modifié !');
    }

    public function destroy($id)
    {
        $group = Group::find($id);

        if (is_null($group)){
            return response()->json("Le groupe n'existe pas", 404);
        }

        $group->delete();
        return response()->json('Groupe supprimé !');
    }
}
