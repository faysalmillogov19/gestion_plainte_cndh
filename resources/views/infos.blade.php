@extends("layouts.formLayout")
@section("content")
  <form action="{{route('infos.store')}}" class="container" method="post" enctype="multipart/form-data">
  {{csrf_field()}} 
 <br>
 <div id="infos_plainte" class="card">
	  <h2 class="card-header text-center bg-success text-white">CNDH Plaintes</h2>
	  <div class="card-body">
	  
	  <div class="form-group row">
			<label for="inputPassword" class="col-sm-6 col-form-label">Etes vous victime?</label>
			<div class="col-sm-6">
			  <select type="text" class="form-control" id="inputPassword" name="type_playant" placeholder="" required>
				<option > </option>
				@foreach($type_playants as $v)				
				<option value="{{$v->id_type_playant}}">{{$v->show_type_playant}}</option>
				@endforeach
			  </select>
			</div>
		</div>
		
		<div class="form-group row">
			<label for="inputPassword" class="col-sm-6 col-form-label">Qui êtes vous?</label>
			<div class="col-sm-6">
			  <select type="text" class="form-control" id="inputPassword" name="statut" placeholder="" required>
				<option></option>
				@foreach($statuts as $v)				
				<option value="{{$v->id_statut}}">{{$v->show_statut}}</option>
				@endforeach
			  </select>
			</div>
		</div>
		
		<div class="form-group row">
			<label for="inputPassword" class="col-sm-6 col-form-label">Quelle est votre moyen de communication préféré?</label>
			<div class="col-sm-6">
			  <select type="text" class="form-control" id="inputPassword" name="mode_communication" required>
				<option></option>
				@foreach($communications as $v)				
				<option value="{{$v->id_mode_communication}}">{{$v->libelle_communication}}</option>
				@endforeach
			  </select>
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col m-6">
			  <label for="detail_responsable">Souhaitez vous garder l'anonymat?</label>
			</div>
			<div class="form-group col m-6">
			  <div class="form-check form-check-inline">
					  <input class="form-check-input boolean_autre_reglement" type="radio" name="anonymat" id="inlineRadio1" value="1">
					  <label class="form-check-label" for="inlineRadio1">Oui</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input boolean_autre_reglement" checked="checked" type="radio" name="anonymat" id="inlineRadio2" value="0">
					  <label class="form-check-label" for="inlineRadio2">Non</label>
					</div>
			</div>
		</div>

		<button id="next_infos_personnelle" class="btn btn-outline-info float-right bg-success text-white">Suivant</button>	
		
	 </div>
 </div>
 

 




  <input type="hidden" id="patie_en_cours">
  </form>
@endsection