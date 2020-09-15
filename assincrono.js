function getIgpm() {
    $.ajax({
        method: 'get',
        url: 'https://www.sucessoimoveis.com/api/igpm',
        dataType: 'json',
        success: function (data) {
            $('#IGPM').html(data.valor);
        },
        error: function (argument) {
            alert('Falha ao obter informações');
        }
    });
}

function getCub() {
    $.ajax({
        method: 'get',
        url: 'https://www.sucessoimoveis.com/api/cub',
        dataType: 'json',
        success: function (data) {
            $('#CUB').html(data.valor);
        },
        error: function (argument) {
            alert('Falha ao obter informações');
        }
    });
}

function getHorarios() {
    $.ajax({
        method: 'get',
        url: 'https://www.stopshop.com.br/api/horario',
        dataType: 'json',
        success: function (data) {
            $('#HORARIOS').html(data.horarioDescritivo);
        },
        error: function (argument) {
            alert('Falha ao obter informações');
        }
    });
}

function chamarServicos() {
    getIgpm();
    getCub();
    getHorarios();
}