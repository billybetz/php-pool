<?php 

class Jaime extends Lannister 
{
	public $getPerso = 2;

	function sleepWith($name)
	{
		if (isset($name->getPerso))
		{
			if ($name->getPerso == 1)
				echo "With pleasure, but only in a tower in Winterfell, then.\n";
			else if ($name->getPerso == 3)
				echo "Not even if I'm drunk !\n";
		}
		else
			echo "Let's do this.\n";
	}	

}

 ?>