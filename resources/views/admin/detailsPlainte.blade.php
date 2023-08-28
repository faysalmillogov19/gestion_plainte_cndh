@extends("layouts.formLayout")
@section("content")
  <form action="{{route('form.store')}}" class="container" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <br>
  <div id="infos_personnelle" class="card">
	  <h2 class="card-header text-center">Information personnelle</h2>
	  <div class="card-body">	  

		
		<div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Nom complet *</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="nom_complet" value="{{$playant->nom}}" disabled placeholder="" required>
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Adresse</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$playant->adresse}}" disabled placeholder="" name="adresse" >
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Telephone</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$playant->telephone}}" disabled name="telephone" placeholder="" required>
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$playant->email}}" disabled  name="email" placeholder="">
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Boîte postale</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$playant->bp}}" disabled  name="bp" placeholder="">
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Statut</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$statut->libelle_statut}}" disabled  name="bp" placeholder="">
		</div>
	  </div>
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Type de Playant</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$type_playant->libelle_type_playant}}" disabled  name="bp" placeholder="">
		</div>
	  </div>
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Communication</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$communication->libelle_communication}}" disabled  name="bp" placeholder="">
		</div>
	  </div>
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Anonymat</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" @if($playant->anonymat==1) value="Oui"  @else value="Non" @endif  disabled>
		</div>
	  </div>

 </div>  
 
 <br>
 <div id="infos_plainte" class="card">
	  <h2 class="card-header text-center">Information relative à la plainte ({{$plainte->etat}})</h2>
	  <div class="card-body">
		
		<div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Description des faits</label>
			<div class="col-sm-10">
			  <textarea type="text" class="form-control" id="inputPassword" name="description_faits" placeholder="" disabled>{{$plainte->description_faits}}</textarea>
			</div>
		</div>
		
		<div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Quelques informations sur le responsable</label>
			<div class="col-sm-10">
			  <textarea type="text" class="form-control" id="inputPassword" name="detail_responsable" disabled>{{$plainte->details_responsable}}</textarea>
			</div>
		</div>

		<div class="form-group row">
		    
			  <label class="col-sm-2 col-form-label">Autres règlements</label>
			 <div class="col-sm-10">
			  <textarea type="text" name="autre_reglement"class="form-control" disabled>{{$plainte->autre_reglement}}</textarea>
			</div>
		</div>
		<div class="form-group row">
		    
			  <label class="col-sm-2">Preuve allegations</label>
			 <div class="col-sm-10">
			  <a href="{{$plainte->preuve_allegation}}"disabled>{{$plainte->preuve_allegation}}</a>
			</div>
		</div>
		
		<div class="form-group row">
		    
			  <label class="col-sm-2">Preuve mandat</label>
			 <div class="col-sm-10">
			  <a href="{{$plainte->preuve_mandat}}"disabled>{{$plainte->preuve_mandat}}</a>
			</div>
		</div>
		
	 </div>
 </div>
 
<br>
  <div id="infos_personnelle" class="card">
	  <h2 class="card-header text-center">Informations relatives aux victimes</h2>
	  <div class="card-body">	  
	
	@foreach($victimes as $victime)
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Nom </label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="nom_complet" value="{{$victime->nom}}" disabled placeholder="" required>
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Adresse</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$victime->adresse}}" disabled placeholder="" name="adresse" >
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Telephone</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$victime->telephone}}" disabled name="telephone" placeholder="" required>
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$victime->email}}" disabled  name="email" placeholder="">
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Boîte postale</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$victime->bp}}" disabled  name="bp" placeholder="">
		</div>
	  </div>
	  <hr>
	  @endforeach
	  

	 </div>
 </div>
 
 
 <br>
  <div id="infos_personnelle" class="card">
	  <h2 class="card-header text-center">Informations relatives aux témoins</h2>
	  <div class="card-body">	  

		
	@foreach($temoins as $temoin)
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Nom </label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="nom_complet" value="{{$temoin->nom}}" disabled placeholder="" >
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Adresse</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$temoin->adresse}}" disabled placeholder="" name="adresse" >
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Telephone</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$temoin->telephone}}" disabled name="telephone" placeholder="" required>
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$temoin->email}}" disabled  name="email" placeholder="">
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Boîte postale</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" value="{{$temoin->bp}}" disabled  name="bp" placeholder="">
		</div>
	  </div>
	  <hr>
	  @endforeach
	  
	 </div>
 </div>
 
 <div class="card">
	 <div class="form-group">
		 <!--a id="back_infos_personnelle" class="btn btn-outline-danger ">retour</a-->
		<a id="next_infos_personnelle" href="{{route('plaintes.edit',$plainte->id.'|En_cours')}}" class="btn btn-outline-info float-center">En cours</a>	
		<a id="next_infos_personnelle" href="{{route('plaintes.edit',$plainte->id.'|Annuler')}}" class="btn btn-outline-info float-center">Annuler</a>	
		<a id="next_infos_personnelle" href="{{route('plaintes.edit',$plainte->id.'|Valider')}}" class="btn btn-outline-info float-center">Valider</a>	
	 </div>
 </div>

 
  </form>
@endsection