<?php
class Pergunta
{
	private $dao;
	private $helper;
	private $pergunta;
	
	public function __construct($pergunta)
	{
		require_once(dirname(__FILE__)."/../dal/helper.class.php");
		require_once(dirname(__FILE__)."/../dal/dao.class.php");
		require_once(dirname(__FILE__)."/../model/Pergunta.class.php");
			
		$this->dao = new Dao();
		$this->helper = new Helper();
		$this->pergunta = $pergunta;
	}
	
	public function draw()
	{
		echo"
		<TABLE style='width: 100%'">
			echo"
			<TR>
				<TD style='width:80%'>.$pergunta->get_pergunta().</TD>
			</TR>";
		echo "
		</TABLE>";

	}
}

?>
