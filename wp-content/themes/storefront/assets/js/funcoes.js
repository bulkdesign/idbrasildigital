(function($) {
  $(function() {
    $('.toggle-overlay').click(function() {
      $('aside').toggleClass('open');
    });

    var $campoCPF = $("#cpf_da_validacao");
    $campoCPF.mask('000.000.000-00', {reverse: true});

    var $billingCPF = $("#billing_cpf");
    $billingCPF.mask('000.000.000-00', {reverse: true}).attr('maxlength','14');
    
    var $campoCNPJ = $("#cnpj_da_validacao");
    $campoCNPJ.mask('00.000.000/0000-00', {reverse: true});

    var $billingCNPJ = $("#validacao_cnpj");
    $billingCNPJ.mask('00.000.000/0000-00', {reverse: true}).attr('maxlength','18');

    var $campoAniversario = $("#nascimento_da_validacao");
    $campoAniversario.mask('00/00/0000', {reverse: true});

    var $billingBirthday = $("#validacao_nascimento");
    $billingBirthday.mask('00/00/0000', {reverse: true}).attr('maxlength','10');

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