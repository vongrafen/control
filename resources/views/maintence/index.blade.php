@extends('adminlte::page')

@section('title', 'Manutenções')

@section('content')

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Mapa de Manutenções</h3>
    </div>
    
    <div class="box-body">

      <div class="row">

      @foreach ($equipament as $x)

      <div class="modal fade" id="modal-mensagem_{{$x->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">>
                <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                              <h4 class="modal-title">Detalhes da Manutenção</h4>
                              <p>Efetuado no dia: {{ date('d/m/Y', strtotime($x->data)) }} <br>Patrimonio:  {{$x->patrimony}}</p>
                          </div>
                          <div class="modal-body">

                          <p>Descrição: <b>{{$x->obs}}</b></p>


                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          </div>
                      </div>
                </div>
            </div>

            <div class="col-lg-2 col-xs-4">
                <!-- small box -->
                
                @if(date('Y-m-d', strtotime("-1 year ")) < $x->data )

                <div class="small-box bg-green">
                
                @elseif (date('Y-m-d', strtotime("-1 year -30 day")) < $x->data )

                  <div class="small-box bg-yellow">
                
                @elseif (date('Y-m-d', strtotime("-1 year")) > $x->data)

                  <div class="small-box bg-red">

                @endif

                  <div class="inner">
                    <h3>{{$x->name}}</h3>
                    <p>Data: {{date('d/m/Y', strtotime($x->data))}}<br>Patrimonio:  {{$x->patrimony}}</p>
                  <a href="#" type="button" data-toggle="modal" data-target="#modal-mensagem_{{$x->id}}" data-skin="skin-blue" class="btn btn-default" data-tt="tooltip" data-placement="bottom" title="Detalhes da Manutenção"><i class="fa fa-eye"></i></a>
                    <a href="{{ route('maintenceAdd', $x->equipament_id)}}" type="button" class="btn btn-default" data-tt="tooltip" data-placement="bottom" title="Nova Manutenção"><i class="fa fa fa-wrench"></i></a>
                  </div>

                @if(date('Y-m-d', strtotime("-1 year")) < $x->data )

                  <div class="icon">
                      <i class="ion ion-checkmark"></i>
                  </div>
                
                @elseif (date('Y-m-d', strtotime("-1 year -30 day")) < $x->data )

                  <div class="icon">
                      <i class="ion ion-alert"></i>
                  </div>
                
                @elseif (date('Y-m-d', strtotime("-1 year")) > $x->data)

                  <div class="icon">
                      <i class="ion ion-help"></i>
                  </div>

                @endif

                                    

                </div>
            </div>
                       
          
          
        @endforeach


    </div>
</div>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    $('[data-tt="tooltip"]').tooltip()
  });
</script>

<style>
.modal-header{
  padding-bottom: 0px;
}

.modal-body{
  padding-top: 3px;
}
</style>

@stop


  
