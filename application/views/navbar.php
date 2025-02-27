    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navbar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .navbar {
                background-color: #9C27B0!important;
                color: white !important;

                /* Dark Blue */
            }

                

            a {
                color: white !important;
                font-weight: 400 !important;
            }

            .custom-navbar .btn-primary {
                background-color: #e94560;
                border: none;
                font-weight: bold;
            }

            .custom-navbar .btn-primary:hover {
                background-color: #ff2e63;
            }
        </style>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="/c1/blog/view_all">My Blog Website</a>
                <a class="navbar-brand" href="/c1/api/contact"> Contact_Us</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">

                        <?php if (!$this->session->userdata('user')) : ?>
                            <li class="nav-item">
                                <a class="nav-link btn  " href="<?php echo base_url('auth/login'); ?>">Login</a>
                            </li>
                        <?php else : ?>

                            <li class="nav-item">
                                <a class="nav-link btn  " href="<?php echo base_url('auth/logout'); ?>">Logout</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>