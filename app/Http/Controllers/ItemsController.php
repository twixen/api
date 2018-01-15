<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Support\Facades\Log;

class ItemsController extends Controller {

    public function getAvailable() {
        return Item::where('amount', '>', '0')->get();
    }

    public function getNotAvailable() {
        return Item::where('amount', '0')->get();
    }

    public function getMoreFive() {
        return Item::where('amount', '>', '5')->get();
    }

    public function getItem($item) {
        return Item::find($item->id);
    }

    public function add() {
        $inputs = request()->only('name', 'amount');
        $item = new Item();
        $item->name = $inputs['name'];
        $item->amount = $inputs['amount'];
        $item->save();
        return response()->json($item, 200);
    }

    public function edit($item) {
        $inputs = request()->only('name', 'amount');
        $item->name = $inputs['name'];
        $item->amount = $inputs['amount'];
        $item->save();
        return response()->json($item, 200);
    }

    public function destroy($item) {
        $item->delete();
        return response()->json(null, 204);
    }

}
