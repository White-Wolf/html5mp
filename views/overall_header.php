<?php function render() {
	foreach($this as $key => $value)
	{
		if($key != "_useViewStream" && $key != "_useStreamWrapper")
		{
			$$key = $value;
		}
	}
?>
<!doctype html>
<html>
<head>
	<title><?php $title;?> :: WhiteWolf's html5 Media Player</title>
	
	<script language='javascript' src='js/jquery-1.8.1.js'></script>
	<script language='javascript' src='js/app.js'></script>
</head>
<body>
<div class='content'>
<?php }?>