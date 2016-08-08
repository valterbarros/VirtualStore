window.addEventListener("load", validaBusca); /*Aqui eu "Starto" a função sempre que a pagina carrega*/
window.addEventListener("load", playPause); /*Aqui eu "Starto" a função sempre que a pagina carrega*/

function validaBusca(){ /*Precisei colocar tudo dentro de um função pois os comando nunca eram chamados quando estavam "soltos"*/
    subm = document.querySelector('#form-busca');
    subm.onsubmit = function() {
    					if (document.querySelector("#q").value == '') {
    						document.querySelector('#form-busca').style.background = 'red';
    				return false;
    					}     
					}
}

var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;

/*trocar banner principal*/
function trocaBanner() {
      /*(0)        (0) + (1) = (1)  % 2 = (1)*/
  bannerAtual = (bannerAtual + 1) % 2;
  document.querySelector('.destaque img').src = banners[bannerAtual];
}
var timer = setInterval(trocaBanner, 4000); //A função setInterval retorna um objeto importante para o controle.


function playPause(){ /*Botão Play/Pause que serve para parar a troca de banner principal*/
	var controle = document.querySelector('.pause'); /*Variável controle recebe o valor do botão*/

	controle.onclick = function() { /*função que vai ser chamada quando clicar no "Pause" ou "Play"*/
	  if (controle.className == 'pause') { /*verifica se a class é igual a Pause pois se for ele troca o class para Play*/
	    clearInterval(timer); /*Função que serve para parar a troca de banner*/
	    controle.className = 'play'; /*Aqui o botão recebe o estilo de Play, pois sua class agora é "play"*/
	  } else { /*Entra aqui quando o banner estiver trocando*/
	    timer = setInterval(trocaBanner, 4000); /*o objeto "timer" retornado pela função "setInterval" recebe um novo valor*/
	    controle.className = 'pause'; /*Aqui o botão recebe o estilo de "pause"*/
	  }

	  return false;
	};
}

// ready para sempre que o documento carregar
$( document ).ready(function() {
	//adicionar essa classe que mostra o botão
	$('.novidades').addClass('painel-compacto');

	//Removendo a classe painel-compacto e dessa forma mostrando todos os produtos
	$('.novidades button').click(function() {
	  $('.novidades').removeClass('painel-compacto');
	}); 

	$('.mais-vendidos').addClass('painel-compacto');

	$('.mais-vendidos button').click(function() {
	  $('.mais-vendidos').removeClass('painel-compacto');
	}); 
});


