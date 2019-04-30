@extends('adminlte::page')

@section('title', 'Cadastro de Equipamentos')

@section('content')
<link rel="stylesheet" href="css/main.css">

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Cadastro de Equipamentos</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">

            <div class="form-group">
              <label for="patrimony">Patrimônio</label>
              <input type="patrimony" class="form-control" id="patrimony" placeholder="Ex.: 000000">
            </div>

            <div class="form-group">
              <label for="pc_brand">Fabricante</label>
              <input type="pc_brand" class="form-control" id="pc_brand" placeholder="Ex.: Dell, HP...">
            </div>

            <div class="form-group">
              <label for="pc_model">Modelo</label>
              <input type="pc_model" class="form-control" id="pc_model" placeholder="Ex.: VOSTRO 230S">
            </div>
            
            <div class="form-group">
              <label for="service_tag">ServiceTag</label>
              <input type="service_tag" class="form-control" id="service_tag" placeholder="Ex.: NCS2280">
            </div>

            <div class="form-group">
              <label for="partnumber">Partnumber</label>
              <input type="partnumber" class="form-control" id="partnumber" placeholder="Ex.: 4568NZH2233NN">
            </div>

            <div class="form-row">
              <div class="col-md-6">
                <label for="proc">Processador</label>
                <input type="proc" class="form-control" id="proc" placeholder="Ex.: I5-7500">
              </div>
              <div class="form-group col-md-6">
                  <label for="proc_hz">Mhz</label>
                  <input type="proc_hz" class="form-control" id="proc_hz" placeholder="Ex.: 3.30">
              </div>
            </div>
      
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
@stop