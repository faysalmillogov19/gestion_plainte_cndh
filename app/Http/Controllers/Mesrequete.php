<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Plainte;
use App\Victime;
use App\Temoin;
use App\Playant;
use App\Personne;

use Illuminate\Http\Request;

class Mesrequete extends Controller
{
    public function show($val)
	{
		$playants=Playant::join('personnes','personnes.id',"=","playants.id_personne_playant")
						  ->join('plaintes','plaintes.id_playant_plainte','playants.id_personne_playant')
						  ->where("plaintes.etat",$val)
						  ->get();
						  
		$playants_liste=DB::select("select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where table_name= 'playants'");
		$victimes_liste=DB::select("select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where table_name= 'victimes'");
		$temoins_liste=DB::select("select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where table_name= 'temoins'");
		$plaintes_liste=DB::select("select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where table_name= 'plainte'");
		
		$except_list=["id","created_at","updated_at"];
		
		return view("admin.dataPlaintes",compact("playants","playants_liste","victimes_liste","plaintes_liste","temoins_liste"));
	}
}
