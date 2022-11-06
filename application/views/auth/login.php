<div class="auth-header pb-1">
    <p class="auth-title">Welcome to Luwesstudio Admin 👋</p>
    <p class="auth-subtitle">
        Please sign-in to your account and start the adventure
    </p>
</div>
<div class="auth-body pt-1">
    <?= $this->session->flashdata("message"); ?>
    <form action="<?= base_url("auth/login") ?>" method="post" class="auth-form-validation">
        <div class="auth-input-field">
            <label for="email" class="auth-input-label">Email address</label>
            <input type="text" class="auth-input-control" name="email" id="email" placeholder="example@gmail.com" value="<?= set_value("email") ?>" />
        </div>

        <?= form_error('email', '<span class="text-form-error">
            <div class="error-icon">
              <ion-icon name="alert-circle-outline"></ion-icon>
            </div>', '</span>'); ?>

        <div class="auth-input-field">
            <label for="password" class="auth-input-label">Password</label>
            <input type="password" class="auth-input-control" name="password" id="password" placeholder="Password" />
        </div>

        <?= form_error('password', '<span class="text-form-error">
            <div class="error-icon">
              <ion-icon name="alert-circle-outline"></ion-icon>
            </div>', '</span>'); ?>

        <div class="d-flex align-items-center justify-content-end mt-2">
            <a href="<?= base_url("auth/forgot_password") ?>" class="text-link">
                Forgot password?
            </a>
        </div>
        <button type="submit" class="ath-btn-sgc">Login</button>
    </form>
    <p class="text-center text-grey my-3" style="font-size: 14px; color: #889196">
        Don't have any account?
        <a href="<?= base_url("auth/register") ?>" class="text-link">Create new account</a>
    </p>
</div>