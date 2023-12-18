<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Respuesta extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $table = 'respuesta';
    protected $fillable = ['idpregunta','respuesta','escorrecta'];
   
   public function pregunta(){
       return $this->belongsTo('App\Models\Pregunta' , 'idpregunta');
   }
   
    public function historiales(){
       return $this->hasMany('App\Models\Historial' , 'idrespuesta');
   }
   
   
   
   
   
   public static function upload($request){
        $ok=true;
        $pdo = DB::connection()->getPdo();
        $sql = "insert into respuesta(id,respuesta,idpregunta,escorrecta) values(null,:respuesta,:idpregunta,:escorrecta)";
        $sentencia = $pdo->prepare($sql);
        $sentencia->bindValue("respuesta", $request['respuesta']);
        $sentencia->bindValue("idpregunta", $request['idpregunta']);
        $sentencia->bindValue("escorrecta", $request['escorrecta']);
        
    
        
        try{
            $sentencia->execute();
           
        }catch(\Exception $e){
            $ok=false;
        }
        return $ok;
    }
    
     public static function edit($request){
        $ok=true;
        $pdo = DB::connection()->getPdo();
        $sql = "update respuesta  set respuesta=:respuesta, idpregunta=:idpregunta, escorrecta=:escorrecta where id=:id";
        $sentencia = $pdo->prepare($sql);
        $sentencia->bindValue("respuesta", $request['respuesta']);
        $sentencia->bindValue("idpregunta", $request['idpregunta']);
        $sentencia->bindValue("escorrecta", $request['escorrecta']);
        $sentencia->bindValue("id", $request['id']);
        
        
        
        try{
            $sentencia->execute();
           
        }catch(\Exception $e){
            $ok=false;
        }
        return $ok;
    }
    
    public static function destroy($id){
        $ok=true;
        $pdo = DB::connection()->getPdo();
        $sql = "delete from respuesta where id=:id";
        $sentencia = $pdo->prepare($sql);
        $sentencia->bindValue("id",$id);
        
        
        
        try{
            $sentencia->execute();
           
        }catch(\Exception $e){
            $ok=false;
        }
        return $ok;
    }
}
