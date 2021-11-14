<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\GroupType;
use Validator;

class GroupTypeController extends Controller
{
    public function index(): array
    {
        $groupTypes = GroupType::all()->toArray();
        return array_reverse($groupTypes);
    }

    public function store(Request $request): JsonResponse
    {

        $input = $request->all();

        $validator = Validator::make($input,[
            'label' => 'required | string'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        GroupType::create($input);
        return response()->json('Type de groupe créé !');
    }

    public function show($id): JsonResponse
    {
        $groupType = GroupType::find($id);

        if (is_null($groupType)){
            return response()->json("Le type de groupe n'existe pas", 404);
        }

        return response()->json($groupType);
    }

    public function update($id, Request $request): JsonResponse
    {
        $groupType = GroupType::find($id);

        if (is_null($groupType)){
            return response()->json("Le type de groupe n'existe pas", 404);
        }

        $groupType->update($request->all());
        return response()->json('Type de groupe modifié !');
    }

    public function destroy($id): JsonResponse
    {
        $groupType = GroupType::find($id);

        if (is_null($groupType)){
            return response()->json("Le type de groupe n'existe pas", 404);
        }

        $groupType->delete();
        return response()->json('Type de groupe supprimé !');
    }
}
