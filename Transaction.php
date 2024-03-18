<!DOCTYPE html>
<html>

<head>

	<title>Nexus Bank</title>

	<style>
		ul.menu{
			list-style-type: none;
			margin:0px;
			padding:-10px;
			width: device-width;
			height: auto;
			overflow: hidden;
			background-color: white;
		}	
	
		.img1{
		    background-size:cover;
			background-repeat:no-repeat;
			width:100%;
			height:auto;
			margin-top:-1px;
			margin-left:-1px;
			}
	
		.rectangle{
			height: 80px;
			width: 390px;
			background-color: gray;
			margin-top:-70px;
			margin-left:-70px;
			border-top-right-radius:19px;
			border-top-left-radius:19px;
		}
	
		.img2{
			margin:0px 30px;
		}
		
		.container{
			padding:70px;
			margin: 90px 150px;
			width:250px;
			height:400px;
			background-color:rgba(255,255,255,0.9);
			float:right;
			border-width:5px;
			border-style:inset;
			border-color:black;
			border-radius:25px;
			padding-bottom:40px;
		}
		
			
		.transfered{
			margin-top:-75px;
			margin-bottom:50px;
			font-size:50px;
			color:orange;
		}	
	
		.accnumber{
			padding:4px;
			margin-top:5px;
			margin-right:300px;
			margin-bottom:10px;
		}
	
		.cancel{
			margin-left:10px;
			margin-bottom:0px;
			margin-top: 40px;
			border-width:3px;
			background-color:orange;
			font-size:20px;
			width: 100px;
			height:40px;
			border-radius:15px;
		}
	
		.transfer{
			margin-left:20px;
			margin-bottom:0px;
			margin-top: 40px;
			border-width:3px;
			background-color:orange;
			font-size:20px;
			width: 100px;
			height:40px;
			border-radius:15px;
		}
		
	
		
	</style>

</head>

<body background="../Mini Project /images/bank-transfers.png" width="460px" height="325px" class="img1">
<form action="includes/Transaction.inc.php" name="form" method="POST" class="form">
	<ul class="menu">
		<a href="RegisterCustomerHomePage.php"><img src="../Mini Project /images/Screenshot 2023-12-19 112744.png" align="left" width="150px" height="80px" class="img2"></a><br><br><br>
	</ul>

	<form>
		
		<div class="container">
			<div class="rectangle"></div>
		
			<h1 align="center" class="transfered">Transaction</h1><br>
			
			
			<label>RECIVER ACCOUNT NUMBER: </label><br>
			<input type="text" placeholder=" Enter Account Number" class="accnumber" name="accnumber" ><br><br>
			
			<label>RECIVER NAME: </label><br>
			<input type="text" placeholder=" Enter Name" class="accnumber" name="name"><br><br>
			
			<label>AMOUNT: </label><br>
			<input type="text" placeholder="Enter Amount(Rs.)" class="accnumber" name="amount"><br><br>
		
			<a href="RegisterCustomerHomepage.php"><button type="button" class="cancel" >Cancel</button></a>
			<button type="submit" class="transfer" name="submit">Transfer</button></a>
		
		</div>	
		
	</form>
</form>
</body>


</html>