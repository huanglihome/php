<?php

$name=$_POST["name"];
$number=$_POST["number"];
$class=$_POST["class"];
$tel=$_POST["tel"];
$qq=$_POST["qq"];
$dormitoty=$_POST["dormitoty"];

 $link = new mysqli ("localhost","root","411411411","NSW2015");
   $link->set_charset('utf8');
$rs=$link->query("INSERT INTO biao(name,number,class,tel,qq,dormitoty) values ('$name','$number','$class','$tel','$qq','$dormitoty')");
if(!$rs)
{echo" error~";}
else
{echo" welcoem to NSW!";}

?>