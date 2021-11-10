<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all()->toArray();
        return array_reverse($groups);
    }

    public function store(Request $request)
    {
        $group = new Group([
            'name'              => $request->input('name'),
            'parent_group_id'   => $request->input('parent_group_id'),
            'group_type_id'     => $request->input('group_type_id')
        ]);

        $group->save();
        return response()->json('Groupe créé !');
    }

    public function show($id)
    {
        $group = Group::find($id);
        return response()->json($group);
    }

    public function update($id, Request $request)
    {
        $group = Group::find($id);
        $group->update($request->all());

        return response()->json('Groupe modifié !');
    }

    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();

        return response()->json('Groupe supprimé !');
    }
}
