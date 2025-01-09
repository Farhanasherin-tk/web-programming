<html>
<head>
<title>cricket</title>
</head>
<body>
<h2>Indian Cricket Players</h2>
<?php{
$players=array(
"[s1]"=>"Virat Kohli",
"[s2]"=>"Ms.Dhoni",
"[s3]"=>"Sachin",
"[s4]"=>"Rohith Sharma");
echo"<html><table>";
echo"<tr><th>S.No</th><th>Player</th></tr>";
foreach ($player as $x=>$player){
   echo"<tr><td>($x+1)</td><td>$player</td></tr>";}
echo"</table></html>";
?>
</body>
</html>

