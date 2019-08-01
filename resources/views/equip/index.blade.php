@extends('adminlte::page')

@section('title', 'Cadastro de Equipamentos')

@section('content')

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Equipamentos Cadastrados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div class="modal fade" id="modal-mensagem">
                    <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                 <h4 class="modal-title">Detalhes do equipamento</h4>
                             </div>
                             <div class="modal-body">


                                 <p>Conteúdo da mensagem</p>


                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-default date" data-dismiss="modal">Fechar</button>
                             </div>
                          </div>
                    </div>
                </div>



              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-12">
                    <table id="tableDepartament" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                      <tr>
                        
                        <th>Patrimônio</th>
                        <th>Setor</th>
                        <th>Nome do PC</th>
                        <th>Usuário</th>
                        <th>Modelo PC</th>
                        <th>Processador</th>
                        <th>GB's</th>
                        <th>DDR</th>
                        <th>Mhz</th>
                        <th>Disco</th>
                        <th>Ações</th>
                        
                      </tr>
                    </thead>
                <tbody>
                    @foreach($equipament as $x)
                    <tr>
                      <td>{{ $x->patrimony }}</td>
                      <td>{{ $x->name_eq }}</td>
                      <td>{{ $x->name }}</td>
                      <td>{{ $x->user }}</td>
                      <td>{{ $x->pc_model }}</td>
                      <td>{{ $x->proc }}</td>
                      <td>{{ $x->memory }}</td>
                      <td>{{ $x->memory_ddr }}</td>
                      <td>{{ $x->memory_frequency }}</td>
                      <td>{{ $x->disk_type }}</td>
                      <td>
                          <a href="#" data-toggle="modal" data-target="#modal-mensagem" data-tt="tooltip" data-skin="skin-blue" class="btn btn-success btn-xs" data-placement="top" title="Detalhes do Equipamento"><i class="fa fa-eye"></i></a>
                          <a href="{{ route('editEquip', $x->id) }}" data-skin="skin-blue" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
                          <a href="{{ route('deleteEquip', $x->id)}}" data-skin="skin-blue" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Deletar"><i class="fa fa-trash-o"></i></a>
                          <a href="{{ route('maintenceAdd', $x->id)}}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Efetuar Manutenção"><i class="fa fa-wrench"></i></a>
                      </td>

                    </tr>
                  @endforeach
              </table>
            </div>
          </div>
            </div>       
            <!-- /.box-body -->
          </div>
<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    $('[data-tt="tooltip"]').tooltip()
  });
</script>

@stop


  
