<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Contact Queries</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }

        h2 {
            margin-top: 12px;
            text-align: center;
            color: #9C27B0 !important;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th
         {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 50px;
        }
        td{
            border: 1px solid #ddd;
            padding: 10px;
           max-width: 280px; /* Adjust width as needed */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
     
        th {
            background-color: #9C27B0 !important;
            color: white;
            text-transform: capitalize;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h6 {
            margin: 0;
            padding: 5px;
        }



        .delete {
            text-decoration: none;
            color: white;
              height: 30px;
              width: 58px;
              align-items: center ;
              justify-content: center;
            display: inline-block;
            background-color: #9C27B0;
            border-radius: 4px;
            transition: background 0.3s ease-in-out;
            padding-left: 7px;
        }

        .delete:hover {

            color:rgba(43, 37, 45, 0.70);
            background-color: rgb(205, 6, 245);

        }
    </style>
</head>

<body>
    <?php $this->load->view('navbar1'); ?>
    <h2>All Contact  Enquiry </h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Message</th>
            <th>action</th>
        </tr>

        <?php foreach ($querys as $index => $query): ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td title="<?php echo htmlspecialchars($query['name']); ?>">
                    <?php echo htmlspecialchars($query['name']); ?>
                </td>
                <td><?php echo htmlspecialchars($query['mobile']); ?></td>
                <td><?php echo htmlspecialchars($query['email']); ?></td>
                <td><?php echo htmlspecialchars($query['message']); ?></td>
                <td>
                    <a href="<?php echo site_url('contact/contact_delete/' . $query['id']); ?>" class="delete" onclick="return confirm('Are you sure?')">Delete</a>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>