<?php 

class Tyrion extends Lannister {

	public $getPerso = 3;

	function sleepWith($name)
	{
		if (isset($name->getPerso))
		{
			if ($name->getPerso == 1)
				echo "Not even if I'm drunk !\n";
			else if ($name->getPerso == 2)
				echo "Not even if I'm drunk !\n";
		}
		else
			echo "Let's do this.\n";
	}
}

 ?>