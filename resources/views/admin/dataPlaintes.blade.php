@extends("layouts.dashroad")
@section("content")
		<thead>
          <tr>
              <th>Nom</th>
              <th>Telephone</th>
              <th>Email</th>
              <th>Adresse</th>
              <th>Boîte postale</th>
              <th>Plainte</th>
              <th>details</th>

          </tr>
        </thead>

        <tbody>
		@foreach($playants as $playant)
          <tr>
            <td>{{$playant->nom}}</td>
            <td>{{$playant->telephone}}</td>
            <td>{{$playant->email}}</td>
            <td>{{$playant->adresse}}</td>
            <td>{{$playant->bp}}</td>
			<td>
				<a class="tooltipped" data-position="bottom" data-tooltip="I am a tooltip"><i class="material-icons">view_quilt</i></a>
			</td>
            <td>
				<a href="{{route('plaintes.show',$playant->id_personne_playant)}}"  class="pulse"><i class="material-icons">visibility</i></a>
			</td>
          </tr>
		  
		@endforeach
          
        </tbody>
		
		
@endsection