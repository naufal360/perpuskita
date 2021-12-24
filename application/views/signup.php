<img src="<?= base_url('assets/img/logsig-img.png') ?>" class="col-8 d-flex align-items-center justify-content-center" style="position: absolute; opacity: 60%;">
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container justify-content-center">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4 font-weight-bold">Let's Sign Up</h5>
                            <p class="text-center small">Fill the blank with your information</p>
                            <?php if ($this->session->flashdata('pesan') == 'username_exist') { ?>
                                <div class="alert alert-danger" role="alert">
                                    Username already taken!
                                </div>
                            <?php } elseif ($this->session->flashdata('pesan') == 'unmatching_password') { ?>
                                <div class="alert alert-danger" role="alert">
                                    Unmatched / Too Short Password!
                                </div>
                            <?php }  ?>
                        </div>
                        <form class="row g-3 needs-validation" action="" method="post" novalidate>
                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="username" class="form-control" id="username" autocomplete="off" required>
                                    <div class="invalid-feedback">Please enter your username.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" autocomplete="off" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>
                            <div class="col-12">
                                <label for="password2" class="form-label">Confirm Password</label>
                                <input type="password" name="password2" class="form-control" id="password2" autocomplete="off" required>
                                <div class="invalid-feedback">Please confirm your password!</div>
                            </div>
                            <div class="col-12">
                                <br>
                            </div>
                            <div class="col-12">
                                <button class="btn w-100" type="submit" name="signup" style="background-color: #52784F; color: white;">Create</button>
                            </div>
                        </form>
                        <div class="col-12">
                            <p class="small mb-0">Already Have Account? <a href="<?= base_url('perpuskita/login') ?>">Login Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8-md-6 d-flex flex-column align-items-center justify-content-center">
                <img src="<?= base_url('assets/img/signup-img.png'); ?>">
            </div>
        </div>
    </div>
</section>