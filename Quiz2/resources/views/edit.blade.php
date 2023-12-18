@extends('base.baseAdmin')
@section('content')
 <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">Editar Preguntas</h6>
                            <hr>
                            <form class="row g-3" method="post" action="{{url('backend/editPregunta')}}"  enctype='multipart/form-data'>
                                 @csrf
                                 @method('put')
                                <div class="col-12">
                                    <label class="form-label">Enunciado</label>
                                    <input type="text" class="form-control" name="pregunta" value="{{old('pregunta',$pregunta->pregunta)}}">
                                    <input type="text" name="idpregunta" value="{{$pregunta->id}}" style="display:none;"/>

                                </div>
                                <div class="col-12">

                                    <label for="portada" class="form-label">Suba la portada de la pregunta</label>
                                    <input class="form-control form-control-sm" id="portada" type="file" name="portada" value="{{$pregunta->portada}}">

                                </div>
                                <div class="col-12">
                                    <label class="form-label">Respuesta 1</label>
                                    <div>
                                        <input type="text" class="form-control"  name="respuesta1" value="{{old('respuesta1',$respuestas[0]->respuesta)}}">
                                         <input type="text" name="idrespuesta1" value="{{$respuestas[0]->id}}"style="display:none;"/>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="respuesta1" id="verdadera1" name="escorrecta" {{($respuestas[0]->escorrecta == 1) ? "checked":""}}>
                                            <label class="form-check-label" for="flexCheckDefault">Verdadera</label>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Respuesta 2</label>
                                    <div>
                                        <input type="text" class="form-control"  name="respuesta2"  value="{{old('respuesta2',$respuestas[1]->respuesta)}}">
                                        <input type="text" name="idrespuesta2" value="{{$respuestas[1]->id}}"style="display:none;"/>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="respuesta2" id="verdadera2" name="escorrecta" {{($respuestas[1]->escorrecta == 1) ? "checked":""}}>
                                            <label class="form-check-label" for="flexCheckDefault">Verdadera</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Respuesta 3</label>
                                    <div>
                                        <input type="text" class="form-control"  name="respuesta3" value="{{old('respuesta3',$respuestas[3]->respuesta)}}">
                                        <input type="text" name="idrespuesta3" value="{{$respuestas[2]->id}}"style="display:none;"/>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="respuesta3" id="verdadera3" name="escorrecta" {{($respuestas[2]->escorrecta == 1) ? "checked":""}}>
                                            <label class="form-check-label" for="flexCheckDefault">Verdadera</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Respuesta 4</label>
                                    <div>
                                        <input type="text" class="form-control"  name="respuesta4"  value="{{old('respuesta4',$respuestas[3]->respuesta)}}">
                                        <input type="text" name="idrespuesta4" value="{{$respuestas[3]->id}}"style="display:none;"/>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="respuesta4" id="verdadera4" name="escorrecta" {{($respuestas[3]->escorrecta == 1) ? "checked":""}}>
                                            <label class="form-check-label" for="flexCheckDefault">Verdadera</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-8">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Editar Pregunta</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection