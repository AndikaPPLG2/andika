<!doctype html>
<html lang="en">
<head>
  <style>
    body{
	background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
background-image: linear-gradient(to top, #8A2BE2 0%, #fed6e3 100%);
background-attachment: fixed;
  background-repeat: no-repeat;
    font-family: 'Vibur', cursive;
    font-family: 'Abel', sans-serif;
opacity: .95;
}
*{
	margin: 0px;
	padding: 0px;
}
input[type=text]{
	width: 600px;
	height: 25px;
	padding: 5px;
	border-radius: 10px;
}
/* #amazonlogo{
	width: 100px;
	height: 40px;
} */
#searchicon{
	width: 37px;
	height: 37px;
	border-radius: 10px;
	margin-bottom: -16px; 
	background-color: orange;
	cursor: pointer;
}
#menulines{
	width: 35px;
	height: 35px;
	cursor: pointer;
	margin-right: 5px;
	transition-duration: .5s;
}
#menulines:hover{
	width: 40px;
	height: 40px;
	transition: .5s;
	margin-right: 0px;
}
#menubar{
	width: 100%;
	background-color: #171717;
	padding: 5px;
}
#menubar2{
	width: 100%;
	padding: 5px;
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
}
#menubar2 th{
	width: 8.33%;
	color: white;
	cursor: pointer;

}
.fixed{
	position: fixed;
	top:0px;
	left:0px;
	right: 0px;
}
.drop-down{
	display: none;
	position: absolute;
	background-color: #fff;
	border-radius: 20px;
	padding: 10px;
	min-width: 50px;
}
.primebanner{
	border-radius: 15px;
}
.drop-down a{
	color: #000;
	text-align: center;
}
.prime:hover .drop-down{
	display: block;
}
.catag{
	display: inline-block;
	padding: 10px;
	width: 100px;
	text-align: center;
	font-weight: bold;
	background-color: white;
}
.shopp{
	display: none;
	position: absolute;
	background-color: #fff;
	border-radius: 5px;
	font-size: 16px;
}
.shopp a{
	color: black;
	text-align: center;
	transition-duration: .9s;
	text-decoration: none;
}
.shopp a:hover{
	color: black;
	font-size: 24px;
	transition: .5s;
}
.shopBy:hover .shopp{
	display: block;
	padding: 10px;
}
.carttext a{
	text-decoration: none;
	color: white;
}
#cartmenu{
	width: 25px;
	height: 25px;
	cursor: pointer;
}

.card2 {
    max-width: 70%;
    min-width: 69%;
    height: auto;
    background-color: white;
    display: inline-block;
    justify-content: space-between;
    margin: 10px;
    margin-top: 30px;
    border-radius: 15px;
    border: 1.5px solid black;
    overflow:hidden ;

 
}
.card2:hover{
	transition: .5s;
	box-shadow: 2px 2px 10px black;
}

.image img{
    width: 100%%; 
    height: 100%; 
    object-fit: cover;
    border-radius: 25px;
    transition-duration: .5s;

}
.image img:hover{
	width: 95%;
	overflow: auto;
	transition: .5s;
	box-shadow: 2px 2px 10px black;
	border-radius: 25px;
}
.text{
	text-align: center;
	padding: 10px;
	font-size: 14px;
}
.des{
	text-align: center;
}
#seemore{
	margin-top: 15px;
	margin-bottom: 15px;
	background-color: orange;
	border-width: 1px;
	border-color: black;
	color: black;
	transition-duration: .5s;
	border-radius: 5px;
	cursor: pointer;
	padding: 3px;
}
#seemore:hover{
	background-color: black;
	color: white;
	padding: 4px;
	transition: .5s;
	box-shadow: 2px 2px 10px black;
	transition: .5s;
}









.background{
	width: 100%;
	margin-top: 120px;
background-color: transparent;

}
.mainback{
	width: 95%;
	background-color: transparent;
	border-radius: 10px;
	padding: 2px;
}
.producthead{
	width: 100%;
	height: 40px;
	margin-top: 25px;
	margin-bottom: 25px;
	background-color: transparent;
	box-shadow: 2px 2px 10px black;
	border-radius: 10px;
}
.productback{
	max-width: 80px;
	min-width: 999px;
	background-color: transparent;
	display: inline-block;
	border-radius: 10px;
}

.gojo{
width: 30px;
height:30px;
}

section{
    display:flex;
    justify-content:space-around;
}


  </style>
	<meta charset="utf-8">
	<title>Gojo Shopp</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
	<div class="fixed">
		<table border="0" width="100%" id="menubar">
			<th><img src="../img/gojo.png" class="gojo" id="menulines"></th>
			<th align="right"><a href=""><img src="" id=""></a></th>
			<th>
				<div>
					<input type="text" name="search" placeholder="Search for Products,brands and more">
					<img src="" id="searchicon">
				</div>
			</th>
			<th><font color="white">Login/SignUp</font></th>
			<th><font color="white">More</font></th>
			<th class="carttext"><img src=" id="cartmenu"><a href="#">Cart</a></th>
		</table>

		<div align="center">
			<table border="0" width="100%" bgcolor="#2d2d2d" id="menubar2">
				<th class="prime">Prime
					<div class="drop-down">
						<h2 style="color: black; text-align: center; font-weight: bold;">Get flat 100% Reward Points on all orders</h2><br>
						<h4 style="color: black; text-align: center; font-weight: bold;">Apply & get Rs.1,000 back</h4><br>
						<img class="primebanner" width="500px" height="300px" src="">
					</div>
				</th>
				<th class="shopBy">Shop By<br><b>Catagory &nabla;</b>
					<div class="shopp">
						<div class="catag">
							<div>
								<h3 style="color: black;">Motorcycle</h3><br><hr>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
							</div>
						</div>
						<div class="catag">
							<div>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
							</div>
						</div>
						<div class="catag">
							<div>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
							</div>
						</div>
						<div class="catag">
							<div>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
								<a href="#">hello</a><br>
							</div>
						</div>
					</div>
				</th>
				<th>My Account</th>
				<th>Best Sellers</th>
				<th>Customer Service</th>
				<th>Buy Again</th>
				<th>Sell</th>
				<th>New Release</th>
			</table>
		</div>
	</div>

<section>
	<div class="background">
		<div align="center">
			<div class="mainback">
				<div class="productback">
					<div class="producthead"><h1>Motorcycle</h1></div>
					<div align="center">

						<hr>

						<div class="card2">
							<div class="text">
								<h2>Yamaha</h2>
							</div>
							<div class="image">
								<img src="../img/r15v3.jpeg">
							</div>
							<div class="des">
								<p>r15v3</p>
								<button id="seemore">Cepatkan bayar</button>
							</div>
						</div>

						<div class="card2">
							<div class="text">
								<h2>Honda</h2>
							</div>
							<div class="image">
								<img src="../img/cbr250rr.jpeg">
							</div>
							<div class="des">
								<p>Cbr250rr</p>
								<button id="seemore">Cepatkan bayar</button>
							</div>
						</div>

						<div class="card2">
							<div class="text">
								<h2>Kawasaki</h2>
							</div>
							<div class="image">
								<img src="../img/h2r.jpeg">
							</div>
							<div class="des">
								<p>h2r</p>
								<button id="seemore">Cepatkan bayar</button>
							</div>
						</div>
						<hr>

						<div class="card2">
							<div class="text">
								<h2>Kawasaki</h2>
							</div>
							<div class="image">
								<img src="../img/zx10r.jpeg">
							</div>
							<div class="des">
								<p>zx10r</p>
								<button id="seemore">Cepatkan bayar</button>
							</div>
						</div>

						<div class="card2">
							<div class="text">
								<h2>BMW</h2>
							</div>
							<div class="image">
								<img src="../img/bmw1000rr.jpeg">
							</div>
							<div class="des">
								<p>BMW100RR</p>
								<button id="seemore">Cepatkan bayar</button>
							</div>
						</div>

						<div class="card2">
							<div class="text">
								<h2>Kawasaki</h2>
							</div>
							<div class="image">
								<img src="../img/zx25r.jpeg">
							</div>
							<div class="des">
								<p>zx25r</p>
								<button id="seemore">Cepatkan bayar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html