<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupType;

class GroupTypeController extends Controller
{
    public function index()
    {
        $groupTypes = GroupType::all()->toArray();
        return array_reverse($groupTypes);
    }

    public function store(Request $request)
    {
        $groupType = new GroupType([
            'label' => $request->input('label'),
        ]);

        $groupType->save();
        return response()->json('Type de groupe créé !');
    }

    public function show($id)
    {
        $groupType = GroupType::find($id);
        return response()->json($groupType);
    }

    public function update($id, Request $request)
    {
        $groupType = GroupType::find($id);
        $groupType->update($request->all());

        return response()->json('Type de groupe modifié !');
    }

    public function destroy($id)
    {
        $groupType = GroupType::find($id);
        $groupType->delete();

        return response()->json('Type de groupe supprimé !');
    }
}
