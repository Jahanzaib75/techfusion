<?php

namespace App\Http\Controllers\admin;
use App\Models\qoute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QouteControlles extends Controller
{
    public function index(){
        $record = qoute::get();
        return view('admin.modules.qouteus.listing',compact('record'));
    }
    public function destroy($id){
        $delete=qoute::find($id);
        $delete->delete();
    }
}
