<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background :white;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
        }
        .card {
            background:rgb(231, 13, 53);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        .card-header h1, .card-header h3 {
            margin: 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #ccc;
        }
        .form-group, .form-group1 {
            margin-bottom: 15px;
        }
        
    
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #aaa;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background: #007bff;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #aaa;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .btn-danger {
            background: #dc3545;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
        }
        .btn-danger:hover {
            background: #a71d2a;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Patient Registration</h1>
        </div>
        <div class="card-body">
            <form action="add1.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="Enter Address" required>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" required>
                        <option value="">--Select Gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Blood Group</label>
                    <select name="blood_group" required>
                        <option value="">--Select Blood Group--</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >Age </label>
                    <input type="number" name="Age" placeholder="Enter Age" required>
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" placeholder="Enter Mobile" required pattern="\d{10}" title="Enter 10 digit mobile number">
                </div>
                <div class="form-group">
                    <lable>Hospital</lable>
                    <input type="text"  name="Hospital" placeholder="Enter Hospital Addrss " required>

                </div>
                <input type="submit" name="submit" value="Register">
            </form>
        </div>
    </div>
<form action="add1.php" method="post">
</body>
</html>
