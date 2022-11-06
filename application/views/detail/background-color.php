<div class="app-dashboard-content">
    <div class="content-padding">
        <?php foreach ($background_color as $bg => $value) : ?>
            <form action="<?= base_url("detail/background_color/" . $value->id) ?>" method="post">
                <div class="cfr-input-field">
                    <label for="background_color" class="cfr-input-label">
                        Background Color
                    </label>
                    <input type="text" name="background_color" id="background_color" class="cfr-input-control" placeholder="Background Color" value="<?= $value->name ?>" autocomplete="off" />
                </div>
                <?= form_error('background_color', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
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