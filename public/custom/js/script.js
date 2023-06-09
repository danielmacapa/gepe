////////// Rolador de Dados

function rollDice() {
  return Math.floor(Math.random() * 6) + 1;
}

function rollMultipleDice(numDice, numFaces) {
  const results = [];

  for (let i = 0; i < numDice; i++) {
    const roll = rollDice();
    results.push(roll);
  }

  return results;
}

function rollingDices(campo) {
  const campoId = 'campo' + campo;
  const numDiceInput = document.getElementById(campoId);
  const numDice = parseInt(numDiceInput.value, 10);
  const numFaces = 6;

  const rolls = rollMultipleDice(numDice, numFaces);
  const resultadoElement = document.getElementById('resultado');
  resultadoElement.innerHTML = '';

  for (const roll of rolls) {
    const diceFaceImage = document.createElement('img');
    diceFaceImage.classList.add('dice-face');
    diceFaceImage.src = `/custom/img/dices/face${roll}.png`;
    resultadoElement.appendChild(diceFaceImage);
  }
}

// ///////// Soma dos atributos

// $(document).ready(function() {
//     $('.campo').change(function() {
//         $.post($('#meuForm').attr('action'), $('#meuForm').serialize(), function(data) {
//             var soma = data.soma;
//             $('#soma').val(soma);

//             if (soma == 12) {
//                 $('#soma').removeClass('vermelho');
//                 $('#soma').addClass('laranja');
//             } else if (soma > 12) {
//                 $('#soma').removeClass('vermelho');
//                 $('#soma').removeClass('laranja');
//             } else {
//                 $('#soma').removeClass('laranja');
//                 $('#soma').addClass('vermelho');
//             }
//         });
//     });
// });
