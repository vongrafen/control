@extends('adminlte::page')

@section('title', 'Cadastro de Equipamentos')

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<link rel="stylesheet" href="css/main.css">

<div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Histórico de Patrimônios</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{ route('cadastrar') }}" method="post" role="form">
        {!! csrf_field() !!}
      <div class="box-body">

            <table id="tableDepartament" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                    <tr>
                        
                        <th>Patrimônio </th>
                        <th>Nome antigo</th>
                        <th>Novo nome</th>
                        <th>Setor Antigo</th>
                        <th>Novo Setor</th>
                        <th>Data</th>

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
                            </tr>
                        
                    </tr>
                </thead>
            <tbody>

      </div>
    
    </form>

</div>


@stop