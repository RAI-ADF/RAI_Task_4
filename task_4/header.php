<header>
  <div id="logo" class="menuUp">
    <h1>RAI</h1>
    <div id="navToggle"><a href="#">Menu</a></div>
  </div>
  <nav>
    <ul>
      <li><a href="/index.php">Home</a></li>
      <li><a href="/mutations/index.php">Mutations</a></li>
      <?php if ($_SESSION["user_id"] == "1") { ?>
        <li><a href="/users/index.php">Users</a></li>
      <?php } ?>
      <li>
        <a href="#">Welcome User
          <span class="toggle">Expand</span>
          <span class="caret"></span>
        </a>
        <nav>
          <ul>
            <li><a href="/login.php?logout">Logout</a></li>
          </ul>
        </nav>
      </li>
    </ul>
  </nav>
</header>
