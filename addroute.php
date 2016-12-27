
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addroom"]["type"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the Bus type");
  return false;
  }
var b=document.forms["addroom"]["route"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the Route");
  return false;
  }
 var c=document.forms["addroom"]["seat"].value;
if (c==null || c=="")
  {
  alert("Pls. enter the Seat Number");
  return false;
  }
var d=document.forms["addroom"]["price"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Price");
  return false;
  }
}
</script>

<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>

<form action="addexec.php" method="post">
	Bus Type:<br><input type="text" name="type" class="ed"><br>
	Route:<br><input type="text" name="route" class="ed"><br>
	Price:<br><input type="text" name="price" class="ed"><br>
	Seat Number:<br><input type="text" name="seat" class="ed"><br>
	Time:<br><input type="text" name="time" class="ed" placeholder="10:30am"><br>
	<input type="submit" value="Save" id="button1">
</form>
