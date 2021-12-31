	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-3 mt-5">
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4 kotak p-5">
				<div class="row justify-content-center">
					<div class=" text-center mb-3">
						<h2 class="heading-section">Login Page</h2>
						<?= $this->session->flashdata('message'); ?>
					</div>
				</div>
				<div class="login-wrap p-0">
					<form method="post" action="<?php echo base_url('index.php/auth/login');?>" class="signin-form form-style">
						<div class="input-group">
							<input id="email" name="email" type="text" class="form-control" placeholder="Email Address" value="<?= set_value('email'); ?>" >
						</div>
						<div class="d-flex justify-content-center text-danger">
							<small><?= form_error('email'); ?></small>	
						</div>

						<div class="input-group mt-1">
							<input id="password" name="password" type="password" class="form-control" placeholder="Password" >
						</div>
						<div class="d-flex justify-content-center text-danger">
							<small><?= form_error('password'); ?></small>	
						</div>

						<div class="form-group mt-5">
							<button type="submit" class="form-control btn btn-primary submit px-3">Masuk</button>
						</div>
					</form>

					<p class="w-100 text-center mt-3">&mdash; Belum punya akun? &mdash;</p>
					<div class="d-flex justify-content-end">
						<a href="<?php echo base_url('index.php/auth/registration') ?>" class="px-2 py-2 mr-md-1">Register</a>
					</div>
				</div>
			</div>
		</div>
	</div>