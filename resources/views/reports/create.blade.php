@extends('layouts.app')

@section('title')
Reports
@stop


@section('content')
<div class="card card-dark">
    <div class="card-header">
        <h3 class="card-title">Adicionar Report</h3>
    </div>

    
    <form role="form" action="{{ route('reports.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <label for="client">Cliente</label>
                    <input type="text" class="form-control" id="client" name="client" placeholder="Cliente">
                </div>
            </div>
            <br>
            <h5>Objetivos</h5>
            <input type="number" id="interation_objectives" name="interation_objectives">
            <div id="fomulario-objectives">
                <div class="row input_objectives">
                    <div class="col-sm-4">
                        <label for="title1">Titulo</label>
                        <input type="text" class="form-control" id="title1" name="title1" placeholder="Titulo">
                    </div>
                    <div class="col-sm-4">
                        <label for="date_end1">Data de Entrega</label>
                        <input type="date" class="form-control" id="date_end1" name="date_end1">
                    </div>
                    <div class="col-sm-2">
                        <label for="quantity_objectives1">Quantidade</label>
                        <input type="number" class="form-control" id="quantity_objectives1" name="quantity_objectives1">
                    </div>

                    <div class="col-sm-2 d-flex align-items-end">
                        <div>
                            <label for="progress1">Progresso</label>
                            <input type="number" min="1" max="100" class="form-control" id="progress1" name="progress1" placeholder="%">
                        </div>
                        <div>
                            <a class="btn" onclick="addInputObjective()"><i class="fas fa-plus-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h5>Metas</h5>
            <div id="fomulario-goals">
                <div class="row input_metas">
                    <div class="col-sm-4">
                        <label for="description_goals">Descrição</label>
                        <input type="text" class="form-control" id="description_goals" name="description_goals" placeholder="Descrição">
                    </div>
                    <div class="col-sm-4">
                        <label for="quantity_goals">Quantidade</label>
                        <input type="number" class="form-control" id="quantity_goals" name="quantity_goals">
                    </div>
                    <div class="col-sm-3">
                        <label for="type_goals">Tipo</label>
                        <select class="form-control" name="type_goals" id="type_goals">
                            <option value="0">Selecionar</option>
                            <option value="1">Modelagem</option>
                            <option value="2">Execução</option>
                            <option value="3">Outros</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <h5>Impactos</h5>
            <div id="fomulario-impacts">
                <div class="row input_metas">
                    <div class="col-sm-3">
                        <label for="problem_description">Descrição do Problema</label>
                        <input type="text" class="form-control" id="problem_description" name="problem_description" placeholder="Descrição do Problema">
                    </div>
                    <div class="col-sm-3">
                        <label for="impact_description">Descrição do Impacto</label>
                        <input type="text" class="form-control" id="impact_description" name="impact_description" placeholder="Descrição do Impacto">
                    </div>
                    <div class="col-sm-3">
                        <label for="flagged">Como foi Sinalizado</label>
                        <input type="text" class="form-control" id="flagged" name="flagged" placeholder="Como foi Sinalizado">
                    </div>
                    <div class="col-sm-2">
                        <label for="impact_hours">Horas de impacto</label>
                        <input type="number" class="form-control" id="impact_hours" name="impact_hours">
                    </div>
                </div>
            </div>
            <br>
            <h5>Reuniões</h5>
            <div id="fomulario-meetings">
                <div class="row input_metas">
                    <div class="col-sm-6">
                        <label for="meeting_description">Descrição</label>
                        <input type="text" class="form-control" id="meeting_description" name="meeting_description" placeholder="Descrição">
                    </div>
                    <div class="col-sm-5">
                        <label for="meeting_duration">Duração</label>
                        <input type="number" class="form-control" id="meeting_duration" name="meeting_duration">
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Cadastrar</button>
    </form>
</div>
@stop

@section('js')
<script src="{{ asset('js/reportsFunctions.js') }}"></script>
@stop