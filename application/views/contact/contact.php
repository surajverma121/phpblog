<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            height: 100vh;
            margin: 0;
            justify-content: center;
            /* Centers horizontally */
            align-items: center;
            /* Centers vertically */
        }

        section {
            display: flex;
            justify-content: center;
            /* Centers horizontally */
            align-items: center;
        }

        .container1 {
            margin-top: 60px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 700px;
        }

        h2 {
            color: #9C27B0 !important ;
            text-align: center;
        }

        p {
            margin: 10px 0;
        }

        label {
            font-weight: bold;
            text-align: left ;
            display: block;
            margin-top: 10px;
            text-align: left;
            color: #9C27B0;

        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            margin-top: 15px;
            background: #9C27B0;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background: rgb(196, 4, 230) !important;

        }

        .success-message {
            color: green;
        }

        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <?php $this->load->view('navbar');  ?>
    <section>

        <div class="container1">
            <h2>Contact Us</h2>

            <?php if ($this->session->flashdata('success')): ?>
                <p class="success-message"><?php echo $this->session->flashdata('success'); ?></p>
            <?php endif; ?>

            <?php echo validation_errors('<p class="error-message">', '</p>'); ?>

            <form action="<?php echo base_url('contact/submit'); ?>" method="post">
                <label>Name:</label>
                <input type="text" name="name" required>
                            
                <label>Mobile:</label>
                <input type="number" name="number" required>

                <label>Email:</label>
                <input type="email" name="email" required>


                <label>Message:</label>
                <textarea name="message" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    
</body>
<?php if ($this->session->flashdata('success')): ?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            title: "Success!",
            text: "<?php echo $this->session->flashdata('success'); ?>",
            icon: "success",
            confirmButtonText: "OK"
        });
    });
</script>
<?php endif; ?>


</html>