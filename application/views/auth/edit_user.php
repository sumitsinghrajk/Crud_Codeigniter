<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        .navbar {
            width: 100%;
            margin-bottom: 20px;
        }
        .container {
            width: 100%;
            max-width: 600px; /* Adjust as needed */
            padding-top: 50px; /* Adjust as needed */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="<?= base_url() ?>index.php/auth/index" class="navbar-brand">Admin Dashboard</a>
        <a href="<?= base_url() ?>index.php/auth/logout" class="btn btn-danger">Logout</a>
    </nav>
    <div class="container">
        <h1 class="text-center"><?php echo lang('edit_user_heading');?></h1>
        <p class="text-center"><?php echo lang('edit_user_subheading');?></p>
        <?php if (!empty($message)) { ?>
            <div id="infoMessage" class="alert alert-info text-center"><?php echo $message;?></div>
        <?php } ?>

        <?php echo form_open(uri_string());?>

            <div class="form-group">
                <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
                <?php echo form_input($first_name, '', 'class="form-control"');?>
            </div>

            <div class="form-group">
                <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
                <?php echo form_input($last_name, '', 'class="form-control"');?>
            </div>

            <div class="form-group">
                <?php echo lang('edit_user_company_label', 'company');?> <br />
                <?php echo form_input($company, '', 'class="form-control"');?>
            </div>

            <div class="form-group">
                <?php echo lang('edit_user_phone_label', 'phone');?> <br />
                <?php echo form_input($phone, '', 'class="form-control"');?>
            </div>

            <div class="form-group">
                <?php echo lang('edit_user_password_label', 'password');?> <br />
                <?php echo form_input($password, '', 'class="form-control"');?>
            </div>

            <div class="form-group">
                <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
                <?php echo form_input($password_confirm, '', 'class="form-control"');?>
            </div>

            <?php if ($this->ion_auth->is_admin()): ?>
                <h3><?php echo lang('edit_user_groups_heading');?></h3>
                <?php foreach ($groups as $group):?>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="groups[]" value="<?php echo $group['id'];?>" <?php echo (in_array($group, $currentGroups)) ? 'checked' : ''; ?>>
                        <label class="form-check-label"><?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8');?></label>
                    </div>
                <?php endforeach?>
            <?php endif ?>

            <?php echo form_hidden('id', $user->id);?>
            <?php echo form_hidden($csrf); ?>

            <p class="text-center"><?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-primary"');?></p>

        <?php echo form_close();?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
