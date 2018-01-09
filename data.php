<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$GOLOBAL['fnumber']=$_REQUEST['fname'];
	$GOLOBAL['snumber']=$_REQUEST['lname'];
	
if(empty($GOLOBAL['fnumber'])||empty($GOLOBAL['snumber']))
	{
		echo "Name is empty";
		
	}else
	{
		if(isset($_REQUEST['add']))
	
	{
	$GOLOBAL['addition']=$GOLOBAL['fnumber']+$GOLOBAL['snumber'];
	echo "Answer=".$GOLOBAL['fnumber']."+".$GOLOBAL['snumber']."=".$GOLOBAL['addition'];
	}	
	
	else 
		if(isset($_REQUEST['mul']))

	
	{
	$Multiplication=$GOLOBAL['fnumber']*$GOLOBAL['snumber'];
	echo $GOLOBAL['fnumber']."*".$GOLOBAL['snumber']."=".$Multiplication;
	}
	else 
		if(isset($_REQUEST['sub']))

	
	{
	$subtraction=$GOLOBAL['fnumber']-$GOLOBAL['snumber'];
	echo $GOLOBAL['fnumber']."-".$GOLOBAL['snumber']."=".$subtraction;
	}
	else 
		if(isset($_REQUEST['div']))

	
	{
	$division=$GOLOBAL['fnumber']/$GOLOBAL['snumber'];
	echo $GOLOBAL['fnumber']."/".$GOLOBAL['snumber']."=".$division;
	}
	}
	
}
?>