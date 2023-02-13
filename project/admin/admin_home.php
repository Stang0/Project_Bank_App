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
	<link rel="stylesheet" type="text/css" href="styles.css">
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
					<a href="admin_rank.php">
						<span class="icon"><ion-icon name="ribbon"></ion-icon></span>
						<span class="title">Rank</span>
					</a>
				</li>
				<li>
					<a href="admin_contacts.php">
						<span class="icon"><ion-icon name="person"></ion-icon></span>
						<span class="title">Contacts</span>
					</a>
				</li>
				<li>
					<a href="admin_edit.php">
						<span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
  						<span class="title">USER</span>
					</a>
				</li>
				<li>
					<a href="admin_addmoney.php">
						<span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
  						<span class="title">Add money</span>
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
						<a href="#"><img src="../asset/default-pp.png"></a>
					</div>
				</div>
		
		
  			<div class="cardBox">
				<div class="card">
					<div>
						<div class="numbers"><?php
							require_once '../connection.php';
							$sql = "SELECT COUNT(*) FROM masterlogin ";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);

							if($resultCheck > 0 ){
								while ($row = mysqli_fetch_assoc($result)){
									echo $row['COUNT(*)'];
								}
							}
						?></div>
						<div class="cardName">ผู้ใช้ทั้งหมด</div>
					</div>
					<div class="iconBx">
						
						<ion-icon name="eye-outline"></ion-icon>
					</div>
				</div>
					
				
				<div class="card">
					<div>
						<div class="numbers">
						<?php
							require_once '../connection.php';
							$sql = "SELECT SUM(total) FROM masterlogin ";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);

							if($resultCheck > 0 ){
								while ($row = mysqli_fetch_assoc($result)){
									echo $row['SUM(total)'];
								}
							}
						?>
						</div>
						<div class="cardName">เงินฝากทั้งหมด</div>
					</div>
					<div class="iconBx">
						
						<ion-icon name="cash-outline"></ion-icon>
					</div>
				</div>
					
				<div class="card">
					<div>
						<div class="numbers">
						<?php
							require_once '../connection.php';
							$sql = "SELECT COUNT(*) FROM masterlogin ";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);

							if($resultCheck > 0 ){
								while ($row = mysqli_fetch_assoc($result)){
									echo $row['COUNT(*)'];
								}
							}
						?>
						</div>
						<div class="cardName">จำนวนนักเรียน</div>
					</div>
					<div class="iconBx">
						
						<ion-icon name="eye-outline"></ion-icon>
					</div>
				</div>
					
			</div>
			


			<div class="graphBox">
				<div class="box">
					<canvas id="myChart"></canvas>
				</div>
				<div class="box">
					<canvas id="earningWeek"></canvas>
				</div>
					
				</div>

			



			<div class="details">
				<div class="recentOrders">
					<div class="cardHeader">
						
					</div>
				</div>
			</div>



		</div>

	</div>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
Basic usage<!-- Messenger ปลั๊กอินแชท Code -->
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
<script src="my_chart.js"></script>
</body>
</html>