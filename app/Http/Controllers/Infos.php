<?php

namespace App\Http\Controllers;

use App\Type_playant;
use App\Communication;
use App\Statut;
use Illuminate\Http\Request;

class Infos extends Controller
{
	public function index()
	{
		$communications=Communication::get()->all();
		$type_playants=Type_playant::get()->all();
		$statuts=Statut::get()->all();
		return view('infos',compact("communications","type_playants","statuts"));
	}
    public function store(Request $request)
	{
		$communication=Communication::where("id_mode_communication",$request->mode_communication)->first();
		$type_playant=Type_playant::where("id_type_playant",$request->type_playant)->first();
		$statut=Statut::where("id_statut",$request->statut)->first();
		$infos=[
				"statut"=>$request->statut,
				"mode_communication"=>$request->mode_communication,
				"anonymat"=>$request->anonymat,
				"type_playant"=>$request->type_playant,
		
		];
		
		return view("form",compact("infos","communication","type_playant","statut"));
	}
}
