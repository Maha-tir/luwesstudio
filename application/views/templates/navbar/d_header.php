<div class="app-dashboard-header justify-content-center text-cv py-3">
    <?php if ($this->uri->segment(1) == "admin" && $this->uri->segment(2) == "change_password") { ?>
        <a href="<?= base_url("admin/edit_profile") ?>" class="btn-back">
            <div class="icon">
                <i class="bx bx-chevron-left"></i>
            </div>
            <span class="display">Back</span>
        </a>
    <?php } ?>
    <?php if ($this->uri->segment(1) == "admin" && $this->uri->segment(2) != "change_password") { ?>
        <a href="<?= base_url("admin/store") ?>" class="btn-back">
            <div class="icon">
                <i class="bx bx-chevron-left"></i>
            </div>
            <span class="display">Back</span>
        </a>
    <?php } ?>
    <?php if ($this->uri->segment(1) == "detail") { ?>
        <button class="btn-back" onclick="window.history.back()">
            <div class="icon">
                <i class="bx bx-chevron-left"></i>
            </div>
            <span class="display">Back</span>
        </button>
    <?php }; ?>
    <span class="dashboard-logo-name" style="font-family: Inter, sans-serif !important; font-weight: 600">
        <?= $header_name ?>
    </span>
    <?php if ($this->uri->segment(2) == "profile") { ?>
        <a href="<?= base_url("admin/edit_profile") ?>" class="btn-back" style="right: 3% !important; left: auto">
            <div class="icon">
                <ion-icon name="create-outline"></ion-icon>
            </div>
        </a>
    <?php } ?>
</div>