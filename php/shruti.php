<html>
<body>
	Prime Nos in the range <?php echo "<br";
	echo $_POST["N1"]." and ",$_POST["N2"], "<br>";
	$x=$_POST["N1"];
	$y=$_POST["N2"];

	while($x<$y)
	{
		$flag=0;
		for($i=2;$i<=$x/2;$i++)
		{
			if(($x%$i)==0)
			{
				$flag=1;
				break;
			}
		}
		if($flag==0 and $x!=1)
		{
			echo $x.",";
			$x++;
		}
		$x++;
	}
	?>
</body>
</html>
