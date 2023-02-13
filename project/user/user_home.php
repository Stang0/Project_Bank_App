<?php 
    session_start();

    if (!isset($_SESSION['user_login'])) {
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
 
  

            <?php if(isset($_SESSION['success'])) : ?>
                <div class="success">
                    <h3>
					<?php if(isset($_SESSION['user_login'])) { ?>
                ยินดีต้อนรับ <?php echo $_SESSION['user_login']; }?>
                        <?php 
                          
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

  		<div class="main">
			
			<div class="topbar">
				<div class="toggle">
					<ion-icon name="menu-outline"></ion-icon>
				</div>
					<div class="user">

						
					<?php
                
                
					require_once '../connection.php';
				$check_id = $_COOKIE["id"];
				$sql = "SELECT * FROM masterlogin where(password = $check_id)";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0 ){
					while ($row = mysqli_fetch_assoc($result)){
			
			?>
              
						<img src="uploads/<?php 
						
						echo $row["pp"];?>" >

					</div>
				</div>
				<?php
                    }
                }
                
                ?>
		
  			<div class="cardBox">
				<div class="card">
					<div>
						
					<div class="numbers">
				
						
					<?php
							require_once '../connection.php';
							$check_id = $_COOKIE["id"];
							$sql = "SELECT * FROM masterlogin where(password = $check_id)";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);

							if($resultCheck > 0 ){
								while ($row = mysqli_fetch_assoc($result)){
									echo ($row["email"]." ".$row["username"]." รหัสนักศึกษา ".$row["password"]);
								}
							}
						?>
						
							
						

						</div>
						
						
					
		
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
							$check_id = $_COOKIE["id"];
							$sql = "SELECT * FROM masterlogin where(password = $check_id)";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);

							if($resultCheck > 0 ){
								while ($row = mysqli_fetch_assoc($result)){
									echo ("มีเงินฝาก ".$row["total"]." บาท");
								}
							}
						?>
						
							
						

						</div>
						
						
					
						<div class="cardName">จำนวนเงินทั้งหมดของฉัน</div>
					</div>
					<div class="iconBx">
						
						<ion-icon name="eye-outline"></ion-icon>
					</div>
				</div>
					
				
				</div>
				
					<!--statement-->
			<div class="details">
				<div class="statment">
					<div class="cardHeader">
						<h2>ประวัติการฝาก</h2>
						<a href="#" class="btn">ดูทั้งหมด</a>
					</div>
					
						<table>
							<thead>
								<tr>
									<td>ชื่อ</td>
									<td>จำนวนฝาก</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
										
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w1"]);
												}
											}
										?></td>
								</tr>
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w2"]);
												}
											}
										?></td>
								</tr>
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w3"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w4"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w5"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w6"]);
												}
											}
										?></td>
								</tr>
								

								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w7"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w8"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w9"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w10"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w11"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w12"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w13"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w14"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w15"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w16"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w17"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w18"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w19"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w20"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w21"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w22"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w23"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w24"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w25"]);
												}
											}
										?></td>
								</tr>
								
								<tr>
								<td>	
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["email"]);
												}
											}
										?>
						
							
									</td>
									<td>
										<?php
											$check_id = $_COOKIE["id"];
											$sql = "SELECT * FROM masterlogin where(password = $check_id)";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);

											if($resultCheck > 0 ){
												while ($row = mysqli_fetch_assoc($result)){
													echo ($row["w26"]);
												}
											}
										?></td>
								</tr>
								
								
							</tbody>
						</table>
					
				</div>
			</div>

		
		</div>

	</div>

</div>

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
</body>
</html>