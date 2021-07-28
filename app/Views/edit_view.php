<?= $this->include('templates/header') ?>

<style>
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
</style>

<body>
    <div class="container mt-5">
        <form method="post" id="update_user" name="update_user" 
        action="<?= site_url('/update') ?>">
            <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" required class="form-control" value="<?php echo $user_obj['name']; ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required class="form-control" value="<?php echo $user_obj['email']; ?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">Update User</button>
            </div>
        </form>
        <a class="btn btn-danger btn-block" href="<?= site_url('/users-list') ?>">Go Back</a>
    </div>

    <script>
        $(document).ready( function () {
            if ($("#update_user").length > 0) {
                $("#update_user").validate({
                    rules: {
                        name: {
                            required: true,
                        },
                        email: {
                            required: true,
                            maxlength: 60,
                            email: true,
                        },
                    },
                    messages: {
                        name: {
                            required: "Name is required.",
                        },
                        email: {
                            required: "Email is required.",
                            email: "It does not seem to be a valid email.",
                            maxlength: "The email should be or equal to 60 chars.",
                        },
                    },
                })
            }
        });
    </script>
<?= $this->include('templates/footer') ?>
