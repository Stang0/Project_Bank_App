

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
		


			<div class="graphBox">
				<div class="box">
					<canvas id="myChart"></canvas>
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
<?php
	require_once '../connection.php';

	$query = $conn->query("SELECT * FROM masterlogin   ORDER BY total  DESC LIMIT 1 ");
	$query2 = $conn->query("SELECT * FROM masterlogin  where NOT total = '220' ORDER BY total  DESC LIMIT 1 ");
	$query3 = $conn->query("SELECT * FROM masterlogin  where NOT total = '185' AND NOT total = '220' ORDER BY total  DESC LIMIT 1 ");
	$query4 = $conn->query("SELECT * FROM masterlogin  where NOT total = '220' and not total = '185' and not total = '170' ORDER BY total  DESC LIMIT 1 ");

	foreach($query as $data1)
	{
		$student[] = $data1['email'];
		$total1[] = $data1['total'];
	}
	foreach($query2 as $data2)
	{
		$student2[] = $data2['email'];
		$total2[] = $data2['total'];
	}
	foreach($query3 as $data3)
	{
		$student3[] = $data3['email'];
		$total3[] = $data3['total'];
	}
	foreach($query4 as $data4)
	{
		$student4[] = $data4['email'];
		$total4[] = $data4['total'];
	}

?>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
<script >

var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx,{
    type: 'bar',
    data: {
        labels: [<?php echo json_encode($student)?> , <?php echo json_encode($student2)?>, <?php echo json_encode($student3)?> , <?php echo json_encode($student4)?> ],
        datasets: [{
            label: 'จำนวน',
            data:[<?php echo json_encode($total1)?>,<?php echo json_encode($total2)?>,<?php echo json_encode($total3)?>,<?php echo json_encode($total4)?> ],
            backgroundColor: [
                'rgba(255,99,132,0.2)',
                'rgba(54,162,235,0.2)',
                'rgba(255,206,86,0.2)',
                'rgba(238,130,238,0.2)',
                'rgb(106, 90, 205,0.2)'

                
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54,162,235,1)',
                'rgba(255,206,86,1)',
                'rgba(238,130,238,01)',
                'rgb(106, 90, 205,1)'


            ],
            borderWidth:1
        }]
    },
    options: {
        responsive: true,
    }
});

const config = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

	
</script>
</body>
</html>