<html>
<head>
        <title>Suduko solver test</title>
</head>

<body bgcolor="cyan">
<font face="Tahoma, Verdana, Arial">
<?php include('header.php'); ?>

<p>

<p>
Enter the numbers you already have on your Sudoku grid, and then press 
<b>Solve my Sudoku!</b>.
<p>

<center>

<table>
<tr>

<td>
<!-- OTHER STUFF HERE -->
</td>

<td>

<form action="solve.php" method="post">

<input type="text" name="0,0" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="0,1" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="0,2" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="0,3" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="0,4" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="0,5" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="0,6" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="0,7" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="0,8" size="1" maxlength="1" class="box-10" value=""/>
<br/><input type="text" name="1,0" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="1,1" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="1,2" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="1,3" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="1,4" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="1,5" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="1,6" size="1" maxlength="1" class="box-10" value="""/>
<input type="text" name="1,7" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="1,8" size="1" maxlength="1" class="box-10" value=""/>
<br/><input type="text" name="2,0" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="2,1" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="2,2" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="2,3" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="2,4" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="2,5" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="2,6" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="2,7" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="2,8" size="1" maxlength="1" class="box-10" value=""/>
<br/><input type="text" name="3,0" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="3,1" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="3,2" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="3,3" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="3,4" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="3,5" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="3,6" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="3,7" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="3,8" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<br/><input type="text" name="4,0" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="4,1" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="4,2" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="4,3" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="4,4" size="1" maxlength="1" class="box-10" value="""/>
<input type="text" name="4,5" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="4,6" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="4,7" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="4,8" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<br/><input type="text" name="5,0" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="5,1" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="5,2" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="5,3" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="5,4" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="5,5" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="5,6" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="5,7" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="5,8" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<br/><input type="text" name="6,0" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="6,1" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="6,2" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="6,3" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="6,4" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="6,5" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="6,6" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="6,7" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="6,8" size="1" maxlength="1" class="box-10" value=""/>
<br/><input type="text" name="7,0" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="7,1" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="7,2" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="7,3" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="7,4" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="7,5" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="7,6" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="7,7" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="7,8" size="1" maxlength="1" class="box-10" value=""/>
<br/><input type="text" name="8,0" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="8,1" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="8,2" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="8,3" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="8,4" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="8,5" size="1" maxlength="1" class="box10" value="" style="background-color: #C0C0C0"/>
<input type="text" name="8,6" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="8,7" size="1" maxlength="1" class="box-10" value=""/>
<input type="text" name="8,8" size="1" maxlength="1" class="box-10" value=""/>

<p>
<input type="submit" value="Solve my Sudoku!">
<p>
<i>Please be patient while your puzzle is solved. This may take up to 20 
seconds!</i>
</form>

</td>
<td>

<!-- ADS HERE -->

</td>
</tr>
</table>

</center>

</body>

</html>