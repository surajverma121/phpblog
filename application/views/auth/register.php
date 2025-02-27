<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: rgb(217, 129, 233);
      background-size: cover;
    }

    .card {
      background: #f4e7f8;
      /* White with transparency */
      border-radius: 1rem;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h2 {
      color: #9C27B0;
      align-items: center !important;

    }

    .loginHere {
      margin-left: 5px;
      font-size: large;
      color: #9C27B0
    }

    .btn {
      background-color: #9C27B0;
      color: white;
    }

    .btn:hover {
      color: white;
      font-weight: bold;
      background-color: rgb(166, 37, 188);
    }
  </style>
</head>

<body>

  <section class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
            <div class="row g-0">
              <!-- Left Image -->
              <div class="col-md-6 d-none d-md-block">
                <img src="https://img.freepik.com/free-vector/sign-up-concept-illustration_114360-7875.jpg"
                  alt="Register Image" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
              </div>

              <!-- Right Form -->
              <div class="col-md-6 d-flex align-items-center">
                <div class="card-body p-4 text-black">
                  <form action="<?= base_url('auth/register_process') ?>" method="post">

                
                    <div class="d-flex align-items-center justify-content-center mb-3">
                      <i class="fas fa-user-plus fa-2x me-3" style="color: #ff6219;"></i>
                      <h2 class="fw-bold">Register</h2>
                    </div>

                    <h5 class="fw-normal mb-3" style="letter-spacing: 1px;">Create your account</h5>

                    <?php if ($this->session->flashdata('error')): ?>
                      <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
                    <?php endif; ?>

                    <!-- Name -->
                    <div class="form-outline mb-3">
                      <input type="text" name="name" class="form-control" required />
                      <label class="form-label">Full Name</label>
                    </div>

                    <!-- Email -->
                    <div class="form-outline mb-3">
                      <input type="email" name="email" class="form-control" required />
                      <label class="form-label">Email Address</label>
                    </div>

                    <!-- Password -->
                    <div class="form-outline mb-3">
                      <input type="password" name="password" class="form-control" required />
                      <label class="form-label">Password</label>
                    </div>

                    <!-- Role Selection -->
                    <div class="form-outline mb-3">
                      <select name="role" class="form-control" required>
                        <option value="" disabled selected>Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                      </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3">
                      <button class="btn  btn-lg w-100" type="submit">Register</button>
                    </div>

                    <p class="mb-4 text-center">Already have an account?
                      <a href="<?= base_url('auth/login') ?>" class="loginHere ">Login here</a>
                    </p>

                    <div class="text-center">
                      <a href="#" class="small text-muted">Terms of use</a> |
                      <a href="#" class="small text-muted">Privacy policy</a>
                    </div>

                  </form>
                </div>
              </div> <!-- End Form Column -->
            </div> <!-- End Row -->
          </div> <!-- End Card -->
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>