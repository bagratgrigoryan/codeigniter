
<!-- Section: Design Block -->
<section class="">
	<!-- Jumbotron -->
	<div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
		<div class="container">
			<div class="row gx-lg-5 align-items-center">
				<div class="col-lg-6 mb-5 mb-lg-0">
					<h1 class="my-5 display-3 fw-bold ls-tight" style="color: magenta">
						SoftConstruct <br />
					</h1>
					<h5 style="color: #5a0099">Payments Administrator Panel</h5>

				</div>

				<div class="col-lg-6 mb-5 mb-lg-0">
					<div class="card">

						<div class="card-body py-5 px-md-5">
							<?php
							if ($this->session->userdata('msg')){
								echo $this->session->userdata('msg');
							}
							?>
							<h1 style="color:#5a0099;">Sign Up Now</h1>
							<form method="post" action="<?= base_url('v1/register')?>">


								<!-- 2 column grid layout with text inputs for the first and last names -->
								<div class="row">
									<div class="col-md-6 mb-4">
										<div class="form-outline">
											<label class="form-label" for="firstName"></label>
											<input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" />
											<small style="color: red"><?= form_error("firstName")?></small>
										</div>
									</div>
									<div class="col-md-6 mb-4">
										<div class="form-outline">
											<label class="form-label" for="lastName"></label>
											<input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" />
											<small style="color: red"><?= form_error("lastName")?></small>
										</div>
									</div>
									<div class="col-md-6 mb-4">
										<div class="form-outline">
											<label class="form-label" for="email"></label>
											<input type="text" id="email"  name="email" class="form-control" placeholder="E-mail"/>
											<small style="color: red"><?= form_error("email")?></small>
										</div>
									</div>
									<div class="col-md-6 mb-4">
										<div class="form-outline">
											<label class="form-label" for="phone"></label>
											<input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" />
											<small style="color: red"><?= form_error("phone")?></small>
										</div>
									</div>
								</div>
								<div class="form-outline mb-4">
									<label class="form-label" for="password"></label>
									<input type="password" id="password" name="password" class="form-control" placeholder="Password" />
									<small style="color: red"><?= form_error("password")?></small>
								</div>

								<button type="submit" class="btn btn-primary btn-block mb-4">
									Sign up
								</button>
								<a  style="margin: 0 0 0 20px; text-decoration: none" href= "<?=base_url('v1') ?>">Log In</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Jumbotron -->
</section>

