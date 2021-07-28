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
        <form method="post" id="add_create" name="add_create" 
        action="<?= site_url('/submit-form') ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" required placeholder="Enter Name" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required placeholder="Enter Email" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">Add User</button>
                
            </div>
        </form>
        <a class="btn btn-danger btn-block" href="<?= site_url('/users-list') ?>">Go Back</a>
    </div>

    <script>
        $(document).ready( function () {
            if ($("#add_create").length > 0) {
                $("#add_create").validate({
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
