 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
	 <script type="text/javascript" src="materialize/js/jquery-3.5.1.min.js"></script>
	  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.js"></script>
      <!--script type="text/javascript" src="materialize/js/mine.js"></script-->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>
		   <nav class="row green darken-1">
		   
				<div class="right col s2">
					
					<button class="" name="action">
						<i class="material-icons right">search</i>
					</button>
					 
				</div>
				
				<div class="right col s3">
					<input type="text" name="name="table">
					 
				</div>
		   
				 <div class="right col s2">
					<select name="name="table">
					  <option value="" disabled selected>Attribut</option>
					  
					  @foreach($playants_liste as $element)
						@if(!strpos($element->COLUMN_NAME,"id"))
							<option value="1">{{$element->COLUMN_NAME}}</option>
						@endif
					  @endforeach
					  
					</select>
				  </div>
				  
				  <div class="right col s1">
					<select name="name="table">
					  <option value="" disabled selected>Table</option>
					  <option value="1">Playants</option>
					  <option value="2">Victimes</option>
					  <option value="3">Playants</option>
					  <option value="3">Temoins</option>
					</select>
				  </div>
				  
				    
				  
				
		  </nav>
		  
		  <div class="row">
				<div class="col s2">
				  <div class="row">
				  
					  <ul id="slide-out" class="sidenav  sidenav-fixed col s2">
						<li>
							<div class="user-view">
							  <div class="background">
								<img src="images/cndh.jpg" style="height:100%">
							  </div>
							  <a href="#user"><img class="circle" src="images/armoirie.png"></a>
							  <a href="#name"><span class="white-text name">John Doe</span></a>
							  <!--a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a-->
							</div>
						</li>
						<li><a href="#!"><i class="material-icons">home</i>CNDH</a></li>
						<li><a>Comité National des Droits de l'Homme</a></li>
						<li><div class="divider"></div></li>
						<li><a class="subheader"></a></li>
						<li><a class="waves-effect" href="/plaintes">Tout les plaintes</a></li>
						<li><div class="divider"></div></li>
						<li><a class="waves-effect" href="{{route('requete.show','En_cours')}}">Plaintes En cours</a></li><li><div class="divider"></div></li>
						<li><a class="waves-effect" href="{{route('requete.show','Valider')}}">Plaintes valider</a></li><li><div class="divider"></div></li>
						<li><a class="waves-effect" href="{{route('requete.show','Annuler')}}">Plaintes annuler</a></li><li><div class="divider"></div></li>
					  </ul>
				  
				  </div>
				</div>
				<div class="col s10">
					<br>
					<table class="striped responsive-table">
						@yield('content')
					</table>				  
				</div>				  
		  </div>

			  <a href="#" data-target="slide-out" class="sidenav-trigger  btn-floating pulse"><i class="material-icons">menu</i></a>
  

    
<script>
$(".test").hide();
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  
  $(document).ready(function(){
    $('select').formSelect();
  });
  
  $('.dropdown-trigger').dropdown();
</script>

    </body>


	    
  </html>