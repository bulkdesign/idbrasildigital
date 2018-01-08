(function($) {
  $(function() {
    $('.toggle-overlay').click(function() {
      $('aside').toggleClass('open');
    });

    var $campoCPF = $("#cpf_da_validacao");
    $campoCPF.mask('000.000.000-00', {reverse: true});
    
    var $campoCNPJ = $("#cnpj_da_validacao");
    $campoCNPJ.mask('00.000.000/0000-00', {reverse: true});

    var $campoAniversario = $("#nascimento_da_validacao");
    $campoAniversario.mask('00/00/0000', {reverse: true});

    $('#formvalidation').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#ajax-response').html(data); 
            }
        });

    });

  });

})(jQuery);