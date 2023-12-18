@extends('base.baseAdmin')
@section('content')




 <div class="card" style="height: 90vh;">
                    <img class="card-img-top"
                        style="height: 60vh;background-size: cover;background-image: url('data:image/jpeg;base64,{{ base64_encode($pregunta->portada) }}');">
                    <div class="card-body">
                        <p class="card-text" style="font-size:1.5rem">{{$pregunta->pregunta}}</p>


                        <div class="h-50">
                            <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-2 h-50">
                                <div class="col" style="border: 1px solid #969696;">{{$respuestas[0]->respuesta}}</div>
                                <div class="col" style="border: 1px solid #969696;">{{$respuestas[1]->respuesta}}</div>
                            </div>
                            <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-2 h-50">
                                <div class="col" style="border: 1px solid #969696;">{{$respuestas[2]->respuesta}}</div>
                                <div class="col" style="border: 1px solid #969696;">{{$respuestas[3]->respuesta}}</div>
                            </div>
                            
                            
                        </div>
                        <div class="d-flex  mt-4">
                           
                            <a href="{{url('backend/pregunta/'.$pregunta->id.'/edit')}}" class="btn-danger btn  ms-5">Editar</a>
                        </div>
                    </div>

@endsection