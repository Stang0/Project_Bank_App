<?php 
    session_start();

    require_once('../connection.php');


    if (!isset($_SESSION['admin_login'])) {
        header("location: ../index.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" type="text/css" href="addmoney.css">

    
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
          <div class="details">
				<div class="statment">
					<div class="cardHeader">
						<h2>เติมเงิน</h2>
						<a href="#" class="btn">ดูทั้งหมด</a>
					</div>
					
						<table>
							<thead>
								<tr>
									<td>ชื่อ</td>
									<td>จำนวนเงิน</td>
                                    <td>ใส่เงิน</td>
								</tr>
							</thead>
                            <tbody>
            <?php 
                $select_stmt = $db->prepare("SELECT * FROM masterlogin");
                $select_stmt->execute();

                while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>

                <tr>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["total"]; ?></td>
                    <td><a href="inputmoney.php?update_id=<?php echo $row["id"]; ?>" class="btn btn-warning">เพิ่มเงิน</a></td>
                </tr>

            <?php } ?>
        </tbody>
						</table>
	</div>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
</body>
</html>