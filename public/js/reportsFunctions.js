var controlInputObjectives = 1;
function addInputObjective(){
    controlInputObjectives++;
    document.getElementById('fomulario-objectives').insertAdjacentHTML('beforeend',`
    <div class="row input_objectives" id="input${controlInputObjectives}">
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
        <div class="col-sm-2 d-flex align-items-end minus-remove">
            <div>
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
    document.getElementById('input' + idInput).remove();
}

function addInputGoals(){
    controlInputGoals++;

}