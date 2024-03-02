@extends('layout')
@section('content')

<section class ="container margin mt-5">
<form class="row g-3" method="Post" action="{{route('envia-banco-quarto')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputNumero" class="form-label">Número:</label>
    <input type="text" class="form-control" id="inputNumero" name="Numero" placeholder="Número do quarto">
  </div>
  <div class="col-md-12">
    <label for="inputTipo" class="form-label">Tipo:</label>
    <input type="text" class="form-control" id="inputTipo" name="Tipo" placeholder="Categoria do quarto">
  </div>
  <div class="col-md-12">
    <label for="inputValor" class="form-label">Valor:</label>
    <input type="text" class="form-control" id="inputValor" name="Valor" placeholder="200">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>

@endsection