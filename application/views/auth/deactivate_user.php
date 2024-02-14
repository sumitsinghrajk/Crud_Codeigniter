<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deactivate User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <a href="<?= base_url() ?>index.php/auth/index" class="navbar-brand">Admin Dashboard</a>
        <a href="<?= base_url() ?>index.php/auth/logout" class="btn btn-danger">Logout</a>
    </nav>
    <div class="container" style="margin-top: 70px;"> <!-- Adjust the margin-top to accommodate the fixed navbar -->
        <h1 class="text-center"><?php echo lang('deactivate_heading');?></h1>
        <p class="text-center"><?php echo sprintf(lang('deactivate_subheading'), $user->{$identity}); ?></p>

        <?php echo form_open("auth/deactivate/".$user->id);?>

            <div class="form-group text-center">
                <label for="confirm"><?php echo lang('deactivate_confirm_label');?></label>
                <div class="form-check form-check-inline">
                    <input type="radio" name="confirm" id="confirm_yes" value="yes" checked="checked" class="form-check-input">
                    <label for="confirm_yes" class="form-check-label"><?php echo lang('deactivate_confirm_y_label');?></label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="confirm" id="confirm_no" value="no" class="form-check-input">
                    <label for="confirm_no" class="form-check-label"><?php echo lang('deactivate_confirm_n_label');?></label>
                </div>
            </div>

            <?php echo form_hidden($csrf); ?>
            <?php echo form_hidden(['id' => $user->id]); ?>

            <p class="text-center"><?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-primary"');?></p>

        <?php echo form_close();?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
