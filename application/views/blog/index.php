<!DOCTYPE html>
<html>

<head>
    <title>Blog List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        .container {
            width: 120%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        a.button {
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
            background: #9C27B0 !important;
            color: #fff;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        a.button:hover {
            background: rgb(196, 4, 230) !important;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: white;
        }

        th,
        td {
            padding: 12px;
            color: #9C27B0;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
             td.title{
                white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 30px;

             }

        td.description {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 30px;
        }


        th {
            background: #9C27B0 !important;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background: #f1f1f1;
        }

        td img {
            border-radius: 5px;
            height: 80px;
            width: 90px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }

        .actions a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            margin: 2px;
            display: inline-block;
        }

        .edit {
            background: #9C27B0 !important;
            color: white;

        }

        .delete {
            background: #dc3545;
            color: white;
        }

        .edit:hover {
            color: white;
            background: #9C27B0 !important;

        }

        .delete:hover {
            background: #c82333;
        }

        .all_Blogs {
            color: #9C27B0;

        }

        .blog {
            display: flex;
            justify-content: space-between;
            padding-left: 10px;
            padding-right: 20px;
        }
    </style>
</head>

<body>
    <?php $this->load->view('navbar1'); ?>

    <div class="container">
        <div class="blog">
            <h2 class="all_Blogs">All Blogs</h2>
            <a href="<?php echo site_url('blog/create'); ?>" class="button">Create New Blog</a>

        </div>
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($blogs as $blog): ?>
                <tr>
                    <td class="title"><?php echo $blog['title']; ?></td>
                    <td class="description"><?php echo $blog['description']; ?></td>

                    <td><?php echo $blog['price']; ?></td>
                    <td><img src="<?php echo base_url($blog['image']); ?>" width="100"></td>
                    <td class="actions">
                        <a href="<?php echo site_url('blog/edit/' . $blog['id']); ?>" class="edit">Edit</a>
                        <a href="<?php echo site_url('blog/delete/' . $blog['id']); ?>" class="delete" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>