<?php
$data = $this->session->userdata('loggedIn');

?>


<div  class="navbar navbar-expand-lg navbar-light bg-light" style="display: flex; justify-content: space-between">
	<div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">ORDER</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">


					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							PARTNERS
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" style="font-size: 13px" href="<?=base_url('v1/dashboard/addPartner')?>">Add New Partner</a>
							<a class="dropdown-item" style="font-size: 13px" href="<?= base_url('v1/dashboard/edit')?>">Edit Partner</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Payment
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" style="font-size: 13px" href="#">Add New Payment</a>
							<a class="dropdown-item" style="font-size: 13px" href="#">Edit Payment</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Relation
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" style="font-size: 13px" href="#">Add Payment to Partner</a>
							<a class="dropdown-item" style="font-size: 13px" href="#">Edit Partner's Payment</a>
							<a class="dropdown-item" style="font-size: 13px" href="#">Payment Look Up</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div style="display: flex">
		<a class="nav nav-link disabled" ><?= $data['first_name'] . " " . $data['last_name'] ?>
		<a class="nav nav-link " href="<?= base_url('v1')?>">LogOut</a>
	</div>
</div>


