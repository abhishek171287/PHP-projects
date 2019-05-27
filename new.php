
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
	
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
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="adminhome.php">Home</a></li>


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
				<li><a href="councellingstudents.php">Counselling students</a></li>

				<li><a href="logout.php">Logout</a></li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
	<section id="intro" class="intro">
		<div class="container ">
			<div class="col-lg-12">
				<br><br>
				<h1 class="text-warning text-center">SEASON WISE CROPS GROWN IN ANDHRAPRADESH</h1>	
				 <br>
				 <table id="table_id" class="table table-stripped table-hover table-bordered">
  <thead>
          <tr class=" text-center">
            <th class=" text-center" bgcolor="BLUEVIOLET">ID</th>
            <th class=" text-center" bgcolor="FUCHSIA">Roll Number</th>
            <th class=" text-center" bgcolor="CRIMSON">Student Name</th>
            <th class=" text-center" bgcolor="MISTYROSE">D.O.B.</th>
            <th class=" text-center" bgcolor="ORCHID">Gender</th>
            <th class=" text-center" bgcolor="PERU">Category</th>
            <th class=" text-center" bgcolor="SLATEBLUE">PC</th>
            <th class=" text-center" bgcolor="WHEAT">GMR</th>
            <th class=" text-center" bgcolor="ROSYBROWN">SC Rank</th>
            <th class=" text-center" bgcolor="LIME">ST Rank</th>
            <th class=" text-center" bgcolor="GREY">PC Rank</th>



          </tr> 
    </thead>      
    <tbody>
          <?php

            $conn = mysqli_connect("localhost","root","","jeca");
             $result=mysqli_query($conn,"SELECT * FROM meritlist");

             while($row=mysqli_fetch_assoc($result)):
             ?>


          <tr class="text-center">
            <td><?php echo $row['meritid']; ?></td>
            <td><?php echo $row['rollno']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['cat']; ?></td>
            <td><?php echo $row['pc']; ?></td>
            <td><?php echo $row['gmr']; ?></td>
            <td><?php echo $row['scrank']; ?></td>
            <td><?php echo $row['strank']; ?></td>
            <td><?php echo $row['pcrank']; ?></td>


              


          </tr>

                       <?php endwhile; ?>
        </tbody>
      </table>

       <link rel="stylesheet"  href="bootstrap.css"/>
      <script src="tables/js/jquery.js"></script>


      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


      <script >
        $(".table").DataTable();
      </script>


	
				 <div align="center">
    			<br />
   				 
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
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="adminhome.html">Home</a></li>
							<li><a href="#">Laboratory</a></li>
							<li><a href="#">Medical treatment</a></li>
							<li><a href="#">Terms & conditions</a></li>
						</ul>
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
								</span> Monday - Fridayday, 10am to 5pm
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
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<p><a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</p>
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
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