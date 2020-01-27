@extends('plantillas.plantilla')
@section('titulo')
Busqueda
@endsection
@section('cabecera')
    Buscar Libro
@endsection
@section('contenido')
<div class="row mb-5">
    <div class="col-md-12">
    <form action="{{route('libros.index')}}" name="search" method="get" class="form-inline float-right">
        <h3 class="normal mr-3" style="font-weight:bold">Buscar: </h3>
        <div class="form-group mr-2">
          @if (!$request->get('titulo'))
          <input type="text" name="titulo" placeholder="Titulo">
          @else
              <input type="text" name="titulo" value="{{$request->get('titulo')}}">
          @endif
        
        </div>
        <div class="form-group mr-2">
          @if (!$request->get('sinopsis'))
          <input type="text" name="sinopsis" placeholder="Sinopsis">
          @else
              <input type="text" name="sinopsis" value="{{$request->get('sinopsis')}}">
          @endif
        
            </div>
            <div class="form-group mr-2">
              <select name="pvp">
                <option value="value1">De 1 a 200</option> 
                <option value="value2" >De 200 a 500</option>
                <option value="value3">Mayor que 500</option>
              </select>
                  </div>
        <div class="form-group ml-2">
            <input type="submit" value="Buscar" class="btn btn-info">
        </div>
    </div>
    </form>

</div>
  
<table class="table table-dark normal">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Titulo</th>
        <th scope="col">Sinopsis</th>
        <th scope="col">Precio($)</th>
        <th scope="col">ISBN</th>
        <th scope="col">Stock</th>
      
      </tr>
    </thead>
    
        
   
    <tbody>
        @foreach ($libros as $item)
      <tr>
      <th scope="row">{{$item->id}}</th>
        <td>{{$item->titulo}}</td>
        <td>{{$item->sinopsis}}</td>
        <td>{{$item->pvp}}</td>
        <td>{{$item->isbn}}</td>
        <td>{{$item->stock}}</td>
      
      </tr>
       @endforeach
      
    </tbody>
  </table>
  
  {{$libros->appends(Request::except('page'))->links()}}
@endsection