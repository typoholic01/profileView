<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>창작자들의 놀이터</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<!-- Font-awsome! -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Card Style -->
  <style>
	.card-columns {
	  @include media-breakpoint-only(sm) {
	    column-count: 4;
	  }
	  @include media-breakpoint-only(lg) {
	    column-count: 4;
	  }
	  @include media-breakpoint-only(xl) {
	    column-count: 5;
	  }
	}
	</style>
</head>
<body>
	<!-- Navbar -->
	<?php
	   include './view/common/topnav.php';
	?>
	
	<!-- 본문 -->
	<div class="container" style="    border-left: 1px solid #ededed;    border-right: 1px solid #ededed;    padding-right: 0px;">
		<div class="row">
		<aside class="col-sm-4">			
			<div class="table-responsive" style="    padding-top: 1em;">    
		  		<table style="    width: 98%;   margin: 2%;">
				  <tr>
				    <th style="font-size: large;cursor: default;">백연(painterby)</th>
				    <th rowspan="3"><img src="image.jpg" class="rounded-circle col-sm-8" style="    float: right;" alt="Cinque Terre"></th>
				  </tr>
				  <tr>
				    <td>typoholic01@gmail.com</td>
				  </tr>
				  <tr>
				    <td>
		    			<button type="button" class="btn btn-primary btn-sm" onclick="location.href='${pageContext.request.contextPath }/${boardUrl }/write'"><i class="fa fa-comments"></i> <b>팔로우</b></button>			
				    </td>
				  </tr>
				  <tr>
				  	<td style="    border-bottom: 1px solid #ededed;"><p> </p></td>
				  </tr>
				  <tr>
				    <td colspan="2">
				    <p style="margin: 1em 0 1px;color: slategrey;">낯설지만 따뜻한 순간을 기록합니다</p>
				    <p style="margin: 0 0 1px;color: slategrey;">painterby@naver.com</p>
				    <p style="margin: 0 0 1px;color: slategrey;">instagram.com/painter.by</p>
				    </td>
				  </tr>
				</table>
		  </div>
		</aside>		
		<section class="col-sm-8" style="min-height: 100vh;    background-color: whitesmoke;    border-left: 1px solid #ededed;">
			<div class="card-columns">
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/1.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">이상한 나라의 선인장</h4>
			      <p class="card-text" style="padding: 0.5em;"><i class="fa fa-comment"></i> 33</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/2.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">동글동글한</h4>
			      <p class="card-text" style="padding: 0.5em;"><i class="fa fa-comment"></i> 12</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/3.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">더운날</h4>
			      <p class="card-text"  style="padding: 0.5em;"><i class="fa fa-comment"></i> 44</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/1.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">이상한 나라의 선인장</h4>
			      <p class="card-text" style="padding: 0.5em;"><i class="fa fa-comment"></i> 33</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/2.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">동글동글한</h4>
			      <p class="card-text" style="padding: 0.5em;"><i class="fa fa-comment"></i> 12</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/3.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">더운날</h4>
			      <p class="card-text"  style="padding: 0.5em;"><i class="fa fa-comment"></i> 44</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/1.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">이상한 나라의 선인장</h4>
			      <p class="card-text" style="padding: 0.5em;"><i class="fa fa-comment"></i> 33</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/2.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">동글동글한</h4>
			      <p class="card-text" style="padding: 0.5em;"><i class="fa fa-comment"></i> 12</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/3.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">더운날</h4>
			      <p class="card-text"  style="padding: 0.5em;"><i class="fa fa-comment"></i> 44</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/1.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">이상한 나라의 선인장</h4>
			      <p class="card-text" style="padding: 0.5em;"><i class="fa fa-comment"></i> 33</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/2.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">동글동글한</h4>
			      <p class="card-text" style="padding: 0.5em;"><i class="fa fa-comment"></i> 12</p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top img-fluid" src="./img/cover/3.jpg" alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title" style="padding: 0.5em;">더운날</h4>
			      <p class="card-text"  style="padding: 0.5em;"><i class="fa fa-comment"></i> 44</p>
			    </div>
			  </div>		  
			</div>
		</section>
		</div>
	</div>
</body>
</html>