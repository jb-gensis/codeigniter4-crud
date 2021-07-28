<?= $this->include('templates/header') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/user-form') ?>" class="btn btn-outline-success mb-2">Add User</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
    <div class="mt-3">
        <table class="table table-hover" id="users-list">
            <thead>
                <tr>
                    <th hidden>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($users): ?>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td hidden><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td class="text-center">
                            <a href="<?php echo base_url('edit-view/'.$user['id']);?>" class="btn btn-outline-primary btn-sm">Edit</a>
                            <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-outline-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
 
<?= $this->include('templates/footer') ?>
