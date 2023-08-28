<?php
namespace App\custom;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Personne;

//use Illuminate\Validation\ValidationException;
//use Illuminate\Support\Facades\Hash;
//use App\t_log;
//use App\User;
class CustomFunction
{
    public static function  array_of_array($array)
    {
	  $table=array();
	  foreach($array as $key => $value) {
            array_push($table,$value);
      }
	  return $table;
 
    }
	
	public static function create_Personne($a,$b,$c,$d,$e)
	{
		$personne= new Personne;
		$personne->nom=$a;
		$personne->adresse=$b;
		$personne->telephone=$c;
		$personne->email=$d;
		$personne->bp=$e;
		$personne->save();
		return $personne->id;
		
	}
	
	public static function uploadFichier($var,$dossier,$rename)
	{
		$date=date_create();
		$date=date_timestamp_get($date);
		$file = $var;
		$extension=$file->getClientOriginalExtension();
		//$filename=$file->getClientOriginalName();
		$filename=$dossier.$rename.$date.".".$extension;
		$size=$file->getSize();
		$mimeType=$file->getMimeType();
		$file->move($dossier,$filename);
		return $filename;
	}
	
	
}

?>