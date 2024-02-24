@extends('layout')
@section('content')

<section class ="container margin mt-5">
<form class="row g-3" method="Post" action="{{route('envia-banco-cliente')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputNome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Paula da silva">
  </div>
  <div class="col-md-12">
    <label for="inputPEmail" class="form-label">E-mail:</label>
    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="paulasilva@gmail.com">
  </div>
  <div class="col-12">
    <label for="inputTel" class="form-label">Fone:</label>
    <input type="Tel" class="form-control" id="inputTel" name="fone" placeholder="11 90900-0253">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>

@endsection