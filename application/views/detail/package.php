<div class="app-dashboard-content">
    <div class="content-padding">
        <?php foreach ($package as $pc => $value) : ?>
            <form action="<?= base_url("detail/package/" . $value->id) ?>" method="post">
                <div class="cfr-input-field">
                    <label for="package" class="cfr-input-label">
                        Package Name
                    </label>
                    <input type="text" name="package" id="package" class="cfr-input-control" placeholder="Package Name" value="<?= $value->name ?>" autocomplete="off" />
                </div>
                <?= form_error('package', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
                <div class="cfr-input-field">
                    <label for="max_person" class="cfr-input-label">Max Person</label>
                    <input type="text" name="max_person" id="max_person" class="cfr-input-control" placeholder="Max Person" value="<?= $value->max_person ?>" autocomplete="off" />
                </div>
                <?= form_error('max_person', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
                <div class="d-flex align-items-center justify-content-end mt-2">
                    <button type="submit" class="btn-save">Save Changes</button>
                </div>
            </form>
        <?php endforeach ?>
    </div>
</div>