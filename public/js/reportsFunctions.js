var controlInputObjectives = 1;
function addInputObjective(){
    controlInputObjectives++;
    document.getElementById('fomulario-objectives').insertAdjacentHTML('beforeend',`
    <div class="row input_objectives" id="input_objectives${controlInputObjectives}">
        <div class="col-sm-4">
            <label for="title${controlInputObjectives}">Titulo</label>
            <input type="text" class="form-control" id="title${controlInputObjectives}" name="title${controlInputObjectives}" placeholder="Titulo">
        </div>
        <div class="col-sm-4">
            <label for="date_end${controlInputObjectives}">Data de Entrega</label>
            <input type="date" class="form-control" id="date_end${controlInputObjectives}" name="date_end${controlInputObjectives}">
        </div>
        <div class="col-sm-2">
            <label for="quantity_objectives${controlInputObjectives}">Quantidade</label>
            <input type="number" class="form-control" id="quantity_objectives${controlInputObjectives}" name="quantity_objectives${controlInputObjectives}">
        </div>
        <div class="col-sm-2 d-flex align-items-end p-0">
            <div class="col-sm">
                <label for="progress${controlInputObjectives}">Progresso</label>
                <input type="number" min="1" max="100" class="form-control" id="progress${controlInputObjectives}" name="progress${controlInputObjectives}" placeholder="%">
            </div>
            <div>
                <a class="btn" onclick="removeInputObjective(${controlInputObjectives})"><i class="fas fa-minus-square"></i></a>
            </div>
        </div>
    </div>
    `)
    document.getElementById('interation_objectives').value = controlInputObjectives;
}

function removeInputObjective(idInput){
    document.getElementById('input_objectives' + idInput).remove();
}

var controlInputGoals = 1;
function addInputGoal(){
    controlInputGoals++;
    document.getElementById('fomulario-goals').insertAdjacentHTML('beforeend',`
    <div class="row input_goals" id="input_goals${controlInputGoals}">
        <div class="col-sm-4">
            <label for="description_goals${controlInputGoals}">Descrição</label>
            <input type="text" class="form-control" id="description_goals${controlInputGoals}" name="description_goals${controlInputGoals}" placeholder="Descrição">
        </div>
        <div class="col-sm-4">
            <label for="quantity_goals${controlInputGoals}">Quantidade</label>
            <input type="number" class="form-control" id="quantity_goals${controlInputGoals}" name="quantity_goals${controlInputGoals}">
        </div>
        <div class="col-sm-4 d-flex align-items-end p-0">
            <div class="col-sm">
                <label for="type_goals${controlInputGoals}">Tipo</label>
                <select class="form-control" name="type_goals${controlInputGoals}" id="type_goals${controlInputGoals}">
                    <option value="0">Selecionar</option>
                    <option value="1">Modelagem</option>
                    <option value="2">Execução</option>
                    <option value="3">Outros</option>
                </select>
            </div>
            <div>
            <a class="btn" onclick="removeInputGoal(${controlInputGoals})"><i class="fas fa-minus-square"></i></a>
            </div>
        </div>
    </div>
    `)
    document.getElementById('interation_goals').value = controlInputGoals;
}
function removeInputGoal(idInput){
    document.getElementById('input_goals' + idInput).remove();
}

var controlInputImpacts = 1;
function addInputImpact(){
    controlInputImpacts++;
    document.getElementById('fomulario-impacts').insertAdjacentHTML('beforeend',`
    <div class="row input_metas" id="input_impacts${controlInputImpacts}">
        <div class="col-sm-3">
            <label for="problem_description${controlInputImpacts}">Descrição do Problema</label>
            <input type="text" class="form-control" id="problem_description${controlInputImpacts}" name="problem_description${controlInputImpacts}" placeholder="Descrição do Problema">
        </div>
        <div class="col-sm-3">
            <label for="impact_description${controlInputImpacts}">Descrição do Impacto</label>
            <input type="text" class="form-control" id="impact_description${controlInputImpacts}" name="impact_description${controlInputImpacts}" placeholder="Descrição do Impacto">
        </div>
        <div class="col-sm-3">
            <label for="flagged${controlInputImpacts}">Como foi Sinalizado</label>
            <input type="text" class="form-control" id="flagged${controlInputImpacts}" name="flagged${controlInputImpacts}" placeholder="Como foi Sinalizado">
        </div>
        <div class="col-sm-3 d-flex align-items-end p-0">
            <div class="col-sm">
                <label for="impact_hours${controlInputImpacts}">Horas de impacto</label>
                <input type="number" class="form-control" id="impact_hours${controlInputImpacts}" name="impact_hours${controlInputImpacts}">
            </div>
            <div>
                <a class="btn" onclick="removeInputImpact(${controlInputImpacts})"><i class="fas fa-minus-square"></i></a>
            </div>
        </div>
    </div>
    `)
    document.getElementById('interation_impacts').value = controlInputImpacts;
}
function removeInputImpact(idInput){
    document.getElementById('input_impacts' + idInput).remove();
}

var controlInputMeetings = 1;
function addInputMeeting(){
    controlInputMeetings++;
    document.getElementById('fomulario-meetings').insertAdjacentHTML('beforeend',`
    <div class="row input_metas" id="input_meetings${controlInputMeetings}">
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
                <a class="btn" onclick="removeInputMeeting(${controlInputMeetings})"><i class="fas fa-minus-square"></i></a>
            </div>
        </div>
    </div>
    `)
    document.getElementById('interation_meetings').value = controlInputMeetings;
}
function removeInputMeeting(idInput){
    document.getElementById('input_meetings' + idInput).remove();
}