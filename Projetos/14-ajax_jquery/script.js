$(document).ready(() => {
	$('#documentacao').on('click', () => {
        $('#pagina').load('documentacao.html')
    })
	$('#suporte').on('click', () => {
        $('#pagina').load('suporte.html')
    })
    // Ajax
    $('#competencia').on('change', e =>{
        let competencia = $(e.target).val()
        $.ajax({
            type: 'GET',
            url: 'app.php',
            data: `competencia=${competencia}`,
            dataType: 'json',
            success: dados => {
                $('#numeroVendas').html(dados.numeroVendas)
                $('#totalVendas').html(dados.totalVendas)
                console.log('Requisição realizada com sucesso')},
            error: () => {console.log('erro')},
        })
    })
})