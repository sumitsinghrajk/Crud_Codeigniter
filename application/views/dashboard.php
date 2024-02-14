<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
    <div class="bg-grey">
        <div class="navbar navbar-dark bg-primary">
            <a href="#" class="navbar-brand" style="padding-right:10px;">User Dashboard</a>
            <a href="<?= base_url() ?>index.php/auth/logout" class="btn btn-danger">Logout</a>
        </div>
    <div class="container" style="padding-top: 10px;">
        <h3>Welcome to Your Dashboard</h3>
        <p>This is a simple dashboard page for you.</p>
        <!-- Add more content as needed -->
    </div>
</body>
</html>
