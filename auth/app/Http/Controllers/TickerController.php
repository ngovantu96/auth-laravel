<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TickerController extends Controller
{
    public function index(){
        return view('home.ticker.list');
    }
    public function create(){
        return view('home.ticker.create');
    }

    public function store(Request $request){

        return redirect()->route('ticker.list');
    }


    public function edit($id){
        return view('home.ticker.edit');
    }
    public function update(Request $request, $id){
        return redirect()->route('ticker.list');
    }
    public function delete($id){
        return redirect()->route('ticker.list');
    }
}
