<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\Historial;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
 public function home(){
 
     return view('home');
 }
    public function homeAdmin(){
        if(session('nombre') != 'admin'){
            return redirect('login');
        }
     return view('homeAdmin');
    }
    
    public function creaPreguntaForm(){
        if(session('nombre') != 'admin'){
            return redirect('login');
        }
        return view('creaPregunta');
    }
    
    public function creaPregunta(Request $request){
       
       
       $fallo=false;

       $pregunta = ['portada'=>$request->portada,'pregunta'=>$request->pregunta];
       
        $datosPregunta = $request->only(['pregunta', 'portada']);
        
         if ($request->hasFile('portada')) {
             $portada = $request->file('portada');
             if ($portada->isValid()) {
        
            $imagenBinaria = file_get_contents($portada->path());

           
            $datosPregunta['portada'] = $imagenBinaria;
        } else {
           
        }
        
       
    
         
    }
        
        $pregunta = new Pregunta();

    try {
        
        $pregunta->fill($datosPregunta);
       
     
           
            $result = $pregunta->save();
        }catch(\Exception $e){
             $fallo=true;
        }
       
       if($request->escorrecta==null)   $fallo=true;
       if($request->respuesta1==null)   $fallo=true;
       if($request->respuesta2==null)   $fallo=true;
       if($request->respuesta3==null)   $fallo=true;
       if($request->respuesta4==null)   $fallo=true;
      
      
      if(!$fallo){
          
          $idPregunta = Pregunta::getLastIndex();
          $escorrecta= ('respuesta1'==$request->escorrecta) ? 1:0;
          $respuesta1=['respuesta'=>$request->respuesta1,'escorrecta'=>$escorrecta,'idpregunta'=>$idPregunta];
          Respuesta::upload($respuesta1);
          
          
          
          
          $escorrecta= ('respuesta2'==$request->escorrecta) ? 1:0;
          $respuesta2=['respuesta'=>$request->respuesta2,'escorrecta'=>$escorrecta,'idpregunta'=>$idPregunta];
          Respuesta::upload($respuesta2);
          
          
          
          $escorrecta= ('respuesta3'==$request->escorrecta) ? 1:0;
          $respuesta3=['respuesta'=>$request->respuesta3,'escorrecta'=>$escorrecta,'idpregunta'=>$idPregunta];
          Respuesta::upload($respuesta3);
          
          
          $escorrecta= ('respuesta4'==$request->escorrecta) ? 1:0;
          
          $respuesta4=['respuesta'=>$request->respuesta4,'escorrecta'=>$escorrecta,'idpregunta'=>$idPregunta];
          Respuesta::upload($respuesta4);

           return redirect('backend/creaPregunta')->with(['message'=> 'La pregunta se ha creado correctamente']);
       }else{
          return back() -> withInput()->withErrors(['message'=> 'Ha ocurrido un fallo']);
       }
       
        
        
        
    }
    
    
    
      public function editaPregunta(Request $request){
    
       
        
        $fallo=false;
        
        if ($request->hasFile('portada')) {
             $portada = $request->file('portada');
             if ($portada->isValid()) {
        
            $imagenBinaria = file_get_contents($portada->path());
                 
             }else{
                 $fallo=true;
             }
            
        }else{
             $fallo=true;
        }
        
          
       
        $pregunta = ['id'=>$request->idpregunta,'portada'=>$imagenBinaria,'pregunta'=>$request->pregunta];

       
       
       if(!Pregunta::edit($pregunta))  $fallo=true;
       if($request->escorrecta==null)   $fallo=true;
       if($request->respuesta1==null)   $fallo=true;
       if($request->respuesta2==null)   $fallo=true;
       if($request->respuesta3==null)   $fallo=true;
       if($request->respuesta4==null)   $fallo=true;

       if(!$fallo){
          
          $idPregunta=$request->idpregunta;
          
          $escorrecta= ('respuesta1'==$request->escorrecta) ? 1:0;
          
          $respuesta1=['id'=>$request->idrespuesta1,'respuesta'=>$request->respuesta1,'escorrecta'=>$escorrecta,'idpregunta'=>$idPregunta];
          Respuesta::edit($respuesta1);
          
          
          
          
          $escorrecta= ('respuesta2'==$request->escorrecta) ? 1:0;
          $respuesta2=['id'=>$request->idrespuesta2,'respuesta'=>$request->respuesta2,'escorrecta'=>$escorrecta,'idpregunta'=>$idPregunta];
          Respuesta::edit($respuesta2);
          
          
          
          $escorrecta= ('respuesta3'==$request->escorrecta) ? 1:0;
          $respuesta3=['id'=>$request->idrespuesta3,'respuesta'=>$request->respuesta3,'escorrecta'=>$escorrecta,'idpregunta'=>$idPregunta];
          Respuesta::edit($respuesta3);
          
          
          $escorrecta= ('respuesta4'==$request->escorrecta) ? 1:0;
          
          $respuesta4=['id'=>$request->idrespuesta4,'respuesta'=>$request->respuesta4,'escorrecta'=>$escorrecta,'idpregunta'=>$idPregunta];
          Respuesta::edit($respuesta4);
          
          
          return redirect('backend/pregunta/'.$idPregunta)->with(['message'=> 'La pregunta se ha editado correctamente']);
       }else{
           return back() -> withInput()->withErrors(['message'=> 'Ha ocurrido un fallo']);
       }
       

        
        
        
    }
    
    public function eliminar($id){
        
         $pregunta = Pregunta::find($id);
         $respuestas = $pregunta->respuestas;

         Historial::destroy($pregunta->id);
         foreach($respuestas as $respuesta){
             Respuesta::destroy($respuesta->id);
         }
         Pregunta::destroy($pregunta->id);
          return view('homeAdmin');
    }
    
    
    
    
    public function preguntasTest(){
         if(session('nombre') == null){
            return redirect('login');
        }
        
        $preguntas = Pregunta::inRandomOrder()->take(10)->get();
        return view('preguntasTest',['preguntas'=>$preguntas]);
    }
    public function preguntasTestSubmit(Request $request){
        $user=session('nombre');
       
       
       
       
       
     if($request->respuesta1 != null) {
            $historial1 = [
        'idpregunta'=>$request->pregunta1,
        'idrespuesta'=>$request->respuesta1,
        'escorrecta'=>Respuesta::find($request->respuesta1)->escorrecta

        ];
        Historial::upload($historial1,$user);

}


if($request->respuesta2 != null){
    $historial2 = [
    'idpregunta'=>$request->pregunta2,
    'idrespuesta'=>$request->respuesta2,
    'escorrecta'=>Respuesta::find($request->respuesta2)->escorrecta

    ];
    Historial::upload($historial2,$user);
}

if($request->respuesta3 != null){


    $historial3 = [
    'idpregunta'=>$request->pregunta3,
    'idrespuesta'=>$request->respuesta3,
    'escorrecta'=>Respuesta::find($request->respuesta3)->escorrecta

    ];
    Historial::upload($historial3,$user);
}

if($request->respuesta4 != null){
    $historial4 = [
    'idpregunta'=>$request->pregunta4,
    'idrespuesta'=>$request->respuesta4,
    'escorrecta'=>Respuesta::find($request->respuesta4)->escorrecta

    ];
    Historial::upload($historial4,$user);
}

if($request->respuesta5 != null){
    $historial5 = [
    'idpregunta'=>$request->pregunta5,
    'idrespuesta'=>$request->respuesta5,
    'escorrecta'=>Respuesta::find($request->respuesta5)->escorrecta

    ];
    Historial::upload($historial5,$user);
}

if($request->respuesta6 != null){ 
    $historial6 = [
    'idpregunta'=>$request->pregunta6,
    'idrespuesta'=>$request->respuesta6,
    'escorrecta'=>Respuesta::find($request->respuesta6)->escorrecta

    ];
    Historial::upload($historial6,$user);
}


if($request->respuesta7 != null){ 
    $historial7 = [
    'idpregunta'=>$request->pregunta7,
    'idrespuesta'=>$request->respuesta7,
    'escorrecta'=>Respuesta::find($request->respuesta7)->escorrecta

    ];
    Historial::upload($historial7,$user);
}
if($request->respuesta8 != null){ 
    $historial8 = [
    'idpregunta'=>$request->pregunta8,
    'idrespuesta'=>$request->respuesta8,
    'escorrecta'=>Respuesta::find($request->respuesta8)->escorrecta

    ];Historial::upload($historial8,$user);
}
if($request->respuesta9 != null){
    $historial9 = [
    'idpregunta'=>$request->pregunta9,
    'idrespuesta'=>$request->respuesta9,
    'escorrecta'=>Respuesta::find($request->respuesta9)->escorrecta

    ]; Historial::upload($historial9,$user);
}
if($request->respuesta10 != null) {
    $historial10 = [
    'idpregunta'=>$request->pregunta10,
    'idrespuesta'=>$request->respuesta10,
    'escorrecta'=>Respuesta::find($request->respuesta10)->escorrecta

    ];
    Historial::upload($historial10,$user);
}
           return redirect('/');
    }

       
}
