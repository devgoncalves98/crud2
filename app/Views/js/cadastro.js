const inputs = document.querySelectorAll('input');
const salvarBtn = document.querySelector('#salvar');

function validacao(){
  alert("oi!!")
  inputs.forEach(input => {
    input.addEventListener('input', () => {
      if (inputs[0].value != '' && inputs[1].value != '' && inputs[2].value != '') {
        salvarBtn.removeAttribute('disabled');
      } else {
        salvarBtn.setAttribute('disabled', '');
      }
    });
});
}

salvarBtn.addEventListener('#salvar', validacao);