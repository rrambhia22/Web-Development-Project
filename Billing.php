<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<style>
body
{
  background-image: url("bookbackground6.jpg");
  background-color: #cccccc;
  height:4000px;
  background-position: center;
  background-size: cover;
  position: relative;
}
.rg-h2
{
  text-align: center;
  position: absolute;
  top:200px;
  left:59%;
  transform: translate(-100%,-100%);
  color: white;
  font-family:"Monotype Corsiva";
  
}
.rg-h1 
{
  text-align: center;
  position: absolute;
  top:100px;
  left:65%;
  transform: translate(-100%,-100%);
  color: #555;
  font-family:"Monotype Corsiva";
  text-shadow: 1px 1px 2px white, 0 0 25px blue, 0 0 5px black;
}
/*.footer
{
  text-align: center;
  position: absolute;
  top:600px;
  left:66%;
  transform: translate(-100%,-100%);
  color: white;
  font-family:"Monotype Corsiva";
}*/
#books {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:70%;
    position:relative;
    top:200px;
    font-weight:bold;
    color:white;
    text-align:center;
}

#books td, #books th {
    border: 1px solid #ddd;
    padding: 8px;
}

#books tr:nth-child(even){background-color:#5555;}

#books tr:nth-child(odd){background-color:#5555;}

#books th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: black;
    color: white;
    font-weight:bold;
}
.style
{
	position:relative;
	top:200px;
}
</style>
</head>
<title>The Readers Stop</title>
<body style="overflow:hidden">
<div class="rg-h1">
		<h1 style="font-size:50px">THE READERS STOP</h1>
	
</div>	
	
<div class="rg-h2">
		<h1 style="font-size:60px">CASH BILL</h1>
</div>
<center><table id="books"></center>
<tr>
<th>BOOK NAME</th>
<th>PRICE</th>
</tr>
<div>
	<?php
	if(isset($_GET["choice"]))
	{
		$book=$_GET["choice"];
		$c=count($book);
		$price=0.0;
	for($i=0;$i<$c;$i++)
	{
		if($book[$i]==1)
		{
			$price=$price+400;
			echo"<tr><td>HARRY POTTER</td>";
			echo"<td>400</td>";
		}
		if($book[$i]==2)
		{
			$price=$price+300;
			echo"<tr><td>BEYOND THE NIGHT</td>";
			echo"<td>300</td>";
		}
		if($book[$i]==3)
		{
			$price=$price+550;
			echo"<tr><td>PERFECT DUTCH</td>";
			echo"<td>550</td>";
			
		}
		if($book[$i]==4)
		{
			$price=$price+600;
			echo"<tr><td>R.R.MARTIN</td>";
			echo"<td>600</td>";
		
		}
		if($book[$i]==5)
		{
			$price=$price+300;
			echo"<tr><td>LOVESICK BRAVES</td>";
			echo"<td>300</td>";
			
		}
		if($book[$i]==6)
		{
			$price=$price+550;
			echo"<tr><td>THE PRICE OF DAWN</td>";
			echo"<td>550</td>";
					
		}
		if($book[$i]==7)
		{
			$price=$price+700;
			echo"<tr><td>LORI FOSTER</td>";
			echo"<td>700</td>";
			
		}
		if($book[$i]==8)
		{
			$price=$price+500;
			echo"<tr><td>WHY WE LOVE</td>";
			echo"<td>500</td>";
		}
		if($book[$i]==9)
		{
			$price=$price+200;
			echo"<tr><td>HENRY CLAY</td>";
			echo"<td>200</td>";
			
		}
		if($book[$i]==10)
		{
			$price=$price+800;
			echo"<tr><td>AMATEUR</td>";
			echo"<td>800</td>";
			
		}
		if($book[$i]==11)
		{
			$price=$price+600;
			echo"<tr><td>BEAUTIFUL HERO</td>";
			echo"<td>600</td>";
			
		}
		if($book[$i]==12)
		{
			$price=$price+400;
			echo"<tr><td>THE TENTH ISLAND</td>";
			echo"<td>400</td>";
			
		}
		if($book[$i]==13)
		{
			$price=$price+350;
			echo"<tr><td>SHEETS</td>";
			echo"<td>350</td>";
			
		}
		if($book[$i]==14)
		{
			$price=$price+500;
			echo"<tr><td>BATMAN</td>";
			echo"<td>500</td>";
			
		}
		if($book[$i]==15)
		{
			$price=$price+600;
			echo"<tr><td>GIANT DAYS</td>";
			echo"<td>600</td>";
			
		}
		if($book[$i]==16)
		{
			$price=$price+550;
			echo"<tr><td>CAPTAIN MARVEL</td>";
			echo"<td>550</td>";
			
		}
		if($book[$i]==17)
		{
			$price=$price+400;
			echo"<tr><td>THE SPACE BARONS</td>";
			echo"<td>400</td>";
			
		}
		if($book[$i]==18)
		{
			$price=$price+200;
			echo"<tr><td>BIG DATA</td>";
			echo"<td>200</td>";
			
		}
		if($book[$i]==19)
		{
			$price=$price+450;
			echo"<tr><td>GIRLS WHO CODE</td>";
			echo"<td>450</td>";
					
		}
		if($book[$i]==20)
		{
			$price=$price+600;
			echo"<tr><td>INVENTION BY DESIGN</td>";
			echo"<td>600</td>";
					
		}
		if($book[$i]==21)
		{
			$price=$price+750;
			echo"<tr><td>SOCIAL ENGINEER</td>";
			echo"<td>750</td>";
			
		}
		if($book[$i]==22)
		{
			$price=$price+400;
			echo"<tr><td>MICROWAVE & RADAR</td>";
			echo"<td>400</td>";
		}
		if($book[$i]==23)
		{
			$price=$price+650;
			echo"<tr><td>SYSTEMS ENGINEERING</td>";
			echo"<td>650</td>";
			
		}
		if($book[$i]==24)
		{
			$price=$price+300;
			echo"<tr><td>RFCIRCUIT DESIGN</td>";
			echo"<td>300</td>";
			
		}
		if($book[$i]==25)
		{
			$price=$price+450;
			echo"<tr><td>FALLEN</td>";
			echo"<td>450</td>";
			
		}
		if($book[$i]==26)
		{
			$price=$price+600;
			echo"<tr><td>THE RITUAL</td>";
			echo"<td>600</td>";
		
		}
		if($book[$i]==27)
		{
			$price=$price+200;
			echo"<tr><td>DARK FOREST</td>";
			echo"<td>200</td>";
			
		}
		if($book[$i]==28)
		{
			$price=$price+360;
			echo"<tr><td>DRACULA</td>";
			echo"<td>360</td>";
			
		}
		if($book[$i]==29)
		{
			$price=$price+600;
			echo"<tr><td>POEMS OF THE SEA</td>";
			echo"<td>600</td>";
			
		}
		if($book[$i]==30)
		{
			$price=$price+700;
			echo"<tr><td>MILK & HONEY</td>";
			echo"<td>700</td>";
		
		}
		if($book[$i]==31)
		{
			$price=$price+500;
			echo"<tr><td>WAR POEMS</td>";
			echo"<td>500</td>";
			
		}
		if($book[$i]==32)
		{
			$price=$price+450;
			echo"<tr><td>THE SUN & HER FLOWERS</td>";
			echo"<td>450</td>";
		}	
	}
		echo "<tr><td>FINAL AMOUNT : ".$price."</td></tr><br>";	
	}
	else
		{
			echo"PLEASE SELECT A BOOK TO PURCHASE";
		}
	
	?>
</table>
</div>
<!--<div class= "footer">
<p style="font-size:43px;font-family:Forte;color:white">Thankyou for purchasing.  Visit Again!</p>
</div>--!>
</body>
</html>


