@extends('base.base')
@section('content')


           
        <div class="card radius-10 w-100">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <h6 class="mb-0">Historial</h6>
              <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i
                    class="bi bi-three-dots"></i></div>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
            <div class="table-responsive mt-2">
              <table class="table align-middle mb-0">
                <thead class="table-light">
                  <tr>
                    <th>Portada</th>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>Correcta</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($historial as $historialFila)
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box border">
                          <img  style=";background-size: cover;background-image: url('data:image/jpeg;base64,{{ base64_encode( $historialFila->pregunta->portada) }}');" alt="">
                        </div>
                      </div>
                    </td>
                    
                    <td>
                      <div class="d-flex align-items-center gap-3">
                       
                        <div class="product-info">
                          <h6 class="product-name mb-1">{{ $historialFila->pregunta->pregunta}}</h6>
                        </div>
                      </div>
                    </td>
                    <td>{{ $historialFila->respuesta->respuesta}}</td>
                    <td>{{ ($historialFila->respuesta->escorrecta== 1) ? 'Verdadera':'Falsa'}}</td>
                  </tr>
                  @endforeach
    
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection