<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
        }

        h2 {
            color: #9C27B0 !important;
            align-items: center;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .table-container {
            max-width: 1700px;
            margin: 0 auto;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        th,
        td {
            padding: 10px;
            color: #9C27B0;
            border: 1px solid #ddd;
        }

        th {
            background-color: #9C27B0;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .delete {
            display: inline-block;
            margin-left: 10px;
            padding: 8px 12px;
            background-color: #e74c3c;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 10px;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .delete:hover {
            background-color: #c0392b;
        }

        .toggle-role {
            display: inline-block;
            padding: 10px 13px;
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            border: 5px solid darkgreen #9C27B0;
            color: #9C27B0;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
            background: transparent;
        }

        .toggle-role::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: #9C27B0;
            transition: all 0.3s ease-in-out;
            z-index: -1;
        }

        .toggle-role:hover::before {
            left: 0;
        }

        .toggle-role:hover {
            color: white;
            border-color:rgb(105, 7, 180);
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <?php $this->load->view('navbar1'); ?>

    <h2>User List</h2>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Change Role</th>
                    <th> Delete </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['role']; ?></td>
                        <td>
                            <a href="<?php echo site_url('auth/toggleRole/' . $user['id']); ?>" class="toggle-role">
                                <?php echo ($user['role'] == 'admin') ? 'Change to User' : 'Change to Admin'; ?>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo site_url('auth/deleteUser/' . $user['id']); ?>" class="delete" onclick="return confirm('Are you sure?')">Delete</a>

                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>