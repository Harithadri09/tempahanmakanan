<div class="container col-8 px-4 py-5" style="margin-top: 5rem;">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-md-10 mx-auto col-lg-6">
            <form action="<?= base_url('login') ?>" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
                <div class="text-center">
                    <img src="<?= base_url('assets/img/happylemon.png') ?>" alt="" width="200" height="200"></br>
                </div>
                <h1 class="mb-3 fw-bold text-center">HAPPY LEMON</h1>
                <?= $this->session->flashdata('message'); ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>" autocomplete="off">
                    <label for="floatingInput">Username</label>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="text-center">
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Login</button>
                    <hr class="my-4">
                    <small class="text-muted">By clicking Login, you agree to the terms of use.</small></br>
                    <p class="text-muted">&copy; copyright 2023</p>
                </div>
            </form>
        </div>
    </div>
</div>