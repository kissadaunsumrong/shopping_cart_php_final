<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index_admin.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item active">
      <a class="nav-link" href="../logout.php" onclick ="return confirm('ต้องการออกจากระบบหรือไม่ ?')">ออกจากระบบ </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disable " href="../backend/index.php">โหมดผู้ดูแลระบบ</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="index_admin.php"method="GET">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="q">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>