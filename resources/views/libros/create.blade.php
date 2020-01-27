@extends('plantillas.plantilla')
@section('titulo')
    Crear Libro
@endsection
@section('cabecera')
Nuevo Libro
@endsection
@section('contenido')
<div class="container mt-3">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<form name="crear" action="{{route('alumnos.store')}}" method="POST">
    @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Titulo" name="titulo" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="ISBN" maxlength="13" name="isbn" required>
          </div>
          
        </div>
        <div class="row mt-3">
                <div class="col">
                  <input type="number" class="form-control" placeholder="Pvp($)" name="pvp" step="0.10" min="0" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Stock" min="0" name="stock" step="1">
                </div>               
              </div>
              <div class="row mt-3">
                    <div class="col">
                        <label for="ta" class="normal">Sinopsis</label>
                        <textarea class="form-control" name="sinopsis" id="a" cols="30" rows="4" required></textarea>
                    </div>
                                
                  </div>
                  <div class="row mt-3">
                        <div class="col">
                            <input type="submit" class="btn btn-info normal" value="crear">
                            <input type="reset" class="btn btn-danger normal">
                        <a href="{{route('libros.mostrar')}}" class="btn btn-success">Volver</a>
                        </div>
                                    
                      </div>
      </form>
@endsection