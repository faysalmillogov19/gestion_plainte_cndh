<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head> 

</head>
<body>

<div class="row" >
@yield("content");
</div>	
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
	<script>
	//$("#infos_plainte").hide();
	$("#infos_personnelle").submit(function( event ) {
  event.preventDefault();
});
	</script>
	<script>
var victime=$(".victimisation").html();
var temoin=$(".temoignage").html();
var compt1=0;
var compt2=0;
	$(".ajouter_victime").click(function(){
		$(".infos_victimes").append(victime);
		compt1++;
	});
	$(".ajouter_temoin").click(function(){
		$(".infos_temoins").append(temoin);
		compt2++;
	});
$(".cache").hide();		
	</script>

</body>
</html>
