@extends('base.baseAdmin')
@section('content')
 <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">Crear Preguntas</h6>
                            <hr>
                            <form class="row g-3" method="post" action="{{url('backend/creaPregunta')}}" enctype='multipart/form-data'>
                                 @csrf
                                <div class="col-12">
                                    <label class="form-label">Enunciado</label>
                                    <input type="text" class="form-control" name="pregunta" value="{{old('pregunta')}}">
                                </div>
                                <div class="col-12">

                                    <label for="portada" class="form-label">Suba la portada de la pregunta</label>
                                    <input class="form-control form-control-sm" id="portada" type="file" name="portada">

                                </div>
                                <div class="col-12">
                                    <label class="form-label">Respuesta 1</label>
                                    <div>
                                        <input type="text" class="form-control"  name="respuesta1" value="{{old('respuesta1')}}">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="respuesta1" id="verdadera1" name="escorrecta">
                                            <label class="form-check-label" for="flexCheckDefault">Verdadera</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Respuesta 2</label>
                                    <div>
                                        <input type="text" class="form-control"  name="respuesta2" value="{{old('respuesta2')}}">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="respuesta2" id="verdadera2" name="escorrecta">
                                            <label class="form-check-label" for="flexCheckDefault">Verdadera</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Respuesta 3</label>
                                    <div>
                                        <input type="text" class="form-control"  name="respuesta3" value="{{old('respuesta3')}}">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="respuesta3" id="verdadera3" name="escorrecta">
                                            <label class="form-check-label" for="flexCheckDefault">Verdadera</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Respuesta 4</label>
                                    <div>
                                        <input type="text" class="form-control"  name="respuesta4" value="{{old('respuesta4')}}">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="respuesta4" id="verdadera4" name="escorrecta">
                                            <label class="form-check-label" for="flexCheckDefault">Verdadera</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-8">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Crear Pregunta</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection