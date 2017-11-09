<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="/Test/index.php">기프트 스퀘어</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
         <a class="nav-link" href="/Test/index.php">메인</a>  
	  </li>
      <li class="nav-item">
<!--         <a class="nav-link" href="#">회원가입</a> -->
      </li> 
    </ul>    
      <ul class="nav navbar-nav navbar-right">
        <!-- 로그인 O -->
    	<li><span class="glyphicon glyphicon-user" style="color: silver;"></span> 
    	<a href="${pageContext.request.contextPath }/user/${login.seq }" style="    display: -webkit-inline-box; padding-left: inherit;padding-right: inherit;">
    	<?php 
    	echo print_r($_SESSION);
    	?>
    	</a> 
    	<span class="text-light" style="color: darkgray;">님 안녕하세요</span>
    	</li>
    	<li><a href="/Test/controller/Logout.php"><span class="glyphicon glyphicon-log-out"></span> 로그아웃</a></li>
      </ul>
  </div> 
</nav>