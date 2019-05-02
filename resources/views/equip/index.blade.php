@extends('adminlte::page')

@section('title', 'Cadastro de Equipamentos')

@section('content')

<div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                      <tr>
                        
                        <th>Patrimônio</th>
                        <th>Setor</th>
                        <th>Nome do PC</th>
                        <th>Usuário</th>
                        <th>S.O.</th>
                        <th>Arquitetura</th>
                        <th>Fabricante</th>
                        <th>Modelo PC</th>
                        <th>Processador</th>
                        <th>Ghz</th>
                        <th>GB's</th>
                        <th>DDR</th>
                        <th>Mhz</th>
                        <th>Disco</th>
                        
                      </tr>
                    </thead>
                <tbody>
                    @foreach($resultado as $x)
                    <tr>
                      <td>{{ $x->patrimony }}</td>
                      <td>{{ $x->departament }}</td>
                      <td>{{ $x->name }}</td>
                      <td>{{ $x->user }}</td>
                      <td>{{ $x->so }}</td>
                      <td>{{ $x->arquiteture }}</td>
                      <td>{{ $x->pc_brand }}</td>
                      <td>{{ $x->pc_model }}</td>
                      <td>{{ $x->proc }}</td>
                      <td>{{ $x->proc_hz }}</td>
                      <td>{{ $x->memory }}</td>
                      <td>{{ $x->memory_ddr }}</td>
                      <td>{{ $x->memory_frequency }}</td>
                      <td>{{ $x->disk }}</td>

                    </tr>
                  @endforeach
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 51 to 57 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
@stop