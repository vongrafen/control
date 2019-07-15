@extends('adminlte::page')

@section('title', 'Manutenções')

@section('content')

<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Manutenções</h3>
            </div>            
            <!-- /.box-header -->
            <div class="box-body">

              <div id="container" class="row col-md-12">

                  @foreach($equipament as $x)
                  
                  <div class="callout callout-danger col-md-1" id="teste">
                      <h4>Patrimônio: {{ $x->patrimony }}</h4>
    
                      <p>Manutenção preventiva irá vencer no dia 18/08/2019</p>
                      <a href="#" data-skin="skin-blue" id="btn1" class="btn btn-warning btn-xs"><i class="fa fa-check"></i></a>
                  </div>

                  @endforeach

              </div>
                  
            <!-- /.box-body -->
            </div>

<style>
#teste {
 margin-right: 5px;
}

#container {
  align-items: center;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
}
</style>
@stop


  
