<div class="app-dashboard-content">
    <?= $this->session->flashdata("error-message"); ?>
    <div class="content-padding pt-3">
        <form action="<?= base_url("admin/change_password") ?>" method="post">
            <div class="cfr-input-field">
                <label for="current_password" class="cfr-input-label">
                    Current Password
                </label>
                <input type="password" name="current_password" id="current_password" class="cfr-input-control" placeholder="Enter current password" />
            </div>
            <?= form_error('current_password', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>

            <div class="cfr-input-field">
                <label for="new_password" class="cfr-input-label">
                    New Password
                </label>
                <input type="password" name="new_password" id="new_password" class="cfr-input-control" placeholder="Set your new password" />
            </div>
            <?= form_error('new_password', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
            <div class="cfr-input-field">
                <label for="confirm_password" class="cfr-input-label">
                    Confirm Password
                </label>
                <input type="password" name="confirm_password" id="confirm_password" class="cfr-input-control" placeholder="Confirm your new password" />
            </div>
            <?= form_error('confirm_password', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
            <button type="submit" class="btn-save py-2 btn-block w-100 my-2">
                Set New Password
            </button>
        </form>
    </div>
</div>