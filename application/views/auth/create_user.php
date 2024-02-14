<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color: #f8f9fa;
        }
        .navbar {
            width: 100%;
        }
        #container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-primary {
            width: 100%;
        }
        .form-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ced4da;
            background-color: #fff;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="<?= base_url() ?>index.php/auth/index" class="navbar-brand">Admin Dashboard</a>
        <a href="<?= base_url() ?>index.php/auth/logout" class="btn btn-danger">Logout</a>
    </nav>
    <div id="container">
        <div class="form-container">
            <h1><?php echo lang('create_user_heading');?></h1>
            <p><?php echo lang('create_user_subheading');?></p>

            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open("auth/create_user");?>

            <div class="form-group">
                <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                <?php echo form_input($first_name);?>
            </div>

            <div class="form-group">
                <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                <?php echo form_input($last_name);?>
            </div>

            <?php if ($identity_column !== 'email') : ?>
                <div class="form-group">
                    <?php echo lang('create_user_identity_label', 'identity');?> <br />
                    <?php echo form_error('identity');?>
                    <?php echo form_input($identity);?>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <?php echo lang('create_user_company_label', 'company');?> <br />
                <?php echo form_input($company);?>
            </div>

            <div class="form-group">
                <?php echo lang('create_user_email_label', 'email');?> <br />
                <?php echo form_input($email);?>
            </div>

            <div class="form-group">
                <?php echo lang('create_user_phone_label', 'phone');?> <br />
                <?php echo form_input($phone);?>
            </div>

            <div class="form-group">
                <?php echo lang('create_user_password_label', 'password');?> <br />
                <?php echo form_input($password);?>
            </div>

            <div class="form-group">
                <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                <?php echo form_input($password_confirm);?>
            </div>

            <div class="form-group">
                <?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary"');?>
            </div>

            <?php echo form_close();?>
        </div>
    </div>
</body>
</html>
