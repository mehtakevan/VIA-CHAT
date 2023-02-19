    <div class="login">
        <div class="col-sm-12 col-md-4 bg-blue border rounded p-4 shadow-sm">
            <form method="post" action="assets/php/actions.php?login">
                <div class="d-flex justify-content-center">
                    <img src="assets/images/Via_chat.png" alt="" width="310" height="90">
                </div>
                <br>
                <h1 class="h4 mb-3 fw-normal text-center">Sign In</h1>

                <div class="form-floating">
                    <input type="text" name="username_email" value="<?=showFormData('username_email')?>" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">Username / Email</label>
                </div>
                <?=showError('username_email')?>
                <div class="form-floating mt-3">
                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <?=showError('password')?>
                <?=showError('checkuser')?>

                <br>
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Sign In</button>
                    <a href="?signup" class="text-decoration-none">Create New Account</a>
                </div>
                <br>
                <a href="?forgotpassword&newfp" class="text-decoration-none form-floating mt-3">Forgot Password ?</a>
            </form>
        </div>
    </div>

