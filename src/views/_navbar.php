<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MyDiary</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="./"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<?php if (!empty($_SESSION["user_id"])): ?>
        <li><a href="./article.php"><span class="glyphicon glyphicon-th"></span> Diary</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./logout.php"><span class="glyphicon glyphicon-check"></span> Logout</a></li>
<?php else: ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./login.php"><span class="glyphicon glyphicon-check"></span> Login</a></li>
        <li><a href="./register.php"><span class="glyphicon glyphicon-edit"></span> Sign in</a></li>
<?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
