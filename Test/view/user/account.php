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
	<div class="row main col-sm-6 offset-sm-3">
		<div class="main-login main-center" style="    width: 100%;">
			<form class="form-horizontal" method="post" action="../../controller/UserController.php">

				<div class="form-group">
					<label for="email" class="cols-sm-2 control-label">이메일</label>
					<div >
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
							<input type="email" class="form-control" name="email" id="email" required placeholder="Enter your Email"/>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nickname" class="cols-sm-2 control-label">별명</label>
					<div >
						<div class="input-group">
							<span class="input-group-addon" style="    padding: 6px 13.5px;"><i class="fa fa-user fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="name" id="name" required placeholder="별명을 입력해주세요"/>
						</div>
					</div>
				</div>

				<div id="password" class="form-group">
					<label for="password" class="cols-sm-2 control-label">비밀번호</label>
					<div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
							<input onblur="confirmPassword();" type="password" class="form-control" name="password" placeholder="Enter your Password" required="required"/>
							<span class="glyphicon glyphicon-ok form-control-feedback" style="display: none;"></span>
						</div>
					</div>
				</div>

				<div id="confirm" class="form-group">
					<label for="confirm" class="cols-sm-2 control-label">비밀번호 확인</label>
					<div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
							<input onblur="confirmPassword();" type="password" class="form-control" name="confirm" placeholder="Confirm your Password" required="required"/>
							<span class="glyphicon glyphicon-ok form-control-feedback" style="display: none;"></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="submit">등록</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>