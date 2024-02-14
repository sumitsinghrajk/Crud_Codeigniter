<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h1 class="text-center"><?php echo lang('login_heading');?></h1>
                <?php if (!empty($message)) { ?>
                  <div id="infoMessage" class="alert alert-danger text-center"><?php echo $message;?></div>
                <?php } ?>
                <p class="text-center"><?php echo lang('login_subheading');?></p>


                <?php echo form_open("auth/login");?>

                    <div class="form-group">
                        <?php echo lang('login_identity_label', 'identity');?>
                        <?php echo form_input($identity, '', 'class="form-control"');?>
                    </div>

                    <div class="form-group">
                        <?php echo lang('login_password_label', 'password');?>
                        <?php echo form_input($password, '', 'class="form-control"');?>
                    </div>

                    <div class="form-group form-check">
                        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember" class="form-check-input"');?>
                        <?php echo lang('login_remember_label', 'remember');?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block"><?php echo lang('login_submit_btn');?></button>

                <?php echo form_close();?>

                <p class="text-center mt-3"><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
            </div>
        </div>
    </div>
</body>
</html>
