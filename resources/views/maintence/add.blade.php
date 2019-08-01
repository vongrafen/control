@extends('adminlte::page')

@section('title', 'Cadastro de Equipamentos')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Cadastro de Manutenção</h3>
    </div>

    <div class="box-body">

    <form action="{{ route('maintenceCreate') }}" method="post" role="form">
            {!! csrf_field() !!}                  

        <div class='form-group'>

            <div class='row'>

                <input type="hidden" value="{{$maintence->equipamentID}}" class="form-control" name="equipament_id">    

                <div class="form-group col-md-1">
                    <label for="patrimony">Patrimônio</label>
                    <input type="patrimony " value="{{$maintence->patrimony}}" class="form-control" name="patrimony" disabled>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="name">Nome da Máquina</label>
                    <input type="name" value="{{$maintence->name}}" class="form-control" name="name">
                </div>

                <div class="form-group col-md-4">
                    <label for="departament">Setor</label>
                    <select type="int" class="form-control" name="departament_id">
                            @foreach ($departament as $x)
                              <option @if ($x->name == $maintence->departamentName) selected @endif value='{{$x->id}}'>{{$x->name}}</option>
                            @endforeach
                    </select>
                </div>
                
                <div class="form-group col-md-3">
                        <label for="data">Data</label>
                        <input type="text" value="<?php echo date('Y/m/d');?>" class="form-control" name="data" readonly>
                </div>   

                <div class="form-group col-md-12">
                    <label for="obs">Observações</label>
                    <textarea class="form-control"  name="obs" rows='3'></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-success mb-2" >  Efetuar Manutenção</button>

        </div>    
    </form>


    </div>

</div>


@stop