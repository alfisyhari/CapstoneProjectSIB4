<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/styles/login-register.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/styles/responsive.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <main id="form-login" class="container-fluid min-vh-100">
      <section class="border border-black p-6">
        <form action="<?= base_url('index.php/Register/addUser') ?>" method="post" class="row g-3 m-auto">
          <div class="form-header d-flex justify-content-between">
            <div class="head-form mb-4">
              <p>Welcome!</p>
              <h2>Register</h2>
            </div>
            <div>
              <img src="<?= base_url('assets/image/marin_logo 1.svg') ?>" alt="Logo">
            </div>
          </div>
          <div class="col-md-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="col-md-12">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="col-md-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="col-md-12">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-control" id="gender" name="gender" required>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="col-md-12">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="col-12">
            <button class="btn btn-primary w-100 fs-4" type="submit">Submit</button>
          </div>
        </form>
      </section>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
