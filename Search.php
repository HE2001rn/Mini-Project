<!DOCTYPE html>
<html>

<head>

	<title>Nexus Bank</title>

	<style>
		.img1{
		    background-size:cover;
			background-repeat:no-repeat;
			width:100%;
			height:700px;
			margin-top:-1px;
			margin-left:-1px;
		}
		
		.banklogo{
			float:left;
			width:150px;
			height:80px;
			margin:0px 100px;
		}
		
		.rectangle{
			height: 80px;
			width: 1600px;
			float:right;
			background-color: white;
			margin-top:-20px;
		}
		
		.Search{
			float:right;
			width:300px;
			height:30px;
			margin-right:30px;
			margin-top:7px;
			border-width:2px;
			
		}
		
		.searchicon{
			width:20px;
			height:20px;
			float:right;
			margin-right:10px;
			margin-top:13px;
		}
		.button1{
			font-size:60px;
			width: 350px;
			height:150px;
			float: center;
			margin-left: 250px;
			margin-top: 400px;
			background-color: orange;
			border-top-right-radius:50px;
			border-top-left-radius:10px;
			border-bottom-right-radius:10px;
			border-bottom-left-radius:50px;
			border-color: white;
			border-width: 4px;
		}
		
		.button2{
			font-size:60px;
			width: 350px;
			height:150px;
			float: center;
			margin-left: 350px;
			margin-top: 400px;
			background-color: orange;
			border-top-right-radius:50px;
			border-top-left-radius:10px;
			border-bottom-right-radius:10px;
			border-bottom-left-radius:50px;
			border-color: white;
			border-width: 4px;
		}
		
		.Fotter{
			margin-top:180px;
			padding: 10px 20px;
			background: black;
			color: white;
			display: flex;
			flex-direction:row;
			justify-content:Center;
			gap: 200px;
		}
		
		.Fotter.aboutus{
			display: flex;
			flex-direction:column;
			justify-content:Center;
		}
		
		.Fotter.services{
			display: flex;
			flex-direction:column;
			justify-content:Center;
		}
		
		.Fotter.bank{
			display: flex;
			flex-direction:column;
			justify-content:Center;
		}
		
		.Fotter.followus{
			display: flex;
			flex-direction:column;
			justify-content:Center;
		}
		.head{
			margin-bottom:60px;
		}
		
		.h{
			margin-bottom: -10px;
		}
		
		.facebook{
			margin-right:10px;
		}
		
		.insta{
			margin-right:10px;
			margin-bottom:2px;
		}
		
		.youtube{
			margin-right:10px;
			margin-bottom:2px;
		}
		
		
	</style>

</head>


<body background="../Mini Project /images/zenus-bank-place-city.webp" width="460px" height="345px" class="img1"><br>

	<div class="rectangle">
		
		<img src="../Mini Project /images/Screenshot 2023-12-19 112744.png" class="banklogo"><br>
	
		<input type="search" placeholder="Search here..." class="Search">
		<img src="../Mini Project /images/search-icon-png-5.png" class="searchicon">
	
	</div>
	
	<div>
		
		<a href="Login.php"><button type="button" class="button1">Pay Bills</button></a>
		<a href="Login.php"><button type="button" class="button2">Transaction</button></a>
		
	</div>

	<footer class="Fotter">
		<div class="aboutus">
			<h2 class="head"> About Us </h2>
			<h5 class="h"> Empowering your </h5>
			<h5 class="h"> financial journey with </h5>
			<h5 class="h"> our secure and </h5>
			<h5 class="h"> user-friendly online </h5>
			<h5 class="h"> banking platform. </h5>
		</div>
		
		<div class="services">
			<h2 class="head"> Services </h2>
			<h5 class="h"> Transaction </h5>
			<h5 class="h"> Pay Bills </h5>
			<h5 class="h"> Withdrawal Details </h5>
			<h5 class="h"> Deposit Details </h5>
		</div>
		
		<div class="bank"> 
			<h2 class="head"> Nexus Bank </h2>
			<h5 class="h"> Nugegoda</h5>
			<h5 class="h"> Colombo 7,</h5>
			<h5 class="h"> Sri Lanka.</h5>
			<ul>
				<li> Telephone:+94(0)112481481 </li>
				<li> Email:nexusbank1@gmail.lk </li>
				<li> Email:nexusbank2@gmail.lk</li>
			</ul>
		</div>
		
		<div class="followus">	
			<h2 class="head"> Follow Us</h2>
			<img src="../Mini Project /images/229098.png" width="51px" height="51px" class="facebook"> <a href="#facebook"></a>
			<img src="../Mini Project /images/2437730f7e3a5705e205e67fa2cd1020.jpg" width="45px" height="45px" class="insta"> <a href="#instergram"></a>
			<img src="../Mini Project /images/YouTube_social_red_circle_(2017).svg.png" width="45px" height="45px" class="youtube"> <a href="#YouTube"></a>
			
		</div>
	
	</footer>
	

</body>



</html>