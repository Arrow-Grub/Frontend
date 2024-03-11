<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./Asset/css/Header1.css" />
  <link rel="stylesheet" href="./Asset/css/styles.css" />
  <script src="./Asset/js/index.js" async></script>
</head>
<body>
  <!--Code for NAVBAR (Page-1,step-1)-->
  <div id="head1">
    <header>
      <div class="logo">ARROWGRUB</div>
      <nav>
        <ul>
          <li>
            <a href="./index.html" class="active">Home</a>
          </li>
          <li>
            <a href="./BookT.html">Book table</a>
          </li>
          <li>
            <a href="./about.html">About</a>
          </li>
          <li>
            <a href="./addrest.html">Add restaurant</a>
          </li>
          <?php
          session_start();
          if(isset($_SESSION['username'])) {
              echo '<li>Welcome, ' . $_SESSION['username'] . '</li>';
              echo '<li><a href="./logout.php">Logout</a></li>';
          } else {
              echo '<div class="btnclass1">
                      <a href="./login.html">
                        <button>Login</button>
                      </a>
                    </div>';
              echo '<div class="btnclass2">
                      <a href="./signup1.html">
                        <button>Signup</button>
                      </a>
                    </div>';
          }
          ?>
        </ul>
      </nav>
      <label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </label>
    </header>
  </div>
</body>
</html>