<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"
		/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
		<title>Register</title>
	</head>
	<style>
		body {
			background-color: #000;
		}

		.card {
			width: 400px;
			border: none;
		}

		.btr {
			border-top-right-radius: 5px !important;
		}

		.btl {
			border-top-left-radius: 5px !important;
		}

		.btn-dark {
			color: #fff;
			background-color: #0d6efd;
			border-color: #0d6efd;
		}

		.btn-dark:hover {
			color: #fff;
			background-color: #0d6efd;
			border-color: #0d6efd;
		}

		.nav-pills {
			display: table !important;
			width: 100%;
		}

		.nav-pills .nav-link {
			border-radius: 0px;
			border-bottom: 1px solid #0d6efd40;
		}

		.nav-item {
			display: table-cell;
			background: #0d6efd2e;
		}

		.form {
			padding: 10px;
			height: 300px;
		}

		.form input {
			margin-bottom: 12px;
			border-radius: 3px;
		}

		.form input:focus {
			box-shadow: none;
		}

		.form button {
			margin-top: 20px;
		}
	</style>
	<body>
		<div class="d-flex justify-content-center align-items-center mt-5">
			<div class="card">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item text-center">
						<a
							>Register</a
						>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div
						class="tab-pane fade show active"
						id="pills-profile"
						role="tabpanel"
						aria-labelledby="pills-profile-tab"
					>
						<div class="form px-4">
							<input
								type="text"
								name="name"
								class="form-control"
								placeholder="Nama"
							/>

							<input
								type="date"
								name="dob"
								class="form-control"
								placeholder="Tanggal Lahir"
							/>

							<input
								type="text"
								name="gender"
								class="form-control"
								placeholder="Jenis Kelamin"
							/>

							<input
								type="text"
								name="email"
								class="form-control"
								placeholder="Email"
							/>

							<input
								type="text"
								name="username"
								class="form-control"
								placeholder="Username"
							/>

							<input
								type="text"
								name="password"
								class="form-control"
								placeholder="Password"
							/>

							<button class="btn btn-dark btn-block">Daftar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</body>
</html>
