<html>
<head>
  <style>
	table {
    border-collapse: collapse;
    width: 100%;
}

  th, td {
    text-align: left;
    padding: 8px;

}
# id{
	color:red;
}

 tr:nth-child(even){background-color: #f2f2f2}
  </style>
</head>

<?php
if(isset($_POST['m1']))
{
	$con=new mysqli("localhost","root","","vini");
	if($con==true)
	{
		echo "connected";
	}
$mon=$_POST["m1"];
if($mon=='jan'||$mon=='mar'||$mon=='may'||$mon=='jul'||$mon=='aug'||$mon=='oct'||$mon=='dec')
{
  echo '<div style="overflow-x:auto;">
  
  <table border="1px">
    <tr>';
	
	for($i=1;$i<=31;$i++)
	{
		echo "<td>$i</td>";
    }
	echo"</tr><tr>";
		$ct=0;
		$dt=0;
		$et=0;
		$ft=0;
		$gt=0;
	for($i=1;$i<=31;$i++)
	{
		if($i%5==0)
		{
			$ct++;
			echo "<td style="."background-color:red"."></td>";
		}
	    else if($i%7==0)
		{
			$dt++;
			echo "<td style="."background-color:yellow"."></td>";
		}
		else if($i%9==0)
		{
			$et++;
			echo "<td style="."background-color:pink"."></td>";
		}
	   else if($i%4==0)
	   {	
			$ft++;
			echo "<td style="."background-color:blue"."></td>";
	   }
	   else
	   {
		   $gt++;
			echo "<td style="."background-color:black"."></td>";
	   }
	
    }
   echo "</tr></table></div>";
}
if($mon=='feb')
{
  echo '<div style="overflow-x:auto;">
  <table border="1px">
    <tr>';
	for($i=1;$i<=28;$i++)
	{
	     echo "<td>$i</td>";
    }
	echo"</tr><tr>";
		$ct=0;
		$dt=0;
		$et=0;
		$ft=0;
		$gt=0;
	for($i=1;$i<=28;$i++)
	{
		if($i%5==0)
		{
			$ct++;
			echo "<td style="."background-color:red"."></td>";
		}
		else if($i%7==0)
		{
			$dt++;
			echo "<td style="."background-color:yellow"."></td>";
		}
		else if($i%9==0)
		{
			$et++;
			echo "<td style="."background-color:pink"."></td>";
		}
	  	else if($i%4==0)
		{
			$ft++;
			echo "<td style="."background-color:blue"."></td>";
		}
	    else
		{
			$gt++;
			echo "<td style="."background-color:black"."></td>";
		}
    }
   echo "</tr></table></div>";
}
if($mon=='apr'||$mon=='jun'||$mon=='sep'||$mon=='nov')
{
  echo '<div style="overflow-x:auto;">
  <table border="1px">
    <tr>';
	for($i=1;$i<=30;$i++)
	{
		echo "<td>$i</td>";
    }
	echo"</tr><tr>";
		$ct=0;
		$dt=0;
		$et=0;
		$ft=0;
		$gt=0;
	for($i=1;$i<=30;$i++)
	{
		if($i%5==0)
		{
			$ct++;
			echo "<td style="."background-color:red"."></td>";
		}
		else if($i%7==0)
		{
			$dt++;
			echo "<td style="."background-color:yellow"."></td>";
		}
		else if($i%9==0)
		{	
			$et++;
			echo "<td style="."background-color:pink"."></td>";
		}
	  	else if($i%4==0)
		{
			$ft++;
			echo "<td style="."background-color:blue"."></td>";
		}
	    else
		{
			$gt++;
			echo "<td style="."background-color:black"."></td>";
		}
    }
   echo "</tr></table></div>";
}
	$fn=$_POST['t2'];
	$mn=$_POST['m1'];
	$sql="INSERT INTO attendance VALUES ('$fn','$mn','$ct','$dt','$et','$ft','$gt')";
	if($con->query($sql)==true)
		echo "values are connected";
	else
		echo "error:".$sql."<br>".$con->error;
	$sql1="select * from attendance where fname='$fn'";
	$result=$con->query($sql1);
	if($result->num_rows>0)
	{
		echo "<table border=1><tr><td>fname</td><td>month</td><td>late</td><td>absent</td><td>taken first half leave</td><td>taken second half leave</td><td>worked over time</td></tr>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>".$row['fname']."</td><td>".$row['month']."</td><td>".$row['late']."</td><td>".$row['absent']."</td>"."<td>".$row['taken first half leave']."</td><td>".$row['taken second half leave']."</td><td>".$row['worked over time']."</td></tr>";
		}
  }
$con->close();
}
?>
</html>