<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Pregunta extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $table = 'pregunta';
    protected $fillable = ['pregunta','portada'];
   
   public function respuestas(){
       return $this->hasMany('App\Models\Respuesta' , 'idpregunta');
   }
   
    public function historiales(){
       return $this->hasMany('App\Models\Historial' , 'idpregunta');
   }
   
   
    public static function upload($request){
        $ok=true;
        $pdo = DB::connection()->getPdo();
        $sql = "insert into pregunta(id,portada,pregunta) values(null,:portada,:pregunta)";
        $sentencia = $pdo->prepare($sql);
        $sentencia->bindValue("pregunta", $request['pregunta']);
        $sentencia->bindValue("portada", $request['portada']);
        
        
        
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
        $sql = "update pregunta  set portada=:portada, pregunta=:pregunta where id=:id";
        $sentencia = $pdo->prepare($sql);
        $sentencia->bindValue("pregunta", $request['pregunta']);
        $sentencia->bindValue("portada", $request['portada']);
        $sentencia->bindValue("id", $request['id']);
        
        
        
        try{
            $sentencia->execute();
           
        }catch(\Exception $e){
            $ok=false;
        }
        return $ok;
    }
    
    public static function getLastIndex(){
        $pregunta=DB::table('pregunta')->orderBy('id', 'desc')->first();
        return $pregunta->id;
    }
    
    
    
    public static function destroy($id){
        $ok=true;
        $pdo = DB::connection()->getPdo();
        $sql = "delete from pregunta where id=:id";
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
