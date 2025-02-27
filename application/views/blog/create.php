<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #9C27B0 !important;
            
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background: #9C27B0 !important;

            color: white;
            border: none;
            padding: 10px;
            margin-top: 15px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<?php $this->load->view('navbar1'); ?>
<div class="container">
    <h2 >Create Blog</h2>
    <form action="<?php echo site_url('blog/store'); ?>" method="post" enctype="multipart/form-data">
        <label>Title:</label>
        <input type="text" name="title" required>
        
        <label>Description:</label>
        <textarea name="description" required></textarea>
        
        <label>Price:</label>
        <input type="number" name="price" required>
        
        <label>Image:</label>
        <input type="file" name="image">
        
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
