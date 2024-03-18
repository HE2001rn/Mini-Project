<!DOCTYPE html>
<html>

<head>

	<title>  Nexus Bank </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
	
	.img1{
		    background-size:cover;
			background-repeat:no-repeat;
			width:100%;
			height:auto;
			margin-top:-1px;
			margin-left:-1px;
		}
	
	ul.menu{
			list-style-type: none;
			margin:0px;
			padding:-10px;
			width: device-width;
			height: auto;
			overflow: hidden;
			background-color: white;
		}	
	
	.rectangle{
		
		height: 110px;
		width: 560px;
		background-color: gray;
		margin-top:-80px;
		margin-left:-80px;
		border-top-right-radius:8px;
		border-top-left-radius:8px;
	}
	
	.img2{
		margin:0px 50px;
		}
		
	.chequeowners{
		font-size: 16px;
		float: right;
		margin-top: -20px;
		margin-right: 68px;
		color: red;
	}
		
	.container{
			padding:80px;
			padding-bottom:0px;
			margin: 90px 90px;
			margin-top:100px;
			margin-bottom:120px;
			margin-left:485px;
			width:400px;
			background-color:rgba(255,255,255,0.9);
			float:right;
			border-width:5px;
			border-style:inset;
			border-color:black;
			border-radius:15px;
		}
		
	.ordercheque{
		margin-top:-85px;
		margin-bottom:50px;
		font-size:45px;
		color:orange;
	}	
	
	.accountnumber{
		padding:4px;
		float: right;
		margin-top:-20px;
		margin-right:-20px;
		margin-bottom:20px;
	}
	
	.ac{
		float: right;
		margin-top: 25px;
		margin-right: 127px;
		margin-bottom: 30px;
	}
	
	.billtype{
		float: right;
		margin-left:206px;
		margin-top: -65px;
		height:25px;
		width: 120px;
		border-width: 2px;
		background-color: #ddd;
	}
	
	.billnumber{
		padding:4px;
		float: right;
		margin-top:-20px;
		margin-right:-20px;
		margin-bottom:40px
	}
	
	.notice{
		margin-top: -5px;
		margin-left: 10px;
	}

	.Amount{
		padding:4px;
        float: left;
        margin-top:10px;
        margin-right:-15px;
	}
	
	.cancel{
		margin-left:-29px;
		margin-bottom:30px;
		margin-top: 40px;
		border-width:3px;
		background-color:orange;
		font-size:25px;
		width: 130px;
		height:50px;
		border-radius:15px;
	}
	
	.submit{
		margin-left:60px;
		margin-bottom:30px;
		margin-top: 30px;
		border-width:3px;
		background-color:orange;
		font-size:25px;
		width: 130px;
		height:50px;
		border-radius:15px;
	}
	
	</style>

</head>

<body background="../Mini Project /images/Woman_Holding_Paycheck_e4m989.jpeg" width="460px" height="345px" class="img1">

	
	<ul class="menu">
		<a href="RegisterCustomerHomePage.php"><img src="../Mini Project /images/Screenshot 2023-12-19 112744.png" align="left" width="150px" height="80px" class="img2"></a><br><br><br>
	</ul>
	
	

	<form>
		
		<div class="container">
		
			<div class="rectangle"></div>
		
			<h1 align="center" class="ordercheque">Order Cheque</h1><br>
			
			IS THIS CHEQUE FOR : 
			<pre class="chequeowners" name="chequeowners">
				<input type="radio" class="personal" name="owners">Personal
				<input type="radio" class="business" name="owners">Business
			</pre>
			<br>
		
			<label>ACCOUNT NUMBER :</label><br>
			<input type="text" placeholder="Enter Account Number" class="accountnumber" name="accountnumber"><br> 
		
		
			<label class="ac" name="ac">NUMBER OF CHEQUE BOOK LEAVES :</label><br>
			
			<select name="Type" class="billtype" name="billtype">
				<option value="type1">10 Leaves</option>
				<option value="type1">15 Leaves</option>
				<option value="type1">20 Leaves</option>
				<option value="type1">25 Leaves</option>
			</select><br><br>
			
			<label>NUMBER OF CHEQUE BOOKS :</label><br>
			<input type="text" placeholder="Enter Quantity" class="billnumber" name="billnumber"><br> 
		
			<pre class="notice">(Only you can request between 1 to 5 books in one order)</pre>
		
			<label class="Amount" name="amount">AMOUNT :</label><br>

			<a href="RegisterCustomerHomepage.php"><button type="button" class="cancel"> Cancel </button></a>
			
			<button type="submit" class="submit" name="submit"> Submit </button><br>
			
		</div>
	
	</form>


</body>

</html>