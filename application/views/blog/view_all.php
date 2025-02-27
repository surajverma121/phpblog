<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Blogs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0px;
                  margin-bottom: 10px;
                  padding-bottom: 0px;
            text-align: center;
        }

        h2 {
            color: #9C27B0 !important;
            text-transform: uppercase;
            margin-bottom: 20px;
            background-color: rgb(252, 249, 252);
            padding: 10px;
            text-align: center;
        }

        .blog-container {
            max-width: 1200px;
            margin: 0 auto;
            margin-bottom: 20px;
            display: grid;

            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .blog-entry {
            display: flex;
            flex-direction: column;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(221, 10, 10, 0.1);
            text-align: left;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s ease-out forwards;
        }

        .blog-entry img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .blog-content {
            padding: 10px;
        }

        /* .blog-content h6 {
            text-transform: capitalize;
            color: #9C27B0;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 10px;
            line-height: 1.5;

        } */
        h6 {
            color: #9C27B0 !important;
            line-height: 1.5;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 20px;
        }

        .blog-content p {
            color: #555;
            line-height: 1.5;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 50px;
        }

        .author {
            color: #9C27B0;
            font-weight: bold;
        }

        a.button {
            display: inline-block;
            padding: 5px 6px;
            text-decoration: none;
            background: #9C27B0 !important;
            color: #fff;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.button:hover {
            background: rgb(196, 4, 230) !important;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .blog-container {
                grid-template-columns: 1fr;
            }

            .blog-entry {
                flex-direction: column;
                text-align: center;
            }

            .blog-content {
                text-align: left;
            }

            .blog-content h3,
            .blog-content p {
                white-space: normal;
            }
        }

        .blog-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .left {
            flex: 1;
            /* Takes available space */
        }

        .right {
            flex-shrink: 0;
            /* Prevents button from shrinking */
        }
    </style>
</head>

<body>

    <?php $this->load->view('navbar'); ?>

    <h2>All Blogs</h2>

    <div class="blog-container">
        <?php foreach ($blogs as $index => $blog): ?>

            <div class="blog-entry" style="animation-delay: <?= $index * 0.2 ?>s;">
                <?php if (!empty($blog['image'])): ?>
                    <img src="<?php echo base_url($blog['image']); ?>" alt="Blog Image">
                <?php endif; ?>
                <div class="blog-content">
                    <h6 title="<?php echo $blog['title']; ?>"><?php echo $blog['title']; ?></h6>
                    <p title="<?php echo $blog['price']; ?>"><strong class="title"> &#8377;</strong><?php echo $blog['price']; ?></p>
                    <p title="<?php echo $blog['description']; ?>"><?php echo $blog['description']; ?></p>
                    <p title="<?php echo $blog['id']; ?>"><?php echo $blog['id']; ?></p>
                    <div class="blog-info">
                        <div class="left">
                            <p><strong class="author">Author:</strong> <?php echo $blog['author']; ?></p>
                        </div>
                        <div class="right">
                            <a href="<?php echo site_url('blog/blog_details/' . $blog['id']); ?>" class="button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php $this->load->view('footer'); ?>

</body>

</html>