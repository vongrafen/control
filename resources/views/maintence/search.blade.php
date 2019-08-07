@extends('adminlte::page')

@section('title', 'Cadastro de Equipamentos')

@section('content')

@if (session('message'))
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ (session('message')) }}
    </div>
@endif

<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Informe o equipamento</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form>
    <div class="box-body">
        <div class="form-group row">
            <div class="col-md-4" name="search">
              <input type="text" class="form-control" name="search" placeholder="Nome do equipamento ou patrimônio">
            </div>
            <button type="submit" formaction="{{route('maintenceSelect')}}" class="btn btn-success mb-2">Pesquisar</button> 
        </div>    
    </div>
  </form>
</div>

<script>
window.onload = function(){ $('.alert').alert() }
  
</script>

<style>
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -moz-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 4;
}
</style>

@stop