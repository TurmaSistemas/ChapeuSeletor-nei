<HTML>
	<HEAD>
		<TITLE> Chapéu seletor </TITLE>
		<LINK rel='stylesheet' href='View/padrao.css' />
		<SCRIPT type='text/javascript' src='View/script.js'> </SCRIPT>
	</HEAD>
	<BODY>
		<DIV class='mestra' id='mestra' onclick='troca_pergunta()'>
			<DIV class='mapa_cel' id='mapa_cel_entra'>
			<?php
				require_once(dirname(__FILE__)."/View/mapa.class.php");
				$mapa = new mapa(1);
				$mapa->draw();
			?>
			</DIV>
		</DIV>
	</BODY>
</HTML>
