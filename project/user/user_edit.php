<?php 
    session_start();

    if (!isset($_SESSION['user_login'])) {
        header("location: ../index.php");
    }

?>
   			
<?php
	include '../connection.php';

	if (isset($_POST["submit"])) {
		$username = mysqli_real_escape_string($conn, $_POST["usrename"]);
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		$confirmpassword = mysqli_real_escape_string($conn, $_POST["confirmpassword"]);
	
	
		if ($password === $confirmpassword){
			if (isset($_FILES["Photo"])){
				$photo_name = $_FILES["Photo"]["name"];
				$photo_tmp_name = $_FILES["Photo"]["tmp_name"];
				$photo_size = $_FILES["Photo"]["size"];
				$photo_new_name = rand() . $photo_name;

			}
			if ($photo_size > 5242880) {
				echo "<script>alert ('รูปมีขนาดใหญ่สามารถรับได้มากสุดที่ 5MB');</script>";
			}else{
				$check_id = $_COOKIE["id"];
				$sql = "UPDATE masterlogin SET email='$username' , password='$password' , pp='$photo_new_name' WHERE (password = $check_id)";
				$result = mysqli_query($conn, $sql);

				if ($result) {
					echo "<script>alert('อัปโหลดเรียบร้อย')</script>";
					move_uploaded_file($photo_tmp_name, "uploads/" .$photo_new_name);
				}else {
					echo "<srript>alert('ไม่สามารถอัปโหลดได้')</srript>";
					echo $conn->error;
				}
			}
		} else {
			echo "<script>alert ('รหัสไม่ตรงกัน')</script>";
		}
	
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
					<a href="user_home.php">
						<span class="icon"><ion-icon name="home"></ion-icon></span>
						<span class="title">Dashborad</span>
					</a>
				</li>
				<li>
					<a href="user_rank.php">
						<span class="icon"><ion-icon name="ribbon"></ion-icon></span>
						<span class="title">Rank</span>
					</a>
				</li>
				<li>
					<a href="user_contacts.php">
						<span class="icon"><ion-icon name="person"></ion-icon></span>
						<span class="title">Contacts</span>
					</a>
				</li>
				<li>
					<a href="user_edit.php">
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
        <div class="cardUpdate">
            <div class="card">
            <form action="" method="post" enctype="multipart/form-data">

                <?php
                
                
                    require_once '../connection.php';
                    $check_id = $_COOKIE["id"];
                    $sql = "SELECT * FROM masterlogin where(password = $check_id)";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0 ){
                        while ($row = mysqli_fetch_assoc($result)){
                
                ?>
                <div class="inputBox">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="usrename" value="<?php echo $row['email']; ?>" require>
                </div>
                <div class="inputBox">
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>"require>
                </div>
                <div class="inputBox">
                    <label for="confirmpassword">confirm password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" value="<?php echo $row['password']; ?>" require>
                </div>
                <div class="inputFile">
                    <label for="photo">Photo</label>
                    <input type="file" accept="image/* " id="Photo" name="Photo" require>
                </div>
				<div class="img">
					<img src="uploads/<?php echo $row["pp"];?>" width="150px" height="auto">
				</div>
              
                <?php
                    }
                }
                
                ?>
                <div class="inputBox">
                    <button type="submit" class="btn" name="submit">อัปโหลรูปภาพ</button>  
                </div>

				
            </form>
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
</body>
</html>
