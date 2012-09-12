<?php function render() {
	foreach($this as $key => $value)
	{
		if($key != "_useViewStream" && $key != "_useStreamWrapper")
		{
			$$key = $value;
		}
	}
?>
</content>
</body>
</html>
<?php }?>