<!DOCTYPE html>
<html>
<head>
    <title>Email Activation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <nav class="navbar navbar-dark bg-dark">
        <a href="<?= base_url() ?>index.php/auth/index" class="navbar-brand">Admin Dashboard</a>
        <a href="<?= base_url() ?>index.php/auth/logout" class="btn btn-danger">Logout</a>
    </nav>
    <div class="text-center">
        <h1><?php echo sprintf(lang('email_activate_heading'), $identity);?></h1>
        <p><?php echo sprintf(lang('email_activate_subheading'), anchor('auth/activate/'. $id .'/'. $activation, lang('email_activate_link')));?></p>
    </div>
</body>
</html>
