@extends('base.baseAdmin')
@section('content')
 <div class="card radius-10 w-100">
          <div class="card-body">
        
            <div class="table-responsive mt-2">
              <table class="table align-middle mb-0">
                <thead class="table-light">
                  <tr>
                    <th>Portada</th>
                    <th>Pregunta</th>
                    <th>Accion</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($preguntas as $pregunta)
                  <tr>
                    <td><div class="d-flex align-items-center gap-3">
                        <div class="product-box border">
                          <img  style=";background-size: cover;background-image: url('data:image/jpeg;base64,{{ base64_encode($pregunta->portada) }}');" alt="">
                        </div>
                      </div></td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-info">
                          <h6 class="product-name mb-1">{{$pregunta->pregunta}}</h6>
                        </div>
                      </div>
                    </td>
                    
                    <td>
                      <div class="">
                         <a href="{{url('/backend/pregunta/'. $pregunta->id)}}" class="btn btn-outline-primary px-5">Ver mas</a>
                        </a>
                      </div>
                    </td>
                  </tr>
        
          

                 @endforeach 
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
       
@endsection