@extends('adminlte::page')

@section('title', 'Cadastro de Equipamentos')

@section('content')

<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Cadastro de Departamentos</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form action="{{ route('registerDepartament') }}" method="post" role="form">
      {!! csrf_field() !!}
    <div class="box-body">
        <div class="form-group row">
            <div class="col-md-3" name="sector">
              <label for="name">Nome do Setor</label>
              <input type="text" class="form-control" name="name" placeholder="Ex.: Financeiro">
            </div>

            <div class="col-md-2">
                <label for="local">Local</label>
                <select type="text" class="form-control" name="local" placeholder="Ex.: Hospital Unimed">
                  @foreach ($unities as $unity)
                    <option value="Hospital Unimed" value="{{$unity->id}}">{{ $unity->name }}</option>
                  @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <label for="cost_center">Centro de Custo</label>
                <input type="text" class="form-control" name="cost_center" placeholder="Ex.: 1098">
            </div>
        </div>
        
    </div>
      
    <div class="box-footer with-border">
        <button type="submit" class="btn btn-success mb-2">Cadastrar</button>    
    </div>

  </form>
</div>


<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Departamentos Cadastrados</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="tableDepartament" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
                <tr>
                  
                  <th>Centro de Custo</th>
                  <th>Sigla</th>
                  <th>Nome</th>
                  <th>Local</th>
                  
                </tr>
            </thead>
            <tbody>
              @foreach($resultado as $x)
              <tr>
                <td>{{ $x->cost_center }}</td>
                <td>{{ $x->sigla }}</td>
                <td>{{ $x->name }}</td>
                <td>{{ $x->nameUnity }}</td>
              </tr>
              @endforeach
          </table>
          
        </div>
      </div>
    </div>
  </div>
</div>

<style>

.box-body{

  padding-bottom: 0%;

}

</style>

@stop