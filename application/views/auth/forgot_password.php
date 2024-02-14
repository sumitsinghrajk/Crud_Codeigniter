<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            height: 100vh;
            padding-left:500px;
        }
        .form-container {
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="text-center"><?php echo lang('forgot_password_heading');?></h1>
            <p class="text-center"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
            <?php if (!empty($message)) { ?>
                  <div id="infoMessage" class="alert alert-info text-center"><?php echo $message;?></div>
            <?php } ?>

            <?php echo form_open("auth/forgot_password");?>

                <div class="form-group">
                    <label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label>
                    <?php echo form_input($identity, '', 'class="form-control"');?>
                </div>

                <p class="text-center"><?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-primary"');?></p>

            <?php echo form_close();?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
