<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Login</h2>
            <p>Please fill credentials to login</p>
            <form action="<?php echo URLROOT ?>/users/login" method="POST">

            <div class="form-group">
                <label for="my-input">Email <sup>*</sup></label>
                <input id="email" value="<?php echo $data['email'] ?>" class="form-control form-control-lg 
                <?php echo(!empty($dats['email_err'])) ? 'is-invalid' : '' ;?>" type="email" name="email">
                <span class="invalid-feedback"><?php $data['email_err'] ?></span>
            </div>

            <div class="form-group">
                <label for="my-input">Password <sup>*</sup></label>
                <input id="password" value="<?php echo $data['password'] ?>" class="form-control form-control-lg 
                <?php echo(!empty($dats['password_err'])) ? 'is-invalid' : '' ;?>" type="password" name="password">
                <span class="invalid-feedback"><?php $data['password_err'] ?></span>
            </div>

            <div class="row">
            <div class="col1">
            </div>
                <input type='submit' class="btn btn-success btn-block">
            </div>
            <div class="col1">
                <a href="<?php echo URLROOT  ?>/users/register" class="btn btn-light btn-block">No account? Register</a>
            </div>
           </form>
        </div>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>