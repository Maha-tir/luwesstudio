<div class="auth-header">
    <p class="auth-title">Create your account</p>
    <p class="auth-subtitle">
        Create your account and become part of us 🚀
    </p>
</div>
<div class="auth-body">
    <form action="<?= base_url("auth/register") ?>" method="post" class="auth-form-validation">
        <div class="auth-input-field">
            <label for="full_name" class="auth-input-label">Full Name</label>
            <input type="text" class="auth-input-control" name="full_name" id="full_name" placeholder="Jhon Doe" value="<?= set_value("full_name") ?>" />
        </div>

        <?= form_error('full_name', '<span class="text-form-error">
            <div class="error-icon">
              <ion-icon name="alert-circle-outline"></ion-icon>
            </div>', '</span>'); ?>

        <div class="auth-input-field">
            <label for="username" class="auth-input-label">Username</label>
            <input type="text" class="auth-input-control" name="username" id="username" placeholder="jhon_12" value="<?= set_value("username") ?>" />
        </div>

        <?= form_error('username', '<span class="text-form-error">
            <div class="error-icon">
              <ion-icon name="alert-circle-outline"></ion-icon>
            </div>', '</span>'); ?>

        <div class="auth-input-field">
            <label for="email" class="auth-input-label">Email address</label>
            <input type="text" class="auth-input-control" name="email" id="email" placeholder="example@gmail.com" value="<?= set_value("email") ?>" />
        </div>

        <?= form_error('email', '<span class="text-form-error">
            <div class="error-icon">
              <ion-icon name="alert-circle-outline"></ion-icon>
            </div>', '</span>'); ?>

        <div class="auth-input-field">
            <label for="gender" class="cfr-input-label">Gender</label>
            <div class="app-select-dropdown">
                <div class="app-select-dropdown-header">
                    <div class="app-select-placeholder">
                        <input type="text" name="gender" id="gender" class="app-select-input-placeholder" placeholder="Your gender" value="<?= set_value("gender") ?>" />
                    </div>
                    <div class="app-select-icon-placeholder">
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                </div>
                <ul class="app-select-dropdown-menu">
                    <li class="app-select-dropdown-list select-option">Male</li>
                    <li class="app-select-dropdown-list select-option">Female</li>
                </ul>
            </div>
        </div>

        <?= form_error('gender', '<span class="text-form-error">
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

        <p style="margin: 0; font-size: 13px; color: #7c7c7c">
            Password of at least 8 characters using a combination of letters
            a-z, numbers and symbols
        </p>

        <button type="submit" class="ath-btn-sgc">Create account</button>
    </form>
    <p class="text-center text-grey my-3" style="font-size: 14px; color: #889196">
        Already have an account?
        <a href="<?= base_url("auth/login") ?>" class="text-link">Login instead</a>
    </p>
</div>