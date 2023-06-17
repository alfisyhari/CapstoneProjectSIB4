<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/styles/login-register.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/styles/responsive.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
</head>
<body>
    <main id="form-login" class="container-fluid min-vh-100">
        <section class="border border-black p-6">
            <form class="row g-3 m-auto" action="<?= site_url('ForgotPassword/updatePw') ?>" method="post">
                <input type="hidden" name="_method" value="POST">
                <div class="form-header d-flex justify-content-between">
                    <div class="head-form mb-4">
                        <p>Forgot password!</p>
                        <h2>Find and Replace</h2>
                    </div>
                    <div>
                        <img src="<?php echo base_url()?>assets/image/marin_logo 1.svg" alt="Logo">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col-5 py-3">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 fs-4" type="submit">Find and Replace</button>
                </div>
            </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
