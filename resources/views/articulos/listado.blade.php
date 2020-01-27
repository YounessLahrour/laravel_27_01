@extends('plantillas.plantilla')
@section('titulo')
Listado articulos
@endsection
@section('cabecera')
    Articulos Disponibles
@endsection
@section('contenido')
@if (Session::has('mensaje'))
    <div class="container mt-3 mb-3 alert-success">
    <p>{{session('mensaje')}}</p>
    </div>
@endif
<div href='#' class="btn btn-success mt-2 mb-2 normal" >Nuevo articulo</div>
<table class="table table-dark normal">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Imagen</th>
        <th scope="col">Precio($)</th>
        <th scope="col">Accioness</th>
      </tr>
    </thead>
    
        
    <tbody>
        @foreach ($articulos as $item)
      <tr>
      <th scope="row">{{$item->id}}</th>
        <td>{{$item->nombre}}</td>
        <td>{{$item->imagen}}</td>
        <td>{{$item->pvp}}</td>
        <td>
            <form name="borrar" action="{{route('articulos.destroy', $item)}}" method="POST">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Borrar">
      
            </form>
            </td>
      </tr>
       @endforeach
      
    </tbody>
  </table>
  {{$articulos->links()}}
@endsection