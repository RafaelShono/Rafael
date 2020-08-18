

// Now you can use cool array prototypes

let valores3 = ["cpfOuCnpj","cadastro_pessoa"];
  
  let options1 = {
      onKeyPress: function (cpf, ev, el, op) {
          var masks = ['000.000.000-000', '00.000.000/0000-00'];
          $('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
      }
  }
  $('.cpfOuCnpj').length > 11 ? $( '.cpfOuCnpj').mask('00.000.000/0000-00', options) : $( '.cpfOuCnpj').mask('000.000.000-00#', options1);

  $(valores3).change(function() {
    var selectedItem = $(this).val();
    var abc = $('option1:selected',this).data("value");

  })
  // segundo campo CN
  let options = {
      onKeyPress: function (cpf, ev, el, op) {
          var masks = ['000.000.000-000', '00.000.000/0000-00'];
          $('.cadastro_pessoa').mask((cpf.length > 14) ? masks[1] : masks[0], op);
      }
  }
  $('.cadastro_pessoa').length > 11 ? $( '.cadastro_pessoa').mask('00.000.000/0000-00', options) : $( '.cadastro_pessoa').mask('000.000.000-00#', options);

  $(valores3).change(function() {
    var selectedItem = $(this).val();
    var abcd = $('option:selected',this).data("value");

  })

  let cpfOuCnpj = document.getElementById("cpfOuCnpj").value;
  console.log(cpfOuCnpj);
  let  pessoaJuridica = document.getElementById("cadastro_pessoa").value;
  console.log(pessoaJuridica );
