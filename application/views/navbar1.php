<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Navbar</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
  
    <style>
        /* Custom Navbar Styles */
        .custom-navbar {
            background-color: #9C27B0 !important; /* Dark Blue */
        }

        .custom-navbar .navbar-brand {
            color: white !important;
            font-size: 20px;
            padding-left: 10px;
            font-weight: bold;
        }

        .viewuser{
          color: white !important;
            font-size: 15px;
        cursor: pointer;
            align-items: center;
            text-align: center;
            margin-top: 10px;
            padding-left: 10px;
            font-weight: bold;

        }
        .custom-navbar .btn-primary {
            background-color: #e94560;
            border: none;
            font-weight: bold;
        }

        .custom-navbar .btn-primary:hover {
            background-color: #ff2e63;
        }

        /* Centering Navbar */
        .custom-navbar .container-fluid {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

       
    </style>
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar" >
  <div class="container-fluid d-flex justify-content-between">
  <a class="navbar-brand margin" href="<?= base_url('allblogs') ?>">Admin Blog panel</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="<?= base_url('auth/view_all_users') ?>" class="viewuser">View all users</a>
    <a href="<?= base_url('contact/all_query') ?>" class="viewuser">Contact_Query</a>


    <a href="<?= base_url('auth/logout') ?>" class="btn btn-primary">Logout</a>

  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
