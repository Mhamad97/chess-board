<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<style type="text/css">

.body{
    background-color: #2e8b57;
}	

.bcell{
	background-color: black;
    margin: 4px;
    
    width: 15vh;
    height:15vh;
}
.wcell{
	background-color: white;
	margin: 4px;
	
	width: 15vh;
	height:15vh;
}

</style>
<body class="body">
   
<table  style="width: 1000px;height: 400px; " >
	
  <?php

      for($i=1;$i<=8;$i++)
      {
        $letters = array("A", "B", "C","D","E", "F", "G","H");
          echo "<tr>";
          for($j=0;$j<8;$j++)
          {
          $gshty=$i+$j;
          if($gshty%2==0)
          {
          echo "<td class='bcell' style='color:white;'>".$i.$letters[$j]."</td>";
          }
          else
          {
          echo "<td class='wcell' style='color:black;'>".$i.$letters[$j]."</td>";
          }
          }
          echo "</tr>";
    }
          ?>

</table>
</body>
</html>