<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 20px;
        }
        .card {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-header h3 {
            margin: 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #007bff;
            color: #007bff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: left;
        }
        td {
            padding: 10px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 14px;
        }
        .edit-btn {
            background-color: #28a745;
        }
        .delete-btn {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="card-header">
        <h3>Patient List</h3>
    </div>
    <div class="card-body">
        <?php
        $result = $conn->query("SELECT * FROM patient ORDER BY id DESC");
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>Age</th>
                        <th>Mobile</th>
                        <th>Hospital</th>
                        
                    </tr>
                  </thead>
                  <tbody>";
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                echo "<tr>
                        <td>{$id}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['blood_group']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['mobile']}</td>
                        <td>{$row['hospital']}</td>
                        
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "No patient found.";
        }
        ?>
    </div>
</div>
</body>
</html>
