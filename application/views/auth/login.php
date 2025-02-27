<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(217, 129, 233);
        }

        .card {
            border-radius: 1rem;
        }

        .login-btn {
            background-color: #9C27B0;
            color: white;
            width: 100%;
        }

        .login-btn:hover {
            background-color: rgb(166, 37, 188);
            font-weight: bold;
        }

        .logo_sign {
            display: flex;
            font-size: medium;
            font-weight: 500;
            color: #9C27B0;
        }

        .form-control:focus {
            border-color: #9C27B0;
            box-shadow: 0 0 5px rgba(156, 39, 176, 0.5);
        }
    </style>
</head>
<body>

<section class="vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card shadow">
                    <div class="row g-0">
                        <!-- Image Section (Hidden on Small Screens) -->
                        <div class="col-md-5 d-none d-md-block">
                            <img src="https://images.pexels.com/photos/6981086/pexels-photo-6981086.jpeg?auto=compress&cs=tinysrgb&w=600"
                                 alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem; object-fit: cover;">
                        </div>

                        <!-- Form Section -->
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5">
                                <form action="<?= base_url('auth/login_process') ?>" method="post">
                                    <div class="logo_sign">
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                                    </div>

                                    <!-- Error Message -->
                                    <?php if ($this->session->flashdata('error')): ?>
                                        <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
                                    <?php endif; ?>

                                    <!-- Email Input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email address</label>
                                        <input type="email" name="email" id="email" class="form-control form-control-lg" required>
                                    </div>

                                    <!-- Password Input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" required>
                                    </div>

                                    <!-- Login Button -->
                                    <div class="mb-4">
                                        <button class="btn login-btn btn-lg" type="submit">Login</button>
                                    </div>

                                    <!-- Register & Links -->
                                    <p class="mb-2" style="color: #393f81;">Don't have an account?
                                        <a href="<?= base_url('auth/register') ?>" class="text-decoration-none" style="color: #9C27B0;">Register here</a>
                                    </p>
                                    <a href="#" class="small text-muted">Terms of use</a> | 
                                    <a href="#" class="small text-muted">Privacy policy</a>
                                </form>
                            </div>
                        </div> <!-- Form Section End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
