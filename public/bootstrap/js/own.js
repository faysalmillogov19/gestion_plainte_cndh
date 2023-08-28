	partie();
	function partie()
	{
		 var infos_plainte = document.getElementById("infos_plainte");
		 var infos_personnelle = document.getElementById("infos_personnelle");
		 infos_plainte.style.display = "none";
	}
	
	/*function submit_infos_personnelle()
	{
		var infos_personnelle = document.getElementById("infos_personnelle");
		alert(infos_personnelle);
		//infos_personnelle.btnSubmit();
		//document.infos_personnelle.submit();
		$(""#infos_personnelle).submit();
	}*/
	function submit_infos_personnelle()
	{
			$( "#infos_personnelle" ).submit();	 
	}