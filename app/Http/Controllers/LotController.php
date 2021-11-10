<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lot;

class LotController extends Controller
{
        public function index()
        {
            $lots = Lot::all()->toArray();
            return array_reverse($lots);
        }

        public function store(Request $request)
        {
            $lot = new Lot([
                'name'      => $request->input('name'),
                'group_id'  => $request->input('group_id')
            ]);

            $lot->save();
            return response()->json('Lot créé !');
        }

        public function show($id)
        {
            $lot = Lot::find($id);
            return response()->json($lot);
        }

        public function update($id, Request $request)
        {
            $lot = Lot::find($id);
            $lot->update($request->all());

            return response()->json('Lot modifié !');
        }

        public function destroy($id)
        {
            $lot = Lot::find($id);
            $lot->delete();

            return response()->json('Lot supprimé !');
        }
}
