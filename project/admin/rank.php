<?php 
    session_start();

    if (!isset($_SESSION['admin_login'])) {
        header("location: ../index.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="navigation ">
			 <ul>
				<li>
					<a href="#">
						<span class="icon">ATC BANK</span>
					</a>
				</li>
				<li>
					<a href="admin_home.php">
						<span class="icon"><ion-icon name="home"></ion-icon></span>
						<span class="title">Dashborad</span>
					</a>
				</li>
				<li>
					<a href="rank.php">
						<span class="icon"><ion-icon name="ribbon"></ion-icon></span>
						<span class="title">Rank</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="person"></ion-icon></span>
						<span class="title">Contacts</span>
					</a>
				</li>
				<li>
					<a href="user.php">
						<span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
  						<span class="title">USER</span>
					</a>
				</li>
				<li>
					<a href="../logout.php">
						<span class="icon"><ion-icon name="log-out"></ion-icon></span>
						<span class="title">logout</span>
					</a>
				</li>
			 </ul>
		</div>


  		<div class="main">
			<div class="topbar">
				<div class="toggle">
					<ion-icon name="menu-outline"></ion-icon>
				</div>
					<div class="user">
						<a href="#"><img src="../asset/user.png"></a>
					</div>
				</div>
		
		
  			<div class="cardBox">
				<div class="card">
					<div>
						<div class="numbers">0</div>
						<div class="cardName">ผู้ใช้ทั้งหมด</div>
					</div>
					<div class="iconBx">
						
						<ion-icon name="eye-outline"></ion-icon>
					</div>
				</div>
					
				
				<div class="card">
					<div>
						<div class="numbers">0</div>
						<div class="cardName">เงินฝากทั้งหมด</div>
					</div>
					<div class="iconBx">
						
						<ion-icon name="cash-outline"></ion-icon>					</div>
					</div>
					
				<div class="card">
					<div>
						<div class="numbers">0</div>
						<div class="cardName">จำนวนนักเรียน</div>
					</div>
					<div class="iconBx">
						
						<ion-icon name="eye-outline"></ion-icon>
					</div>
				</div>
					
			</div>
			


			<div class="graphBox">
				<div class="box">
					<canvas id="rankChart"></canvas>
				</div>
			
			</div>





			<div class="details">
				<div class="recentOrders">
					<div class="cardHeader">
						<h2>ประวัติการฝาก</h2>
						
					</div>
				</div>
			</div>



		</div>

	</div>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<!-- Messenger ปลั๊กอินแชท Code -->
<div id="fb-root"></div>

<!-- Your ปลั๊กอินแชท code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "105564828956881");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
	FB.init({
	  xfbml            : true,
	  version          : 'v14.0'
	});
  };

  (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
	let toggle = document.querySelector('.toggle');
	let navigation = document.querySelector('.navigation');
	let main = document.querySelector('.main');

	toggle.onclick = function(){
		navigation.classList.toggle('active');
		main.classList.toggle('active');
	}




		let list = document.querySelectorAll('.navigation li');
		function activeLink(){
			list.forEach((item)=>
			list.classList.remove('hovered'));
			this.classList.add('hovered');
		}

		list.foreach((item)=>
		item.addEventListener('mouseover',activeLink));
	
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
<script src="rank_chart.js"></script>
</body>
</html>