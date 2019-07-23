@extends('adminlte::page')

@section('title', 'Cadastro de Equipamentos')

@section('content')
<link rel="stylesheet" href="css/main.css">

<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Editar Equipamentos</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form action="{{ route('updateEquip', $equipament->id) }}" method="post" role="form">
    {!! csrf_field() !!}
    <div class="box-body">
      <div class="form-row">
            <div class="col-md-1">
              <label for="patrimony">Patrimônio</label>
            <input disabled type="text" class="form-control" value="{{$equipament->patrimony}}" name="patrimony" placeholder="Ex.: 000000">
            </div>

            <div class="col-md-2">
                <label for="name">Nome do Equipamento</label>
                <input type="text" class="form-control" value="{{$equipament->name}}" name="name" placeholder="Ex.: H-TI-14">
            </div>

            <div class="col-md-2">
                <label for="so">Sistema Operacional</label>
                <select type="text" class="form-control" name="so" >
                    <option @if ($equipament->so == 'Terminal Service') selected @endif>Terminal Service</option>  
                    <option @if ($equipament->so == 'Windows XP') selected @endif>Windows XP</option>
                    <option @if ($equipament->so == 'Windows 7') selected @endif>Windows 7</option>
                    <option @if ($equipament->so == 'Windows 8') selected @endif>Windows 8</option>
                    <option @if ($equipament->so == 'Windows 10') selected @endif>Windows 10</option>
                </select>
              </div>

              <div class="col-md-2">
                  <label for="arquiteture">Sistema Operacional</label>
                  <select type="text" class="form-control" name="arquiteture" >

                    @if ($equipament->arquiteture == 'x32')
                      <option selected>{{$equipament->arquiteture}}</option>
                      <option>x64</option>

                    @elseif ($equipament->arquiteture == 'x64')
                      <option>x32</option>
                      <option selected>{{$equipament->arquiteture}}</option>   
                    @endif       

                  </select>
              </div>

            <div class="col-md-2">
                <label for="service_tag">ServiceTag</label>
                <input type="text" class="form-control" value="{{$equipament->service_tag}}" name="service_tag" placeholder="Ex.: NCS2280">
            </div>

            <div class="form-group col-md-3">
                <label for="partnumber">Partnumber</label>
                <input type="text" class="form-control" name="partnumber" value="{{$equipament->service_tag}}" placeholder="Ex.: 4568NZH2233NN">
            </div>
      </div>

        <div class="form-row">

            <div class="col-md-2">
                <label for="departament">Setor</label>
                <input disabled type="text" class="form-control" name="departament" value="{{$equipament->name_equipament}}" placeholder="Ex.: Medicina Preventiva">
              </div>

            <div class="col-md-2">
                <label for="user">Usuário</label>
                <input type="text" class="form-control" name="user" value="{{$equipament->user}}"  placeholder="Ex.: usuario.sobrenome">
              </div>

            <div class="col-md-4">
              <label for="pc_brand">Fabricante</label>
              <input type="text" class="form-control" name="pc_brand" value="{{$equipament->pc_brand}}" placeholder="Ex.: Dell, HP...">
            </div>

            <div class="form-group col-md-4">
              <label for="pc_model">Modelo</label>
              <input type="text" class="form-control" name="pc_model" value="{{$equipament->pc_model}}" placeholder="Ex.: VOSTRO 230S">
            </div>

        </div>           
    </div>

    <div class="box">
    
      <div class="box-header with-border">
        <h3 class="box-title">Processador</h3>
      </div>
      

        <div class="box-body">
          <div class="form-row">
    
              <div class="col-md-4">
                <label for="proc_brand">Fabricante</label>
                <input type="proc_brand" class="form-control" name="proc_brand" value="{{$equipament->proc_brand}}" placeholder="Ex.: Intel, AMD...">
              </div>
    
              <div class="col-md-4">
                  <label for="proc">Modelo</label>
                  <input type="proc" class="form-control" name="proc" value="{{$equipament->proc}}" placeholder="Ex.: I5-7500">
              </div>
    
              <div class="form-group col-md-4">
                <label for="proc_hz">Velocidade</label>
                <input type="proc_hz" class="form-control" name="proc_hz" value="{{$equipament->proc_hz}}" placeholder="Ex.: 3.30">
              </div>
    
          </div>
        </div>
    </div>

  <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Memória</h3>
        </div>

          <div class="box-body">
            <div class="form-row">
      
                <div class="col-md-3">
                    <label for="memory">Tamanho</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ex.: 4, 8, 16, 32" value="{{$equipament->memory}}" name="memory" aria-describedby="teste">
                        <div class="input-group-addon">
                            <span class="input-group-text" id="memory">GB's</span>
                        </div>
                    </div>
                </div>
      
                <div class="col-md-2">
                    <label for="memory_ddr">Tipo</label>
                    <select type="text" class="form-control" name="memory_ddr" >
                      <option @if ($equipament->memory_ddr == 'DDR') selected @endif>DDR</option>
                      <option @if ($equipament->memory_ddr == 'DDR1') selected @endif>DDR1</option>
                      <option @if ($equipament->memory_ddr == 'DDR2') selected @endif>DDR2</option>
                      <option @if ($equipament->memory_ddr == 'DDR3') selected @endif>DDR3</option>
                      <option @if ($equipament->memory_ddr == 'DDR4') selected @endif>DDR4</option>
                    </select>
                </div>
                
                <div class="col-md-3">
                    <label for="memory_frequency">Frequência</label>
                    <div class="input-group">
                    <input type="text" class="form-control" value="{{$equipament->memory_frequency}}" name="memory_frequency" placeholder="Ex.: 1333">
                    <div class="input-group-addon">
                        <span class="input-group-text" id="memory_frequency">Ghz</span>
                </div>
             </div>
          </div>

                <div class="col-md-2">
                      <label for="memory_slots">Nº de Slots</label>
                      <select type="text" class="form-control" name="memory_slots">
                          <option @if ($equipament->memory_slots == '2') selected @endif>2</option>
                          <option @if ($equipament->memory_slots == '4') selected @endif>4</option>
                      </select>
                </div>

                <div class="form-group col-md-1">
                  <label for="qtd_slots">Ocupados</label>
                  <select type="text" class="form-control" name="qtd_slots">
                    @if ($equipament->memory_slots == '2')
                      <option @if ($equipament->qtd_slots == '1') selected @endif>1</option>
                      <option @if ($equipament->qtd_slots == '2') selected @endif>2</option>
                    @else
                      <option @if ($equipament->qtd_slots == '1') selected @endif>1</option>
                      <option @if ($equipament->qtd_slots == '2') selected @endif>2</option>
                      <option @if ($equipament->qtd_slots == '3') selected @endif>3</option>
                      <option @if ($equipament->qtd_slots == '4') selected @endif>4</option>   
                    @endif
                      
                  </select>
                </div>

            </div>
            </div>
  </div>

  <div class="box">

        <div class="box-header with-border">
          <h3 class="box-title">Disco</h3>
        </div>
        

          <div class="box-body">
            <div class="form-row">
      
                <div class="col-md-2">
                    <label for="disk">Tamanho</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ex.: 230" value="{{$equipament->disk}}" name="disk" aria-describedby="disk">
                        <div class="input-group-addon">
                            <span class="input-group-text" id="memory">GB's</span>
                        </div>
                    </div>
                </div>
      
                <div class="col-md-1">
                    <label for="disk_type">Tipo</label>
                    <select type="text" class="form-control" value="{{$equipament->disk_type}}" name="disk_type">
                      <option @if ($equipament->disk_type == 'HDD') selected @endif>HDD</option>
                      <option @if ($equipament->disk_type == 'SSD') selected @endif>SSD</option>
                    </select>
                </div>

            </div>
          </div>
  </div>

      <div class="box-body">            
        <button type="submit" class="btn btn-success mb-2" >  Salvar Alterações</button>
      <button href="{{route('index')}}" class="btn btn-danger mb-2 " >  Cancelar</button>    
      </div>

      </form>
</div>

@stop