    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog Details</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
        <style>
            /* General Reset */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial, sans-serif;
            }

            /* Container Styling */
            .container1 {
                max-width: 1800px;
                margin: 10px auto;
                padding: 10px;
                background: #f9f9f9;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            /* Blog Title */
            h1 {
                align-items: center !important;
                text-align: center;
                text-transform: capitalize;
                font-size: 18px;
                color: #9C27B0;
                margin-bottom: 10px;
            }

            /* Author & Price */
            p {
                font-size: 16px;
                color: #555;
                line-height: 1.6;
            }

            /* Image Styling */
            img {
                display: block;
                width: 100%;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 5px;
                /* Ensures the image takes the full width of its container */
                height: 450px;
                object-fit: fill;
                /* Maintains the aspect ratio */
                margin: 20px 0;
                border-radius: 55px;
            }


            /* Back to Blog List Link */
            a {
                text-decoration: none !important;

                display: inline-block;
                text-decoration: none;
                color: white;
                background: #9C27B0;
                padding: 7px 9px;
                border-radius: 5px;
                margin-top: 1px;
                transition: background 0.3s ease;
            }

          
            
            .title {
                text-align: center;
                color: #555 !important;
            }

            .ti {
                display: flex;
                align-items: center;
                /* Align items vertically */
                justify-content: center;
                /* Center the title */
                gap: 20px;
                /* Add some spacing */
                margin: 5px;
                position: relative;
                /* Needed for absolute positioning of the link */
            }

                  .author_price{
                    display: flex;
            
                /* Align items vertically */
                justify-content: space-around;
                /* Center the title */
                /* Add some spacing */
                position: relative;

                  }


            .ti a {
                position: absolute;
                left: 0;
                /* Keeps the "Back to Blog List" link on the left */
            }

         
        </style>
    </head>

    <body>
        <?php $this->load->view('navbar') ; ?>

        <div class="container1 ">
            <div class="ti ">
                <a href="<?php echo site_url('blog/view_all'); ?>">Back to Blog List</a>
                <h1><strong class="title">Title: </strong><?php echo $blog['title']; ?></h1>
            </div>
            <img src="<?php echo base_url($blog['image']); ?>" alt="Blog Image">
           <div class="author_price" >
               <p><strong>Price:</strong> $<?php echo $blog['price']; ?></p>
           <p><strong>Author:</strong> <?php echo $blog['author']; ?></p>
           </div>
            <p><?php echo nl2br($blog['description']); ?></p>
        </div>

    </body>

    </html>