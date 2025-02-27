<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <style>
        /* Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form Container */
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input,
        textarea {
            width: 100%;
            color: #9C27B0;

            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            background: #9C27B0;
            color: white;
            padding: 10px;
            margin: 10px;
            margin-top: 22px;
            border: none;
            border-radius: 22px;
            margin-top: 15px;
            cursor: pointer;

        }
        #filee{
            color: #9C27B0
        }

        button:hover {
            background: #9C27B0 !important
        }

        /* Image Preview */
        .image-preview {
            margin-top: 10px;
            display: flex;
            justify-content: center;
        }

        .image-preview img {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 5px;
        }

        .edit_blog {
            color: #9C27B0 !important;
        }
    </style>
</head>

<body>
    <?php $this->load->view('navbar1'); ?>


    <div class="container">
        <h2 class="edit_blog">Edit Blog</h2>
        <form action="<?php echo site_url('blog/update/' . $blog['id']); ?>" method="post" enctype="multipart/form-data">
            <label>Title:</label>
            <input type="text" name="title" value="<?php echo $blog['title']; ?>" required>    

            <label>Description:</label>
            <textarea name="description" required><?php echo $blog['description']; ?></textarea>
                                
            <label>Price:</label>
            <input type="number" name="price" value="<?php echo $blog['price']; ?>" required>

            <label>Image:</label>
            
            <input type="file" name="image" id="filee" style="color: #9C27B0;">
            <input type="hidden" name="old_image" value="<?php echo $blog['image']; ?>">

            <!-- Image Preview -->
            <div class="image-preview">
                <img src="<?php echo base_url($blog['image']); ?>" width="100">
            </div>

            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>