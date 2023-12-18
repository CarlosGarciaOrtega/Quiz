@extends('base.base')
@section('content')

<div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>Inicia con tu nombre</h4>

              </div>
              <form class="form-body row g-3" method="post" action="{{url('login')}}">
                  @csrf
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputEmail" name="nombre">
                </div>
            
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Iniciar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
    @endsection