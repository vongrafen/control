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
    <form action="{{ route('equipamentHistory') }}" method="post" role="form">
        {!! csrf_field() !!}
      <div class="box-body">

            <table id="tableDepartament" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                    <tr>
                        <th>Patrimônio</th>
                        
                        <th>Nome antigo</th>
                        <th>Nome novo</th>
                        <th>Setor Antigo</th>
                        <th>Setor Novo</th>
                        <th>Data</th>
                    </tr>
                </thead>

                @foreach($equipamentHistory as $x)
                    <tr>
                        <td>{{ $x->patrimony }}</td>
                        <td>{{ $x->nameEquipament }}</td>
                        <td>{{ $x->nameEquipament }}</td>
                        <td>{{ $x->nameDepartament }}</td>
                        <td>{{ $x->nameDepartament }}</td>
                        <td>{{ $x->date }}</td>
                    </tr>
                @endforeach
                        
            <tbody>
      </div>
    </form>
</div>

@stop