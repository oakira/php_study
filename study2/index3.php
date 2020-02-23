<?php
$object = new Tiger();
echo "Tiger have...<br>";
echo "Fur: " . $object->fur . "<br>";
echo "Scripes: " . $object->stripes;

class Wildcat
{
	public $fur;
	public function __construct()
	{
		$this->fur = "TRUE";
	}
}
class Tiger extends Wildcat
{
	public $stripes;

	public function __construct()
	{
		parent::__construct();
		$this->stripes = "TRUE";
	}
	final public function copylight()
	{
		echo "This class was written by Joe Smith";
	}
}
