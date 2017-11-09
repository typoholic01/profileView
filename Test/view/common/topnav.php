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
	<form class="form-inline my-2 my-lg-0">
      <button class="btn btn-success my-2 my-sm-0" type="submit" style="    cursor: pointer;"><i class="fa fa-sign-in"></i> 로그인</button>
    </form>
	<form action="/Test/view/user/account.php" method="get" class="form-inline my-2 my-lg-0" style="    margin-left: 1em;">
      <button class="btn btn-success my-2 my-sm-0" type="submit" style="    cursor: pointer;"><i class="fa fa-user-plus"></i> 회원가입</button>
    </form>
  </div> 
</nav>