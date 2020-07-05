<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function create(){
        return view('artikel.form');
    }
    public function store(Request $req){
        $item = $req->all();
        $items = ArtikelModel::save($item);
        return redirect('/artikel');
    }
    public function index(){
        $items = ArtikelModel::get_all();
        return view('artikel.index', compact('items'));
    }
    public function show($id){
        $items = ArtikelModel::show_by_id($id);
        return view('artikel.detail', compact('items'));
    }
    public function destroy($id){
        $items = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
    public function edit($id){
        $items = ArtikelModel::show_by_id($id);
        return view('artikel.edit', compact('items'));
    }
    public function update($id, Request $req){
        $items = ArtikelModel::update($id, $req->all());
        return redirect('/artikel');
    }
}