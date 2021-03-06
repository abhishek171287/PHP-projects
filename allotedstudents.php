<?php
include('session.php');
				 		include  'conn.php';
				 		

				 		$record_per_page = 5;
						$page = '';
						if(isset($_GET["page"]))
						{
							 $page = $_GET["page"];
						}
						else
						{
						 $page = 1;
						}

						$start_from = ($page-1)*$record_per_page;
						$q= "select  * from councellingstudents order by applicationid asc limit $start_from, $record_per_page ";
				 		$query=mysqli_query($con,$q);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COUNCELLING STUDENTS</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
<style>
	@keyframes ticker {
    0% { transform: translate3d(0, 0, 0); }
    100% { transform: translate3d(-100%, 0, 0); }
  }
  .tcontainer{
    width: 100%;
    overflow: hidden;
  }
  .ticker-wrap {
    width: 100%;
    padding-left: 100%; 
    background-color: #eee;
  }
  .ticker-move {
    display: inline-block;
    white-space: nowrap;
    padding-right: 100%;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    animation-name: ticker;
    animation-duration: 10s;
  }
  .ticker-move:hover{
    animation-play-state: paused;
  }
  .ticker-item{
    display: inline-block;
    padding: 0 2rem;
  }

  .anchor
  {
  	border: 1px solid #000099;
  }

</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Call us now 033 2367 1198</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="60" />
                </a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="adminhome.html">Home</a></li>
			

				<li class="dropdown">
				  <a href="addcounsellingcities.php" class="dropdown-toggle" data-toggle="dropdown">INSTITUTES<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="participatingcolleges.php">Add Participating Institutes</a></li>
					<li><a href="updateordeletecolleges.php">Update Or Delete Participating Institutes</a></li>					
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="addcounsellingcities.php" class="dropdown-toggle" data-toggle="dropdown">MERIT LIST<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="meritlist.php">Add Student To Merit List</a></li>
					<li><a href="updateordeletemeritlist.php">Update Or Delete Student From Merit List</a></li>
					
				  </ul>
				</li>
				<li >
				  <a href="allotedstudents.php" >STUDENTS WITH ALLOTED SEATS</a>
	
					
				</li>

				<li><a href="logout.php">Logout</a></li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
	
	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="container ">
			<div class="col-lg-12">
				<br><br>
				 <table>
				 	<tr>
				 		<td>-----</td>
				 	</tr>
				 	<tr>
				 		<td>-----</td>
				 	</tr>
				 	<tr>
				 		<td>-----</td>

				 	</tr>
				 	<tr>
				 		<td>-----</td>
				 		
				 	</tr>
				 	<tr>
				 	</tr>
				 		
				 	<tr>
				 		<td class="text-center"><h1 class="text-warning text-center"> WBJECA 2019 MERIT LIST WITH RANK</h1></td>
				 	</tr>
				 </table>
				 <table class="table table-stripped table-hover table-bordered">
				 	<tr class=" text-center">
				 		<th class=" text-center" bgcolor="BLUEVIOLET">APPLICATIONID</th>
				 		<th class=" text-center" bgcolor="FUCHSIA">Roll Number</th>
				 		<th class=" text-center" bgcolor="CRIMSON">Student Name</th>
				 		<th class=" text-center" bgcolor="MISTYROSE">D.O.B.(YYYY-MM-DD)</th>
				 		<th class=" text-center" bgcolor="ORCHID">Gender</th>
				 		<th class=" text-center" bgcolor="BLUE">Rank</th>
				 		<th class=" text-center" bgcolor="BLANCHEDALMOND">Institute In Which Seat is Alloted </th>

				 		<th class=" text-center" bgcolor="CYAN">Aadhar Number</th>
				 		<th class=" text-center" bgcolor="RED">Photo</th>
				 		<th class=" text-center" bgcolor="DARKSEAGREEN">Sign</th>
				 		<th class=" text-center" bgcolor="DARKSALMON">City</th>
				 		<th class=" text-center" bgcolor="GHOSTWHITE">E-Mail</th>
				 		<th class=" text-center" bgcolor="GOLD">Mobile</th>
				 		<th class=" text-center" bgcolor="LAWNGREEN">Paid From Bank </th>
				 		<th class=" text-center" bgcolor="ORANGE">Chalan Id</th>


				  		


				 	</tr>	

				 	<?php

				 		while($res =mysqli_fetch_array($query))
				 		{



				 	?>


				 	<tr class="text-center">
				 		<td><?php echo $res['applicationid']; ?></td>
				 		<td><?php echo $res['rollno']; ?></td>
				 		<td><?php echo $res['candidatename']; ?></td>
				 		<td><?php echo $res['dob']; ?></td>
				 		<td><?php echo $res['gender']; ?></td>
				 		<td><?php echo $res['rank']; ?></td>
				 		<td><?php echo $res['institute']; ?></td>
				 		<td><?php echo $res['aadhar']; ?></td>
				 		<td><?php echo $res['photo'];?></td>
				 		<td><?php echo $res['sign'];?></td>
						<td><?php echo $res['city'];?></td>
						<td><?php echo $res['email'];?></td>
						<td><?php echo $res['mobile'];?></td>
						<td><?php echo $res['bank'];?></td>
						<td><?php echo $res['chalan'];?></td>



				  		


				 	</tr>

				 	<?php
				 		}

				 	?>	
				 </table>	

	 			<div align="center">
    			<br />
   				 <?php
   				 $page_query = "SELECT * FROM councellingstudents order by applicationid DESC";
   				 $page_result = mysqli_query($con, $page_query);
    			$total_records = mysqli_num_rows($page_result);
    			$total_pages = ceil($total_records/$record_per_page);
    			echo'Page no.:';
    			for($i=1;$i<=$total_records;$i++)
   				 {
    				  echo '<a class="anchor" href="allotedstudents.php?page='.$i.'">'.$i.'</a>';
    			}
    
    			?>
   			 	</div>
			</div>	
		</div>
     </section>


    
	
	
	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About WBJECA</h5>
						<p>
						Joint Entrance Examination for admissions to Master of Computer Applications (JECA), is conducted by West Bengal Joint Entrance Examination Board (WBJEEB).The exam is a gateway for admissions to MCA courses offered by colleges in the state of West Bengal.This year, WBJECA 2019 is scheduled for July 13, 2019.
						</p>
					</div>
					</div>
					
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>WBJEEB</h5>
						<p>
						The West Bengal Joint Entrance Examinations Board is the state government administered authority for overseeing admission to engineering and other degree colleges in West Bengal, India.
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Friday, 10am to 5pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> 033 2367 1198

							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> help@wbjeeb.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>AQ 13/1, AQ Block, Sector V, Salt Lake City, Kolkata, West Bengal 700091</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="https://aboutme.google.com/u/0/?referer=gplus"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="https://vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2019 - WBJEEB. All rights reserved.</p>
					</div>
					</div>
				</div>
				
			</div>	
		</div>
		</div>
	</footer>

</div>



?>	
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>
