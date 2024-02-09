var pergunta = document.getElementById('input-pergunta');
var buttonRespostas = document.getElementById('btn-respostas');
var div_inputs = document.getElementById('inputs');
var buttonRemove = document.getElementById('btn-respostas-excluir');
var btn_submit = document.getElementById('btn-submit');
var cont_id = 0;

var container_inputs  = document.querySelectorAll('input');

buttonRespostas.addEventListener('click', function(e){
  e.preventDefault();  
  criaInput();  
 
});

buttonRemove.addEventListener('click', function(e){
  e.preventDefault();
  deletarSelect();
})


btn_submit.addEventListener('click', function(e){
  e.preventDefault();
  alternativaCorreta();


  setTimeout(function() {
    document.getElementById('formulario').submit();
  }, 3000);

  
})


  function deletarSelect(){
    var select = document.getElementById('selectAlternativaCorreta');
    var valorSelecionado = select.selectedIndex;   
    
    let stringId = 'input-resposta-';
    let id = stringId.concat(valorSelecionado);    
    let input = document.getElementById(id);    
    
    select.remove(valorSelecionado) 
    input.remove();

    ordernarIdInputs();        

  }

  function criaInput(){
    let input_resposta = document.getElementById('resposta');

    if (input_resposta.value.trim().length === 0) {
      // Não crie um input se o valor estiver vazio
      return;
    }

    let input = document.createElement('input');
    input.id = 'input-resposta-' + cont_id;
    input.type = 'hidden';
    input.name = 'respostas[]';
    input.value = input_resposta.value;

    div_inputs.appendChild(input);


    cont_id++;
    input_resposta.value = '';

    criaSelect();
  }

  function criaSelect(){
    let select = document.getElementById('selectAlternativaCorreta')
    let option = document.createElement('option')
    let arrayInputs = document.querySelectorAll('input')

    arrayInputs.forEach(element => {

      if(element.type == 'hidden' && element.name == 'respostas[]'){
        option.text = element.value;
        select.add(option);
      }
      ordernarIdInputs();
      
    });

  }


  function ordernarIdInputs(){
    let contador = 1;
    let inputs  = document.querySelectorAll('input');
    
    inputs.forEach(element => {
      if(element.type == 'hidden' && element.name == 'respostas[]'){          
        element.id = 'input-resposta-'.concat(contador);
        contador++;
      }
      
    }); 
  }


  function alternativaCorreta(){  

    let select = document.getElementById('selectAlternativaCorreta');
    let valorSelecionado = select.selectedIndex;
    
    
    let input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'alternativaCorreta';
    input.value = valorSelecionado;

    div_inputs.appendChild(input); 
    
   
  }