<?php
class Targaryen
{
	public function resistsFire()
	{
		return False;
	}

	public function getBurned()
	{
		if (static::resistsFire() == TRUE)
			return "emerges naked but unharmed";
		else
			return "burns alive";
	}
}
?>
