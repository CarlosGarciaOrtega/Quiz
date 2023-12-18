<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Historial extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $table = 'historial';
    protected $fillable = ['idpregunta','idrespuesta','usuario','escorrecta'];
   
   public function pregunta(){
       return $this->belongsTo('App\Models\Pregunta' , 'idpregunta');
   }
    public function respuesta(){
       return $this->belongsTo('App\Models\Respuesta' , 'idrespuesta');
   }
   
   
  public static function upload($historial , $user){
        $ok=true;
        $pdo = DB::connection()->getPdo();
        $sql = "insert into historial(id,idpregunta,idrespuesta,escorrecta,usuario) values(null,:idpregunta,:idrespuesta,:escorrecta,:usuario)";
        $sentencia = $pdo->prepare($sql);
        $sentencia->bindValue("idpregunta", $historial['idpregunta']);
        $sentencia->bindValue("idrespuesta", $historial['idrespuesta']);
        $sentencia->bindValue("escorrecta", $historial['escorrecta']);
        $sentencia->bindValue("usuario", $user);
        
        
        
        try{
            $sentencia->execute();
           
        }catch(\Exception $e){
            $ok=false;
        }
        return $ok;
  }
  
  public static function destroy($ipregunta){
  
        try{
           Historial::where('idpregunta', $idpregunta)->delete();
           
        }catch(\Exception $e){
            $ok=false;
        }

        return $ok;
  }
}
