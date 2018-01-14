<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller {

    public function getAvailable() {
        return Item::where('amount', '>', '0')->get()->toJson();
    }

    public function getNotAvailable() {
        return Item::where('amount', '0')->get()->toJson();
    }

    public function getMoreFive() {
        return Item::where('amount', '>', '5')->get()->toJson();
    }

    public function add() {
        $inputs = request()->only('name', 'amount');
        $item = new Item();
        $item->name = $inputs['name'];
        $item->amount = $inputs['amount'];
        $item->save();
    }

    public function edit($item) {
        $inputs = request()->only('name', 'amount');
        $item->name = $inputs['name'];
        $item->amount = $inputs['amount'];
        $item->save();
    }

    public function destroy($item) {
        Item::find($item->id)->delete();
    }

}
