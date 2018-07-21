<a class="navbar-brand" href="#">
    <img width="30%" src="../images/logo/144.png" alt="Alamaak">
  </a>
    <a class="Nav-marge" href="../index.php">Home</a>
    <a class="Nav-marge" href="#">Why Us</a>
    <a class="Nav-marge" href="#">Pricing</a>
    <a class="Nav-marge" href="#">Contact</a>
    <?php
	if (isset($_SESSION['email']))
	{
		echo "<a class='Nav-marge' href='../../logout.php'>Logout</a>";
	}
	else
	{
		echo "<a class='Nav-marge' href='../../login.php'>Login</a>";
	}