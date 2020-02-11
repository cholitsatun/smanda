<?php

namespace App\Http\Controllers;

use App\Paslon;
use App\Visimisi;
use Illuminate\Http\Request;

class SuaraController extends Controller
{
    public function index()
    {
        $visi = Visimisi::all();
        $paslon = Paslon::all();
        return view('suara.home', compact('visi', 'paslon'));
    }
    public function calcList($id)
{
    $vm=Visimisi::find($id);
    $vm = Visimisi::select( 'visi', 'misi')->where('id', $id)->get();
    return Response::json($vm);
}


}
