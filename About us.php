<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>

	<style>
    
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            
        }
        body{
            font-family: serif;
            display: flex;
            background-color: #4e5454;
            align-content: center;
            min-height: 100vh;
        }


        .image{
            background-color: #4e5454;
            display: flex;
            border-radius: 12px 0 0 12px;
            
        }
        .image img{
            height:70vh;
            padding-right: 100px;
            padding-top: 70px;
            padding-left: 50px;

        }

        .column{
            padding-top: 40px;
        }

        #size{
            font-size: 20px;
            
        }

        .frame{
            
            background-color: #fff;
            height: 600px;
            width: 900px;
            border-radius: 30px;
        
            
        }
        .content{
            
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items:center;
            
        }
        .content h2{
            text-transform: uppercase;
            color :#ffb700;
            font-size: 50px;
            letter-spacing: 6px;
        }
        .content span{
            height: 0.5px;
            width: 80px;
            color: #ffb700;
            margin: 30px 0;
            font-size: 20px;
        }
        .content p{
            padding-bottom: 15px;
            font-weight: 300;
            opacity: 0.7;
            width: 60%;
            text-align: center;
            margin: 0 auto;
            line-height: 1.7;
            color:black;
        }
        .links{
            margin: 15px 0;
        }
        .links li{
            border: 2px solid #C850C0;
            list-style: none;
            border-radius: 5px;
            padding: 10px 15px;
            width: 160px;
            text-align: center;
        }
        .links li a{
            text-transform: uppercase;
            color: black;
            text-decoration: none;
        }
        .links li:hover{
            border-color: orange;
        }

        .vertical-line{
            height: 30px;
            width: 3px;
            background: black;
            margin: 0 auto;
        }
        
    </style>
    </head>
    <body>
		<div class="column">
            <div class = "image">
               <img src="https://cdn.pixabay.com/photo/2017/08/26/23/37/business-2684758__340.png">
            </div>
		</div>
		<div class="column">
            <div class="frame">
            <div class = "content">
                <h2>About Us</h2><br><br><br>
                
                <p id="size"><b>Welcome to Nexus Bank</b> </p><br>

                 <p><b>At Nexus Bank, we blend tradition with innovation to redefine your banking experience. With a commitment to integrity and customer-centricity, we're not just a bank; we're your trusted partner in financial success. Explore a world where banking meets simplicity, tailored just for you. Welcome to Nexus Bank<br><br> <span>- Your Bridge to Better Banking</b></span></p><br>
                <ul class = "links">
                    <li><a href = "HomePage.php">HOME</a></li>
                    <div class = "vertical-line"></div>
                    <li><a href = "#">Careers</a></li>
                    <div class = "vertical-line"></div>
                    <li><a href = "Contact Us.php">Contact Us</a></li>
                </ul>
                
                
            </div>
        </div>
		</div>
    </body>
</html>
