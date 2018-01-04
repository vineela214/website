<html>
<style>
body {
    background-color: lightblue;
}

th   {
    color: black;
    text-align:center;
}

td{
	color:DarkSlateBlue;
	font-family:Monospace;
	font-size:20px;
}
tr{
	color:LightGreen;
	font-family:verdena;
	font-size:20px;
}
# result table {
    border-collapse: collapse;
    width: 100%;
}

# result th, td {
    text-align: left;
    padding: 8px;

}

 #result tr:nth-child(even){background-color: #f2f2f2}
</style>
<head>
<title>monthly attendence</title> 
</head>
<body>
<form name="f1" method="POST" action="month1.php">
<table cellspacing="0"border="0"cellpadding="15">
<tr>
<td><p>organisation:<input type="text"name="t2"value="svec"size="20"value="SVEC"maxlength="10"disabled></input></p></td>
<td><p>ename:<input type="text"name="t2"size="30"maxlength="10"></input></p></td>
</tr>
<tr>
<td><p>dept:<input type="text"name="t2"value="IT"size="10"maxlength="10"value="IT"disabled></input></p></td>
<td><p>permonth:
<select name="m1" class="m1" id="m1">
  <option value="jan"id="i1">Jan</option>
  <option value="feb"id="i2">feb</option>
  <option value="mar"id="i3">Mar</option>
  <option value="apr"id="i4">Apr</option>
  <option value="may"id="i5">may</option>
  <option value="jun"id="i6">jun</option>
  <option value="jul"id="i7">jul</option>
  <option value="aug"id="i8">aug</option>
  <option value="sep"id="i9">sep</option>
  <option value="oct"id="i10">oct</option>
  <option value="nov"id="i11">nov</option>
  <option value="dec"id="i12">dec</option>
</select>
</p>
</td>
</tr>
</table>
<p><input type="submit" name="submit"></input></p>
<p><input type="reset" name="reset"></input></p>
<br>
</form>
<div id="result">

</div>

<br>

<table border="1" cellspacing="0" cellpadding="10">
<tr>
<th>
  color
</th>
<th>
  description
</th>
</tr>
<tr>
<td><input type="text" style="background-color:red;width:15px"></input>
</td>
<td>late</td>
<tr>
<td><input type="text" style="background-color:yellow;width:15px"></input>
</td>
<td>absent</td>
<tr>
<td><input type="text" style="background-color:pink;width:15px"></input>
</td>
<td>taken first half leave</td>
<tr>
<td><input type="text" style="background-color:blue;width:15px"></input>
</td>
<td>taken second half leave</td>
<tr>
<td><input type="text" style="background-color:black;width:15px"></input>
</td>
<td>worked over time</td>
</tr>
</table>
</body>
</html>