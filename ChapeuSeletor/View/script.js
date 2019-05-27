var pegada = []; //]= Array;

function pegada_add(angulo, direita, conta)
{
	var peg = document.createElement("DIV");
	if(direita)
		peg.className = "pegada_dir";
	else
		peg.className = "pegada_esq";
		
	var step = (-conta * 50)
	var posX = Math.round(-Math.cos(angulo * 3.1416 / 180)) * step + (screen.availWidth / 2); 
	var posY = Math.round(Math.sin(angulo * 3.1416 / 180)) * step + (screen.availHeight / 2);
	
	peg.style.left = posX + "px";
	peg.style.top = posY + "px";
	peg.style.transform = "rotate("+(-angulo + 90)+"deg)";
	peg.setAttribute('data-move','0');
	
	peg.id = 'pegada_'+conta;
	pegada.push(peg);
	document.getElementById('mapa_cel_sai').appendChild(peg);
	
	setTimeout("pegada_add("+angulo+", "+!direita+", "+(conta+1)+")", 200);
}

function pegada_move(conta, angulo)
{
	if(pegada[conta].dataset.move == '1')
		return;
	
	pegada[conta].dataset.move = '1';
	
	var posX = Math.round(-Math.cos(angulo * 3.1416 / 180)) * screen.availWidth; 
	var posY = Math.round(Math.sin(angulo * 3.1416 / 180)) * screen.availHeight;

	var pPosX = parseInt(pegada[conta].style.left);
	var pPosY = parseInt(pegada[conta].style.top);
	pegada[conta].style.left = (pPosX + posX) + "px";
	pegada[conta].style.top = (pPosY + posY) + "px";
}

function transita(mapa_id, angulo, entrada)
{
	//!Move uma célula de mapa para o centro da tela
	/*!Onde:<br>
	 * mapa - Id da célula de mapa que será transitada
	 * angulo - Ângulo do transito
	 * entrada (boolean) - Define se a célula está entrando (true) ou saindo (false) da tela
	*/
	
	var mapa = document.getElementById(mapa_id);
	if(!mapa)
		return;

	var posX = Math.round(-Math.cos(angulo * 3.1416 / 180)) * screen.availWidth; 
	var posY = Math.round(Math.sin(angulo * 3.1416 / 180)) * screen.availHeight;
	
	if(entrada) //move a célula que entra
	{
		mapa.style.left = "0px";
		mapa.style.top = "0px";
	}
	else //move a célula que sai
	{
		mapa.style.top = posY + "px";
		mapa.style.left = posX + "px";
	}
	
	//movimenta o background
	var fundo = mapa.parentNode;	
	var fPos = window.getComputedStyle(fundo, null).backgroundPosition;
	fPosX = parseInt(fPos.split(" ")[0]);
	fPosY = parseInt(fPos.split(" ")[1]);
	fundo.style.backgroundPosition = (fPosX + posX) + "px " + (fPosY + posY) + "px";
}

function troca_pergunta()
{
	//!Carrega uma nova celula de mapa com uma nova pergunta
	/*!
	 * Observação: <br>
	 * As direções aleatórias serão definidas por: <br>
	 * 0 - Leste <br>
	 * 1 - Nordeste <br>
	 * 2 - Norte <br>
	 * 3 - Noroeste <br>
	 * 4 - Oeste <br>
	 * 5 - Sudoeste <br>
	 * 6 - Sul <br>
	 * 7 - Sudeste <br>
	 */

	var sort = parseInt(Math.random() * 8);
	var angulo = sort * 45;
	 
	var x = screen.availWidth;
	var y = screen.availHeight;
	
	//destroi a célula que saiu
	var del_cel = document.getElementById('mapa_cel_sai');
	if(del_cel)
		del_cel.parentNode.removeChild(del_cel);

	//pega a célula anterior e troca o id para sair
	var sai_cel = document.getElementById('mapa_cel_entra');
	if(sai_cel)
	{
		sai_cel.id = "mapa_cel_sai";
		//sai_cel.style.opacity = "0";
	}
	
	//cria a célula que vai entrar
	var mapa_cel = document.createElement('DIV');
	mapa_cel.id = "mapa_cel_entra";
	mapa_cel.className = "mapa_cel";

	var posX = Math.round(Math.cos(angulo * 3.1416 / 180)) * x 
	var posY = Math.round(-Math.sin(angulo * 3.1416 / 180)) * y;
	mapa_cel.style.top = posY + "px";
	mapa_cel.style.left = posX + "px";

	mapa_cel.innerHTML =  "Nova pergunta";
	var mestra = document.getElementById('mestra').appendChild(mapa_cel);
	
	//movimenta as células
	setTimeout("transita('mapa_cel_sai', "+angulo+", false)", "100");
	setTimeout("transita('mapa_cel_entra', "+angulo+", true)", "100");
	
	pegada_add(angulo, true, -1);
}
