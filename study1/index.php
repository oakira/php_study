<?php
	$author = "Alfred E Newman";
	
	$out = <<<_END
	This is a Headline

	This is the first line.
	This is the second.
	- Written ny $author.
	_END;
	echo $out;
	echo "This is line".__LINE__."of file".__FILE__;
	var_dump(__LINE__);

	
?>