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
            <fieldset class="form-group">
                <legend class="col-form-label">Objetivos</legend>
                <input hidden type="number" id="interation_objectives" name="interation_objectives">
                <div id="fomulario-objectives">
                    <div class="row input_objectives">
                        <div class="col-sm-4">
                            <label for="title1">Titulo</label>
                            <input type="text" class="form-control" id="title1" name="title1" placeholder="Titulo" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="date_end1">Data de Entrega</label>
                            <input type="date" class="form-control" id="date_end1" name="date_end1" required>
                        </div>
                        <div class="col-sm-2">
                            <label for="quantity_objectives1">Quantidade</label>
                            <input type="number" class="form-control" id="quantity_objectives1" name="quantity_objectives1" required>
                        </div>

                        <div class="col-sm-2 d-flex align-items-end p-0">
                            <div class="col-sm">
                                <label for="progress1">Progresso</label>
                                <input type="number" min="1" max="100" class="form-control" id="progress1" name="progress1" placeholder="%" required>
                            </div>
                            <div>
                                <a class="btn" onclick="addInputObjective()"><i class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br>
            <fieldset class="form-group">
                <legend class="col-form-label">Metas</legend>
                <input hidden type="number" id="interation_goals" name="interation_goals">
                <div id="fomulario-goals">
                    <div class="row input_goals">
                        <div class="col-sm-4">
                            <label for="description_goals1">Descrição</label>
                            <input type="text" class="form-control" id="description_goals1" name="description_goals1" placeholder="Descrição">
                        </div>
                        <div class="col-sm-4">
                            <label for="quantity_goals1">Quantidade</label>
                            <input type="number" class="form-control" id="quantity_goals1" name="quantity_goals1">
                        </div>
                        <div class="col-sm-4 d-flex align-items-end p-0">
                            <div class="col-sm">
                                <label for="type_goals1">Tipo</label>
                                <select class="form-control" name="type_goals1" id="type_goals1">
                                    <option value="0">Selecionar</option>
                                    <option value="1">Modelagem</option>
                                    <option value="2">Execução</option>
                                    <option value="3">Outros</option>
                                </select>
                            </div>
                            <div>
                                <a class="btn" onclick="addInputGoal()"><i class="fas fa-plus-square"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </fieldset>
            <br>
            <fieldset class="form-group">
                <legend class="col-form-label">Impactos</legend>
                <input hidden type="number" id="interation_impacts" name="interation_impacts">
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
                        <div class="col-sm-3 d-flex align-items-end p-0">
                            <div class="col-sm">
                                <label for="impact_hours">Horas de impacto</label>
                                <input type="number" class="form-control" id="impact_hours" name="impact_hours">
                            </div>
                            <div>
                                <a class="btn" onclick="addInputImpact()"><i class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br>
            <fieldset class="form-group">
                <legend class="col-form-label">Reuniões</legend>
                <input hidden type="number" id="interation_meetings" name="interation_meetings">
                <div id="fomulario-meetings">
                    <div class="row input_metas">
                        <div class="col-sm-6">
                            <label for="meeting_description">Descrição</label>
                            <input type="text" class="form-control" id="meeting_description" name="meeting_description" placeholder="Descrição">
                        </div>
                        <div class="col-sm-3 d-flex align-items-end p-0">
                            <div class="col-sm">
                                <label for="meeting_duration">Duração</label>
                                <input type="number" class="form-control" id="meeting_duration" name="meeting_duration">
                            </div>
                            <div>
                                <a class="btn" onclick="addInputMeeting()"><i class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br>
            <button type="submit" class="btn btn-dark">Cadastrar</button>
    </form>
</div>
@stop

@section('js')
<script src="{{ asset('js/reportsFunctions.js') }}"></script>
@stop