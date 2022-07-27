<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../data/css/style3.css">
</head>

<section>
<body style="background-color:#a1a7f6;">
<div class="header">
  <h1><b>ABC Management System</b></h1><br>
  <h2>We create future</h2>

</div>
</section>

<section>
<div class="nav">
  <a href="#news">Home</a>
  <a href="#contact">About US</a>
  <a href="#about">Shop</a>
</div>
<br><br>

<div class="box">
	Registration Form
</div>
<br>
<hr>
<br>

</section>

<form action="" method="POST">
    <table>
        <tr>
        <td>First name:</td>
	<td><input type="text" name="firstName"></td>
</tr>
	<tr>
    <td>Last name:</td>
	<td><input type="text" name="lastName"></td>
</tr>
	<tr>	  
  <td>Age:</td>
  <td><input type="text" name="age"></td>
</tr>
  <tr >
  <td>Designation:</td>
  <td>
  <input type="radio" name="des" value="jp" checked>Junior programer
  <input type="radio" name="des" value="sp">Senior programer
  <input type="radio" name="des" value="pl">Project lead
</td>
</tr>
<tr>
  <td>Language skill :</td>
  <td>
  JAVA<input type="checkbox" name="lan" value="PHP" checked />
  C#<input type="checkbox" name="lan" value="C#"/>
</td>
</tr>
<tr>
    <td>Email:</td>
	<td><input type="text" name="email"></td>
</tr>
<tr>
    <td>Password:</td>
	<td><input type="text" name="pass"></td>
</tr>
<tr>
<td>Please choose a file:</td>
    <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
</tr>
</table>
</form>
 
<br>
<div class="body">
<button>Submit</button>
<button>Reset</button>
</div>



</body>
</html>