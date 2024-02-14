<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Group</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Ensure the body takes at least full height of viewport */
            margin: 0; /* Reset margin to remove extra space */
            padding-top: 56px; /* Add padding top to account for fixed navbar */
        }
        .container {
            width: 400px; /* Adjust the width of the container as needed */
            padding: 20px;
            border: 1px solid #ced4da; /* Add border for better visibility */
            background-color: #fff; /* Add your desired background color */
            border-radius: 8px; /* Add rounded corners */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <a href="<?= base_url() ?>index.php/auth/index" class="navbar-brand">Admin Dashboard</a>
        <a href="<?= base_url() ?>index.php/auth/logout" class="btn btn-danger">Logout</a>
    </nav>
    <div class="container">
        <h1 class="text-center"><?php echo lang('create_group_heading');?></h1>
        <p class="text-center"><?php echo lang('create_group_subheading');?></p>
        <?php if (!empty($message)) { ?>
            <div id="infoMessage" class="alert alert-info text-center"><?php echo $message;?></div>
        <?php } ?>

        <?php echo form_open("auth/create_group");?>

            <div class="form-group">
                <?php echo lang('create_group_name_label', 'group_name');?> <br />
                <?php echo form_input($group_name, '', 'class="form-control"');?>
            </div>

            <div class="form-group">
                <?php echo lang('create_group_desc_label', 'description');?> <br />
                <?php echo form_input($description, '', 'class="form-control"');?>
            </div>

            <p class="text-center"><?php echo form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-primary"');?></p>

        <?php echo form_close();?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
