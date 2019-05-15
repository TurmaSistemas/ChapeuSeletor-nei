<?php

class mapa
{
	public function __construct($id)
	{
	}
	
	public function draw()
	{
		echo "
		<DIV style='height: 100%, width: 100%'>
			<DIV id='pergunta' class='pergunta'> Qual sua reação frente a um dementador? </DIV>
			<DIV id='alternativa' class='alternativa'>
				<TABLE style='border-collapse: collapse; font-size: inherit; text-align: inherit; width: 100%'>
					<TR>
						<TD style='width: 50%'> ( ) Correria </TD>
						<TD style='width: 50%'> ( ) Enfrentaria </TD>
					</TR>
					<TR>
						<TD style='width: 50%'> ( ) Pediria ajuda </TD>
						<TD style='width: 50%'> ( ) Entraria em pânico </TD>
					</TR>
				</TABLE>
			</DIV>
			<DIV id='proximo' class='proximo'> </DIV>
		</DIV>";
	}
}

?>
