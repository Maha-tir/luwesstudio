<div class="app-dashboard-content">
    <div class="content-padding pt-3">
        <?= form_open_multipart("admin/edit_profile") ?>
        <div class="app-profile-info profile-info-edit">
            <div class="app-profile-img">
                <img src="<?php if ($admin["gender"] == "male") {
                                echo base_url("assets/img/avatar/male/" . $admin["image"]);
                            } else {
                                echo base_url("assets/img/avatar/female/" . $admin["image"]);
                            } ?>" alt="_profile-img" class="profile-img" />
                <input type="file" name="image" id="image" class="get-file" hidden />
                <button type="button" id="get-file" class="get-file-btn">
                    <i class="bx bx-edit-alt"></i>
                </button>
            </div>
        </div>

        <div class="cfr-input-field">
            <label for="email" class="cfr-input-label d-flex align-items-center justify-content-between"> Email address <a href="<?= base_url("admin/change_password") ?>" class="text-link my-1">
                    Change Password
                </a></label>
            <input type="text" name="email" id="email" class="cfr-input-control" value="<?= $admin["email"] ?>" readonly />
        </div>

        <div class="cfr-input-field">
            <label for="full_name" class="cfr-input-label"> Full Name </label>
            <input type="text" name="full_name" id="full_name" class="cfr-input-control" value="<?= $admin["full_name"] ?>" />
        </div>
        <?= form_error('full_name', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
        <div class="cfr-input-field">
            <label for="username" class="cfr-input-label"> Username </label>
            <input type="text" name="username" id="username" class="cfr-input-control" value="<?= $admin["username"] ?>" />
        </div>
        <?= form_error('username', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
        <button type="submit" class="btn-save py-2 btn-block w-100 my-2">
            Save Changes
        </button>
        </form>
    </div>
</div>