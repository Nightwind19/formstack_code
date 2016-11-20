<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Log In Screen</title>
<head>
  
  
	 
	<!--<script type="text/javascript"></script>-->
	
	
<script type="text/javascript">
			function addCode(key){
				var code = document.forms[0].code;
			if(code.value.length < 10){
				code.value = code.value + key;
				}
			if(code.value.length == 10){
				document.getElementById("message").style.display = "block";
				
				}
			}

		function submitForm(){
			document.forms[0].submit();
		}

		function emptyCode(){
			document.forms[0].code.value = "";
		}
		function cancelledLogin(){
			document.forms[0].code.value = "";
			
		}
</script>
		
<style>
#keypad {margin:left; margin-top:1px;}

	#keypad tr td {
		vertical-align:middle; 
		text-align:center; 
		border:0px solid #000000; 
		font-size:36px; 
		font-weight:bold; 
		width:85px; 
		height:65px; 
		cursor:pointer; 
		
		background-image: url("Images/KP_button1.png");
		color:#CCCCCC;}
	#keypad tr td:hover {background-color:#999999; color:#FFFF00;}
	body {
				background-image: url("Images/1024x768_BG.png");
				
				background-repeat: no-repeat;
				background-size: 100%;
			}
	form {
		position: absolute;
		top: 50%;
    left: 50%;
    margin-top: -190px;
    margin-left: -150px;
    
	}	
   	button {
		border: none;
		color: white;
	}
	p {
		text-align: center;
		color: white;
		font-size: 22pt;
	}
	input
	{
		border: none;
		color: white;
	}
	
</style>

<!--adds functionality to the code-->


</head>
<body >

	
		
		<form action="PHPfile/checkLogIn.php"  method="post">
		     <p>LOG IN</p>         
		   <input type="text" name="code" id="textPIN" value="" maxlength="10" class="display" readonly="readonly"  style="background-image: url(Images/Long_Button.png); border: none; height:27px; font-size: 22pt; color:#FFFFFF;" size="17" >
				<p id="message"></p>
			<table id="keypad" cellpadding="5" cellspacing="3">
				<tr>
					<td onclick="addCode('1');">1</td>
					<td onclick="addCode('2');">2</td>
					<td onclick="addCode('3');">3</td>
				</tr>
				<tr>
					<td onclick="addCode('4');">4</td>
					<td onclick="addCode('5');">5</td>
					<td onclick="addCode('6');">6</td>
				</tr>
				<tr>
					<td onclick="addCode('7');">7</td>
					<td onclick="addCode('8');">8</td>
					<td onclick="addCode('9');">9</td>
				</tr>
				<tr>
					<td onclick="emptyCode();"><<</td>
					<td onclick="addCode('0');">0</td>
					<td onclick="addCode('#');">#</td>
				</tr>
			</table>
			<br>
		   <input type="submit" onclick="dropDownBars()" value="ENTER" style="background: url(Images/Button1.png); width:298px; height:35px; font-size: 22pt;"><br><br>
		    <br>
		   <button type="button" onclick="cancelledLogin()" style="background: url(Images/Button1.png); width:298px; height:35px; font-size: 22pt;">CANCEL</button>
		</form>
		
		
		
		
</body>
</html>
