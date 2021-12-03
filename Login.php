<!DOCTYPE html>
<html>
<head>
<style>
body
{
  background-image: url("background2.jpg");
  background-color: #cccccc;
  height:600px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.rg-h2
{
  text-align: center;
  position: absolute;
  top: 16%;
  left: 57%;
  transform: translate(-100%,-100%);
  color: black;
  font-family:"Monotype Corsiva";
}
.rg-h1 
{
  text-align: center;
  position: absolute;
  top: 32%;
  left: 56%;
  transform: translate(-100%,-100%);
  color: black;
  font-family:"Kaufmann BT";
}
.rg-in
{
font-family:"Courier New";
font-size:30px;
color:#ccc;
}
input[type=text] 
{
    width: 50%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #000;
    color: darkgrey;
    border-radius:50px;
    font-size:20px;
    font-family:Comic Sans MS;
}
input[type=password] 
{
    width: 50%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #000;
    color: silver;
    border-radius:50px;
    font-size:20px;
    font-family:Comic Sans MS;
}
input[type=submit] 
{
    width: 50%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #000;
    color: silver;
    border-radius:70px;
    cursor:pointer;
    position:relative;
    left:-1%;
    top:5%;
    font-size:20px;
 }
.circle-text {
    display: table-cell;
    top:10%;
    left:19%;
    position:relative;
    height:400px;
    width:700px;
    text-align:center;
    vertical-align:middle;
    border-radius:100%;
    background: url("background2.jpg");
    opacity:0.7;
}
</style>
</head>

<title>User Login</title>
<body>
  <div class="rg-h2">
	<h2 style="font-size:40px">Welcome,Guest</h2>
  </div>
<div class="rg-h1">
	<h1 style="font-size:80px">LOGIN</h1>
  </div>

<form action="log.php" method="post">
<div class="rg-in"><div style="position:absolute; left:200px; top:200px;">

<div class="circle-text">
  	<label for="username"><b>Username:</label>
    	<input type="text" placeholder="Username" name="username" required><br></br>
	<label for="password">Password:</label>
 	<input type="password" placeholder="Enter Password" name="password" required><br></br>
	<input type="submit" value="Login" style="font-family:Arial;font-size:20px;">
</div>
</div>
</form>
</body>
</html>