<ul class="nav navbar-nav flex-row">
	<li class="dropdown">
		<button class="btn btn-primary dropdown-toggle border-0" type="button" data-toggle="dropdown">Invoice
			<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="view.php">Invoice List</a></li>
			<li><a class="dropdown-item" href="invoice.php">Create Invoice</a></li>
		</ul>
	</li>
	<ul class="nav navbar-nav flex-row">

		<li class="dropdown">
			<button class="btn btn-primary dropdown-toggle border-0" type="button" data-toggle="dropdown">Menu</button>
			<ul class="dropdown-menu">
				<li><a href="#" class="dropdown-item">what</a></li>
				<li><a href="#" class="dropdown-item">How</a></li>
			</ul>

		</li>
	</ul>

	<?php
	if (!empty($_SESSION['register_id'])) { ?>
		<li class="dropdown">
			<button class="btn btn-secondary dropdown-toggle border-0" type="button" data-toggle="dropdown">Logged in as: <?php echo $_SESSION['name']; ?>
				<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Account</a></li>
				<li><a class="dropdown-item" href="logout.php">Logout</a></li>
			</ul>
		</li>
	<?php } ?>
</ul>
<br /><br /><br /><br />