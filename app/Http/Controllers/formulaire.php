<?php

namespace App\Http\Controllers;
use App\custom\CustomFunction;
use App\Plainte;
use App\Victime;
use App\Temoin;
use App\Playant;
use App\Personne;

use Illuminate\Http\Request;

class formulaire extends Controller
{
    public function index()
	{
		return redirect("/infos");
	}
	
	public function store(Request $request)
	{
		//infos_personnelles
		$nom_complet_personnelle=$request->nom_complet;
		
		if($request->signature!=null)
		{
			$nom_complet_personnelle=$nom_complet_personnelle."  ".$request->signature;
		}
		$email_personnelle=$request->email;
		$adresse_personnelle=$request->adresse;
		$telephone_personnelle=$request->telephone;
		$bp_personnelle=$request->bp;
		//dd($request->bp);
		$infos_personnelles=CustomFunction::create_Personne($nom_complet_personnelle,$adresse_personnelle,$telephone_personnelle,$email_personnelle,$bp_personnelle);
		
		//infos_playant
		$playant=new Playant;
		
		$playant->statut=$request->statut;
		$playant->type_playant=$request->type_playant;
		$playant->anonymat=$request->anonymat;
		
		$playant->mode_communication=$request->mode_communication;
		$playant->id_personne_playant=$infos_personnelles;
		$playant->save();
		
		//infos_plaintes
		$plainte=new Plainte;
		$plainte->description_faits=$request->description_faits;
		$plainte->details_responsable=$request->detail_responsable;
		$plainte->autre_reglement=$request->autre_reglement;
		$plainte->id_playant_plainte =$infos_personnelles;
		$plainte->etat ="En_cours";
		$plainte->preuve_allegation=CustomFunction::uploadFichier($request->file('preuve_allegation'),"uploads/allegations/","allegation_");
		if($request->preuve_mandat!=null)
		{
			$plainte->preuve_mandat=CustomFunction::uploadFichier($request->file('preuve_mandat'),"uploads/mandats/","mandat_");
		}
		
		$plainte->save();
		
		//infos_victimes
		$count_victime=count($request->input('nom_complet_victime'));
		$nom_complet_victime=CustomFunction::array_of_array($request->input('nom_complet_victime'));
		$email_victime=CustomFunction::array_of_array($request->input('email_victime'));
		$adresse_victime=CustomFunction::array_of_array($request->input('adresse_victime'));
		$telephone_victime=CustomFunction::array_of_array($request->input('telephone_victime'));
		$bp_victime=CustomFunction::array_of_array($request->input('bp_victime'));
		for($i=0;$i<$count_victime;$i++)
		{
			if($nom_complet_victime[$i]!=null)
			{
				$victime=new Victime;
				$victime->id_personne_victime=CustomFunction::create_Personne($nom_complet_victime[$i],$adresse_victime[$i],$telephone_victime[$i],$email_victime[$i],$bp_victime[$i]);
				$victime->id_plainte_victime=$plainte->id;
				$victime->save();
			}
		}
		
		//infos_temoins
		$count_temoin=count($request->input('nom_complet_temoin'));
		$nom_complet_temoin=CustomFunction::array_of_array($request->input('nom_complet_temoin'));
		$email_temoin=CustomFunction::array_of_array($request->input('email_temoin'));
		$adresse_temoin=CustomFunction::array_of_array($request->input('adresse_temoin'));
		$telephone_temoin=CustomFunction::array_of_array($request->input('telephone_temoin'));
		$bp_temoin=CustomFunction::array_of_array($request->input('bp_temoin'));
		for($i=0;$i<$count_temoin;$i++)
		{
			if($nom_complet_temoin[$i]!=null)
			{
				$temoin=new temoin;
				$temoin->id_personne_temoin=CustomFunction::create_Personne($nom_complet_temoin[$i],$adresse_temoin[$i],$telephone_temoin[$i],$email_temoin[$i],$bp_temoin[$i]);
				$temoin->id_plainte_temoin=$plainte->id;
				$temoin->save();
			}
		}
		
		return redirect("/");
	}
}
