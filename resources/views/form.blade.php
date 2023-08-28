@extends("layouts.formLayout")
@section("content")
  <form action="{{route('form.store')}}" class="container" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <br>
  <div id="infos_personnelle container" class="card">
	  <h2 class="card-header text-center bg-success text-white">Information personnelle</h2>
	  <div class="card-body">	  

		
		<div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Nom complet *</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="nom_complet" placeholder="" required>
		</div>
	  </div>
	  
	  @if($statut->libelle_statut!="individu")
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Signature *</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="signature" placeholder="" required>
		</div>
	  </div>
	  @endif
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Adresse</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" placeholder="" name="adresse" >
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Telephone</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="telephone" placeholder="" required>
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="email" placeholder="">
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Boîte postale</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="bp" placeholder="">
		</div>
	  </div>

		
		<div class="form-group">
			<!--a id="back_infos_personnelle" class="btn btn-outline-danger ">retour</a>
			<a id="next_infos_personnelle" class="btn btn-outline-info float-right">suivant</a-->		
		</div>
	 </div>
 </div>  
 
 <br>
 <div id="infos_plainte" class="card">
	  <h2 class="card-header text-center bg-success text-white">Information relative à la plainte</h2>
	  <div class="card-body">
		
		<div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Description des faits</label>
			<div class="col-sm-10">
			  <textarea type="text" class="form-control" id="inputPassword" name="description_faits" required></textarea>
			</div>
		</div>
		
		<div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Quelques informations sur le responsable</label>
			<div class="col-sm-10">
			  <textarea type="text" class="form-control" id="inputPassword" name="detail_responsable" placeholder=""></textarea>
			</div>
		</div>

		<div class="row">
			<div class="form-group col m-6">
			  <label for="detail_responsable">Avez vous eu recours à d'autres moyens pour régler le problème?</label>
				<div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input boolean_autre_reglement" type="radio" name="boolean_autre_reglement" id="inlineRadio1" value="1">
					  <label class="form-check-label" for="inlineRadio1">Oui</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input boolean_autre_reglement" type="radio" name="boolean_autre_reglement" id="inlineRadio2" value="0">
					  <label class="form-check-label" for="inlineRadio2">Non</label>
					</div>
				</div>
			</div>
			<div class="form-group col m-6">
			  <label for="detail_responsable">Si oui dites nous lesquels</label>
			  <textarea type="text" name="autre_reglement"class="form-control" ></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="custom-file">
				<input type="file" name="preuve_allegation"class="custom-file-input" id="validatedCustomFile" required>
				<label class="custom-file-label" for="validatedCustomFile">Preuve allégation</label>
				<div class="invalid-feedback">Example invalid custom file feedback</div>
			 </div>
		 </div>
		@if(strtolower($type_playant->libelle_type_playant)!='victime' && strtolower($type_playant->libelle_type_playant)!='victimes' )
		<div class="form-group"> 
			 <div class="custom-file">
				<input type="file" name="preuve_mandat" class="custom-file-input preuve_mandat" id="validatedCustomFile2" required>
				<label class="custom-file-label" for="validatedCustomFile">Preuve mandat</label>
				<div class="invalid-feedback">Example invalid custom file feedback</div>
			 </div>
		 </div>
		@endif
		 
		<!--div class="checkbox">
		  <label><input type="checkbox" name="remember"> Remember me</label>
		</div-->
		<div class="form-group">
			<!--a class="btn btn-outline-danger ">retour</a>
			<a class="btn btn-outline-info float-right">suivant</a-->			 
		</div>
		
	 </div>
 </div>
 
<br>
  <div class="card infos_victimes">
	  <h2 class="card-header text-center  bg-success text-white">Informations relatives aux victimes ( <span class="btn btn-warning ajouter_victime">ajouter</span> )  </h2>
	 <div class="">
	  <div class="card-body ">	  
		
		<div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Nom complet *</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="nom_complet_victime[]" required>
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Adresse</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" placeholder="" name="adresse_victime[]">
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Telephone *</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="telephone_victime[]" required>
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="email_victime[]">
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Boîte postale</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="bp_victime[]">
		</div>
	  </div>
	  <hr/>
	 </div>
	</div>
 </div>
 
 
 <br>
  <div id="infos_temoins" class="card infos_temoins">
	  <h2 class="card-header text-center bg-success text-white">Informations relatives aux témoins ( <span class="btn btn-warning ajouter_temoin">ajouter</span> )</h2>
	  <div class="card-body">	
	  
		<div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Nom complet *</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="nom_complet_temoin[]" required>
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Adresse</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="adresse_temoin[]">
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Telephone *</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="telephone_temoin[]" required>
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="email_temoin[]" placeholder="">
		</div>
	  </div>
	  
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Boîte postale</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="inputPassword" name="bp_temoin[]" placeholder="">
		</div>
	  </div>

	
	 </div>
 </div>
 
 <div id="infos_personnelle" class="card">
	 <div class="form-group">
		 <!--a id="back_infos_personnelle" class="btn btn-outline-danger ">retour</a-->
		<button id="next_infos_personnelle" class="btn btn-outline-info float-right bg-success text-white">soumettre</button>	
	 </div>
 </div>


  @include("add_victime")
  @include("add_temoin")
  <input type="hidden" id="patie_en_cours">
  <input type="hidden" name="statut" value="{{$infos['statut']}}">
  <input type="hidden" name="type_playant" value="{{$infos['type_playant']}}">
  <input type="hidden" name="mode_communication" value="{{$infos['mode_communication']}}">
  <input type="hidden" name="anonymat" value="{{$infos['anonymat']}}">
  </form>
@endsection