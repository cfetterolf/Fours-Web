<ul class="nav navbar-nav navbar-right">
	<li><p class="navbar-text" style="padding-left: 10px;"><? echo 'Hello, '+$_SESSION['firstname']; ?></p></li>
    <li>
        <div class="btn-nav" style="padding-right: 10px;">

        	<a href="landing.php?logout=1" class="btn btn-small navbar-btn" href="landing.php" style="color: white;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
        </div>
    </li>
</ul>