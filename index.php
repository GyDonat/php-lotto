<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Ez az index.php
        <?php
            include("fgv.php");
            $sorsolt= sorsolas();
            var_dump($sorsolt);
            echo '<table border="1">';
	
	for($i=1; $i<=$szamokszama; $i++)
	{
		if($i%$oszlop==1)
		{
			echo "<tr>";
		}
		if(in_array($i, $huzott))
		{
			$hatterszin="#FF0000";
		}
		else
		{
			$hatterszin="#FFFFFF";
		}
		echo "<td bgcolor=\"$hatterszin\" >";
			echo $i;
		echo "</td>";
		if($i%$oszlop==0)
		{
			echo "</tr>\n";
		}
	}
	
	echo "</table>";   
        ?>
    </body>
</html>
