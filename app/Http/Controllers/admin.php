<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Plainte;
use App\Victime;
use App\Temoin;
use App\Playant;
use App\Personne;
use App\Type_playant;
use App\Communication;
use App\Statut;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function index()
	{
		$playants=Playant::join('personnes','personnes.id',"=","playants.id_personne_playant")
						  ->join('plaintes','plaintes.id_playant_plainte','playants.id_personne_playant')
						  ->get();
						  
		$playants_liste=DB::select("select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where table_name= 'playants'");
		$victimes_liste=DB::select("select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where table_name= 'victimes'");
		$temoins_liste=DB::select("select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where table_name= 'temoins'");
		$plaintes_liste=DB::select("select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where table_name= 'plainte'");
		
		$except_list=["id","created_at","updated_at"];
		
		return view("admin.dataPlaintes",compact("playants","playants_liste","victimes_liste","plaintes_liste","temoins_liste"));
	}
	public function show($id)
	{
		$playant=Playant::join('personnes','personnes.id',"=","playants.id_personne_playant")->where("personnes.id",$id)->first();
		
		$plainte=Playant::join('plaintes','plaintes.id_playant_plainte',"=","playants.id_personne_playant")->where("plaintes.id_playant_plainte",$id)->first();
		$victimes=Victime::join('personnes','personnes.id',"=","victimes.id_personne_victime")->where("victimes.id_plainte_victime",$plainte->id)->get();
		$temoins=Temoin::join('personnes','personnes.id',"=","temoins.id_personne_temoin")->where("temoins.id_plainte_temoin",$plainte->id)->get();
		
		$statut=Statut::where("id_statut",$playant->statut)->first();
		$type_playant=Type_playant::where("id_type_playant",$playant->type_playant)->first();
		$communication=Communication::where("id_mode_communication",$playant->mode_communication)->first();
		
		return view("admin.detailsPlainte",compact("playant","plainte","victimes","temoins","statut","type_playant","communication"));
	}
	
	public function edit(Request $request,$id)
	{
		$var=explode("|",$id);
		$plainte= Plainte::where('id',$var[0])->first();
		$plainte->etat=$var[1];
		$plainte->save();
		return redirect()->route("plaintes.show",$plainte->id_playant_plainte);
	}
}
