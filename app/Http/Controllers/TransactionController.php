<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Locker;

class TransactionController extends Controller
{

    public function index(){
        return Transaction::all();
    }

    public function show($id){
        return Transaction::find($id);
    }

    public function store(Request $request){
        return Transaction::created($request->all());
    }

    public function update(Request $request,$id){
        $tran = Transaction::findOrFail($id);
        $tran->update($request->all());

        return $tran;
    }

    public function delete(Request $request,$id){
        $tran = Transaction::findOrFail($id);
        $tran->delete();

        return $tran;
    }
}
