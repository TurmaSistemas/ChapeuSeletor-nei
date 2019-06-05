<?php
class Alternativa
{
	private $dao;
	private $helper;
	
	public function __construct()
	{
		require_once(dirname(__FILE__)."/../dal/helper.class.php");
		require_once(dirname(__FILE__)."/../dal/dao.class.php");
		require_once(dirname(__FILE__)."/../model/Alternativa.class.php");
			
		$this->dao = new Dao();
		$this->helper = new Helper();
	}
	
	public function draw()
	{
		echo "
		<TABLE style='width: 100%'>
			<TR>
				<TD style='width:80%'> ( ) </TD>
			</TR>";
		echo "
		</TABLE>";
	}
}

?>
