<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Marin - User Management App</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/image/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url()?>assets/image/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=base_url()?>assets/image/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?=base_url()?>assets/styles/home.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/styles/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>

    <?php
    $this->load->view('apps/navbar');
    ?>

    <main>
        <section id="weatherInputCity" class="container pt-5">
            <div class="mb-3">
                <h1>User Management</h1>
                <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-end">
                      <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User <i class="fa fa-plus"></i></button>
                      <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form tambah user -->
                                    <form action="<?= base_url('index.php/App/addUser') ?>" method="post">
                                        <div class="mb-3">
                                            <label for="addName" class="form-label">Name</label>
                                            <input type="text" required class="form-control" id="addName" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addUsername" class="form-label">Username</label>
                                            <input type="text" required class="form-control" id="addUsername" name="username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addPassword" class="form-label">Password</label>
                                            <input type="password" required class="form-control" id="addPassword" name="password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addGender" class="form-label">Gender</label>
                                            <select required class="form-control" id="addGender" name="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addGender" class="form-label">Role</label>
                                            <select required class="form-control" id="addGender" name="role">
                                                <option value="USER">USER</option>
                                                <option value="ADMIN">ADMIN</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addPhone" class="form-label">Phone</label>
                                            <input type="text" required class="form-control" id="addPhone" name="phone">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add User</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                      </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>USERNMAE</th>
                                    <th>PHONE</th>
                                    <th>GENDER</th>
                                    <th>ROLE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1; foreach ($dataUser as $key) { ?>
                                <tr>
                                    <td><?=$index?></td>
                                    <td><?= $key['name'] ?></td>
                                    <td><?= $key['username'] ?></td>
                                    <td><?= $key['phone'] ?></td>
                                    <td><?= $key['gender'] ?></td>
                                    <td><?= $key['role'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal<?=$key['id']?>">Update</button>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?=$key['id']?>">Delete</button>
                                    </td>

                                </tr>
                                <?php
                                      $index++;
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section id="weatherCardContainer" class="mt-5 mx-auto">
            <div class="card-group justify-content-center text-center row row-cols-1 row-cols-md-3 row-cols-lg-5 g-3"></div>
        </section>
        <?php foreach ($dataUser as $key) { ?>
        <!-- Modal Update -->
        <div class="modal fade" id="updateModal<?=$key['id']?>" tabindex="-1" aria-labelledby="updateModalLabel<?=$key['id']?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel<?=$key['id']?>">Update User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form Update -->
                        <form action="<?=base_url('index.php/App/update/'.$key['id'])?>" method="post">
                            <div class="mb-3">
                                <label for="updateName<?=$key['id']?>" class="form-label">Name</label>
                                <input type="text" required class="form-control" id="updateName<?=$key['id']?>" name="name" value="<?= $key['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="updateUsername<?=$key['id']?>" class="form-label">Username</label>
                                <input type="text" required class="form-control" id="updateUsername<?=$key['id']?>" name="username" value="<?= $key['username'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="updatePassword<?=$key['id']?>" class="form-label">Password</label>
                                <input type="password" required class="form-control" id="updatePassword<?=$key['id']?>" name="password" value="<?= $key['password'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="updateGender<?=$key['id']?>" class="form-label">Gender</label>
                                <select required class="form-control" id="updateGender<?=$key['id']?>" name="gender">
                                    <option value="Male" <?php if ($key['gender'] === 'Male') echo 'selected' ?>>Male</option>
                                    <option value="Female" <?php if ($key['gender'] === 'Female') echo 'selected' ?>>Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="updateGender<?=$key['id']?>" class="form-label">Role</label>
                                <select required class="form-control" id="updateGender<?=$key['id']?>" name="role">
                                    <option value="USER" <?php if ($key['gender'] === 'USER') echo 'selected' ?>>USER</option>
                                    <option value="ADMIN" <?php if ($key['gender'] === 'ADMIN') echo 'selected' ?>>ADMIN</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="updatePhone<?=$key['id']?>" class="form-label">Phone</label>
                                <input type="text" required class="form-control" id="updatePhone<?=$key['id']?>" name="phone" value="<?= $key['phone'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="deleteModal<?=$key['id']?>" tabindex="-1" aria-labelledby="deleteModalLabel<?=$key['id']?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel<?=$key['id']?>">Delete User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this user?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <a href="<?=base_url('index.php/App/delete/'.$key['id'])?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </main>

    <?php
    $this->load->view('apps/footer');
    ?>

    <div id="preloader">
        <div id="preloader-logo"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/scripts/home.js"></script>
    <script src="<?=base_url()?>assets/scripts/navigation.js"></script>
    <script src="<?=base_url()?>assets/scripts/weather-card.js" type="module"></script>
</body>

</html>