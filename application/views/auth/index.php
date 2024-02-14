<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="<?= base_url() ?>index.php/auth/index" class="navbar-brand">Admin Dashboard</a>
        <a href="<?= base_url() ?>index.php/auth/logout" class="btn btn-danger">Logout</a>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4"><?php echo lang('index_heading');?></h1>
        <p class="lead"><?php echo lang('index_subheading');?></p>
                <?php if (!empty($message)) { ?>
                       <div id="infoMessage" class="alert alert-info"><?php echo $message;?></div>
                 <?php } ?>
                 <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('success'); ?>
                             </div>
                        <?php endif; ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th><?php echo lang('index_fname_th');?></th>
                        <th><?php echo lang('index_lname_th');?></th>
                        <th><?php echo lang('index_email_th');?></th>
                        <th><?php echo lang('index_groups_th');?></th>
                        <th><?php echo lang('index_status_th');?></th>
                        <th colspan="2"><?php echo lang('index_action_th');?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user):?>
                        <tr>
                            <td><?php echo ucfirst(htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'));?></td>
                            <td><?php echo ucfirst(htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'));?></td>
                            <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8');?></td>
                            <td>
                                <?php foreach ($user->groups as $group):?>
                                    <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')) ;?><br />
                                <?php endforeach?>
                            </td>
                            <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/".$user->id, lang('index_inactive_link'));?></td>
                            <td><?php echo anchor("auth/edit_user/".$user->id, 'Update', 'class="btn btn-primary"') ;?></td>
                            <td>
                                <button class="btn btn-danger" onclick="deleteConfirmation('<?php echo $user->id; ?>')">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>

        <p><?php echo anchor('auth/create_user', lang('index_create_user_link'), 'class="btn btn-success"')?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'), 'class="btn btn-primary"')?></p>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this user?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a id="deleteButton" href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function deleteConfirmation(userId) {
            var deleteUrl = '<?php echo base_url().'index.php/user/delete/' ?>' + userId;
            $('#confirmationModal #deleteButton').attr('href', deleteUrl);
            $('#confirmationModal').modal('show');
        }
    </script>
</body>
</html>
