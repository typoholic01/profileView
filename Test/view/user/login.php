<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bootstrap</title>
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

</head>
<body>
<script src="../../js/password-confirm.js"></script>
<!-- 공백체크 -->
<script type="text/javascript">
function checkLength(obj, min) {
    memberNo = obj.value;

    memberNo = "" + memberNo;

    if( memberNo.length > min){
        memberNo = memberNo.substring(0,min);
        obj.value = memberNo;
    }
}
</script>
	<!-- Navbar -->
	<?php
	   include '../common/topnav.php';
	?>
	
<div class="container" style="    margin-top: 1em;">
	<div class="row main col-sm-4 offset-sm-4">
		<div class="main-login main-center" style="    width: 100%;">
			<form id="loginForm" class="form-horizontal" method="POST" action="../../controller/LoginAf.php">
			
				<!-- 이메일 -->
				<div class="form-group">
					<label for="email" class="cols-sm-2 control-label">이메일</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="uid" id="uid" placeholder="Enter your Email"/>
						</div>
					</div>
				</div>
				
				<!-- 비밀번호 -->
				<div id="password" class="form-group">
					<label for="password" class="cols-sm-2 control-label">비밀번호</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Enter your Password"/>
							<span class="glyphicon glyphicon-ok form-control-feedback" style="display: none;"></span>
						</div>
					</div>
				</div>
				
				<!-- 버튼 -->
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg btn-block login-button">로그인</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>