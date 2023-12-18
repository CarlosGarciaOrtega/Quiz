@extends('base.base')
@section('content')

<form action="{{url('preguntas/test')}}" method="post">
    @csrf

  @foreach($preguntas as $index => $pregunta)

<div class="card" style="height: 90vh;">
    <img class="card-img-top"
        style="height: 60vh;background-size: cover;background-image: url('data:image/jpeg;base64,{{ base64_encode($pregunta->portada) }}');">
    <div class="card-body">
        <p class="card-text" style="font-size:1.5rem">{{$pregunta->pregunta}}</p>
        <input type="text" name="pregunta{{$index+1}}" value="{{$pregunta->id}}" style="display:none" />


        <div class="h-50">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-2 h-50" style="padding:0;">
                <div class="col" style="border: 1px solid #969696;" id="respuesta{{$index+1}}-1-div">
                    <input type="radio" id="respuesta{{$index+1}}-1" name="respuesta{{$index+1}}" value="{{$pregunta->respuestas[0]->id}}"
                        style="display:none" />
                    <label for="respuesta{{$index+1}}-1" style="width:100%;height:100%;" id="respuesta{{$index+1}}-1-label">
                        <div class="" style=";width:100%;height:100%;">
                            {{$pregunta->respuestas[0]->respuesta}}</div>
                    </label>
                </div>
                <div class="col" style="border: 1px solid #969696;"id="respuesta{{$index+1}}-2-div">
                    <input type="radio" id="respuesta{{$index+1}}-2" name="respuesta{{$index+1}}" value="{{$pregunta->respuestas[1]->id}}"
                        style="display:none" />
                    <label for="respuesta{{$index+1}}-2" style="width:100%;height:100%;"id="respuesta{{$index+1}}-2-label">
                        <div class="" style="width:100%;height:100%;">
                            {{$pregunta->respuestas[1]->respuesta}}</div>
                    </label>
                </div>

            </div>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-2 h-50">
                <div class="col" style="border: 1px solid #969696;"id="respuesta{{$index+1}}-3-div">
                    <input type="radio" id="respuesta{{$index+1}}-3" name="respuesta{{$index+1}}" value="{{$pregunta->respuestas[2]->id}}"
                        style="display:none" />
                    <label for="respuesta{{$index+1}}-3" style="width:100%;height:100%;"id="respuesta{{$index+1}}-3-label">
                        <div class="" style="width:100%;height:100%;">
                            {{$pregunta->respuestas[2]->respuesta}}</div>
                    </label>
                </div>
                <div class="col" style="border: 1px solid #969696;"id="respuesta{{$index+1}}-4-div">
                    <input type="radio" id="respuesta{{$index+1}}-4" name="respuesta{{$index+1}}" value="{{$pregunta->respuestas[3]->id}}"
                        style="display:none" />
                    <label for="respuesta{{$index+1}}-4" style="width:100%;height:100%;"id="respuesta{{$index+1}}-4-label">
                        <div class="" style="width:100%;height:100%;">
                            {{$pregunta->respuestas[3]->respuesta}}</div>
                    </label>
                </div>
            </div>


        </div>
    </div>
</div>
                
  @endforeach
  
  
      <div>
           <button type="submit" class="btn btn-danger">Enviar test</button>

      </div>
      </form>
      
      
      <script>

          document.getElementById("respuesta1-1-label").addEventListener("click",()=>{
              document.getElementById("respuesta1-1-div").style.border="1px solid green";
              document.getElementById("respuesta1-2-div").style.border="1px solid  #969696";
              document.getElementById("respuesta1-3-div").style.border="1px solid  #969696";
              document.getElementById("respuesta1-4-div").style.border="1px solid  #969696";
              
          })
          
          

          document.getElementById("respuesta1-2-label").addEventListener("click",()=>{
            document.getElementById("respuesta1-1-div").style.border="1px solid  #969696";
              document.getElementById("respuesta1-2-div").style.border="1px solid  green";
              document.getElementById("respuesta1-3-div").style.border="1px solid  #969696";
              document.getElementById("respuesta1-4-div").style.border="1px solid  #969696";
              
          })
          
          

          document.getElementById("respuesta1-3-label").addEventListener("click",()=>{
              document.getElementById("respuesta1-1-div").style.border="1px solid  #969696";
              document.getElementById("respuesta1-2-div").style.border="1px solid  #969696";
              document.getElementById("respuesta1-3-div").style.border="1px solid  green";
              document.getElementById("respuesta1-4-div").style.border="1px solid  #969696";
              
          })
          

          document.getElementById("respuesta1-4-label").addEventListener("click",()=>{
            document.getElementById("respuesta1-1-div").style.border="1px solid  #969696";
              document.getElementById("respuesta1-2-div").style.border="1px solid  #969696";
              document.getElementById("respuesta1-3-div").style.border="1px solid   #969696";
              document.getElementById("respuesta1-4-div").style.border="1px solid  green";
              
          })
          
          
          
          
          document.getElementById("respuesta2-1-label").addEventListener("click",()=>{
              document.getElementById("respuesta2-1-div").style.border="1px solid green";
              document.getElementById("respuesta2-2-div").style.border="1px solid  #969696";
              document.getElementById("respuesta2-3-div").style.border="1px solid  #969696";
              document.getElementById("respuesta2-4-div").style.border="1px solid  #969696";
              
          })
          
          

          document.getElementById("respuesta2-2-label").addEventListener("click",()=>{
            document.getElementById("respuesta2-1-div").style.border="1px solid  #969696";
              document.getElementById("respuesta2-2-div").style.border="1px solid  green";
              document.getElementById("respuesta2-3-div").style.border="1px solid  #969696";
              document.getElementById("respuesta2-4-div").style.border="1px solid  #969696";
              
          })
          
          

          document.getElementById("respuesta2-3-label").addEventListener("click",()=>{
              document.getElementById("respuesta2-1-div").style.border="1px solid  #969696";
              document.getElementById("respuesta2-2-div").style.border="1px solid  #969696";
              document.getElementById("respuesta2-3-div").style.border="1px solid  green";
              document.getElementById("respuesta2-4-div").style.border="1px solid  #969696";
              
          })
          

          document.getElementById("respuesta2-4-label").addEventListener("click",()=>{
            document.getElementById("respuesta2-1-div").style.border="1px solid  #969696";
              document.getElementById("respuesta2-2-div").style.border="1px solid  #969696";
              document.getElementById("respuesta2-3-div").style.border="1px solid   #969696";
              document.getElementById("respuesta2-4-div").style.border="1px solid  green";
              
          })
          
          
          
          for(let i=1;i<=10;i++){
              
             
               document.getElementById("respuesta"+i+"-1-label").addEventListener("click",()=>{
              document.getElementById("respuesta"+i+"-1-div").style.border="1px solid green";
              document.getElementById("respuesta"+i+"-2-div").style.border="1px solid  #969696";
              document.getElementById("respuesta"+i+"-3-div").style.border="1px solid  #969696";
              document.getElementById("respuesta"+i+"-4-div").style.border="1px solid  #969696";
               });
               
               document.getElementById("respuesta"+i+"-2-label").addEventListener("click",()=>{
              document.getElementById("respuesta"+i+"-1-div").style.border="1px solid #969696";
              document.getElementById("respuesta"+i+"-2-div").style.border="1px solid  green";
              document.getElementById("respuesta"+i+"-3-div").style.border="1px solid  #969696";
              document.getElementById("respuesta"+i+"-4-div").style.border="1px solid  #969696";
               });
               
               document.getElementById("respuesta"+i+"-3-label").addEventListener("click",()=>{
              document.getElementById("respuesta"+i+"-1-div").style.border="1px solid #969696";
              document.getElementById("respuesta"+i+"-2-div").style.border="1px solid  #969696";
              document.getElementById("respuesta"+i+"-3-div").style.border="1px solid  green";
              document.getElementById("respuesta"+i+"-4-div").style.border="1px solid  #969696";
               });
               document.getElementById("respuesta"+i+"-4-label").addEventListener("click",()=>{
              document.getElementById("respuesta"+i+"-1-div").style.border="1px solid #969696";
              document.getElementById("respuesta"+i+"-2-div").style.border="1px solid  #969696";
              document.getElementById("respuesta"+i+"-3-div").style.border="1px solid #969696";
              document.getElementById("respuesta"+i+"-4-div").style.border="1px solid green ";
               });
              
          
          }
      </script>

@endsection