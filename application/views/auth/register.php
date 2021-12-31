	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-3 mt-5">
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4 kotak p-5">
				<div class="row justify-content-center">
					<div class=" text-center mb-3">
						<h2 class="heading-section">Register </h2>
					</div>
				</div>
				<div class="login-wrap p-0">

					<form method="POST" action="<?= base_url('index.php/auth/registration');?>">
						<div class="input-group">
							<input id="nama" name="nama" type="text" class="form-control" placeholder="Full name" value="<?= set_value('nama') ?>">
						</div>
						<div class="d-flex justify-content-center text-danger">
							<small><?= form_error('nama'); ?></small>	
						</div>

						<div class="input-group">
							<input id="username" name="username" type="text" class="form-control" placeholder="Username" value="<?= set_value('username') ?>">
						</div>
						<div class="d-flex justify-content-center text-danger">
							<small><?= form_error('username'); ?></small>	
						</div>

						<div class="input-group mt-1">
							<input id="email" name="email" type="email" class="form-control" placeholder="Email Address" value="<?= set_value('email') ?>">
						</div>
						<div class="d-flex justify-content-center text-danger">
							<small><?= form_error('email'); ?></small>	
						</div>

						<div class="input-group mt-1">
							<input id="password1" name="password1" type="password" class="form-control" placeholder="Password">
						</div>
						<div class="d-flex justify-content-center text-danger">
							<small><?= form_error('password1'); ?></small>	
						</div>
						
						<div class="input-group mt-1 mb-5">
							<input id="password2" name="password2" type="password" class="form-control" placeholder="Repeat Password">
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary submit px-3">Daftar</button>
						</div>
					</form>

					<p class="w-100 text-center mt-3">&mdash; Sudah ada akun? &mdash;</p>
					<div class="d-flex justify-content-end">
						<a href="<?php echo base_url('index.php/auth/login') ?>" class="px-2 py-2 mr-md-1">Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>