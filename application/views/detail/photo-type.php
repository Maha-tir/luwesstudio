<div class="app-dashboard-content">
    <div class="content-padding">
        <?php foreach ($photo_type as $pt => $value) : ?>
            <form action="<?= base_url("detail/photo_type/" . $value->id) ?>" method="post">
                <div class="cfr-input-field">
                    <label for="photo_type" class="cfr-input-label">
                        Photo Type
                    </label>
                    <input type="text" name="photo_type" id="photo_type" class="cfr-input-control" placeholder="Photo Type Name" value="<?= $value->name ?>" autocomplete="off" />
                </div>
                <?= form_error('photo_type', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>

                <div class="cfr-input-field">
                    <label for="status" class="cfr-input-label">Status</label>
                    <div class="app-select-dropdown">
                        <div class="app-select-dropdown-header">
                            <div class="app-select-placeholder">
                                <input type="text" name="status" id="status" class="app-select-input-placeholder" placeholder="Please Choose" value="<?= $value->status ?>" autocomplete="off" />
                            </div>
                            <div class="app-select-icon-placeholder">
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                        </div>
                        <ul class="app-select-dropdown-menu">
                            <li class="app-select-dropdown-list select-option">
                                Available
                            </li>
                            <li class="app-select-dropdown-list select-option">
                                Unavailable
                            </li>
                        </ul>
                    </div>
                </div>
                <?= form_error('status', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
                <div class="d-flex align-items-center justify-content-end mt-2">
                    <button type="submit" class="btn-save">Save Changes</button>
                </div>
            </form>
        <?php endforeach ?>
    </div>
</div>