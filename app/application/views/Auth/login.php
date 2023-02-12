<section class="">
	<!-- Jumbotron -->
	<div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
		<div class="container">
			<div class="row gx-lg-5 align-items-center">
				<div class="col-lg-6 mb-5 mb-lg-0">
					<h1 class="my-5 display-3 fw-bold ls-tight" style="color: magenta">
						SoftConstruct <br />
					</h1>
					<h5 style="color: #5a0099">Payments Administration Panel</h5>
				</div>

				<div class="col-lg-6 mb-5 mb-lg-0">
					<div class="card">
						<?= $this->session->userdata('err')?>
						<div class="card-body py-5 px-md-5">
							<form method="post" action="<?= base_url('v1/dashboard')?>">
								<!-- 2 column grid layout with text inputs for the first and last names -->

								<h1 style="color:#5a0099;">Log In Now</h1>
								<div class="form-outline mb-4">
									<label class="form-label" for="email"></label>
									<input type="email" id="email" name="email" class="form-control" placeholder="E-mail" />
									<small style="color: red"><?= form_error("email")?></small>
								</div>
								<div class="form-outline mb-4">
									<label class="form-label" for="password"></label>
									<input type="password" id="password" name="password" class="form-control" placeholder="Password" />
									<small style="color: red"><?= form_error("password")?></small>
								</div>
								<button type="submit" class="btn btn-primary btn-block mb-4">
									LogIn
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Jumbotron -->
</section>

