<div class="app-dashboard-header">
    <div class="dashboard-logo">
        <div class="icon">
            <ion-icon name="camera"></ion-icon>
        </div>
        <span class="dashboard-logo-name">LuwesStudio</span>
    </div>
    <div class="dropdown">
        <button class="btn-toggle-dropdown dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="avatar avatar-sm">
                <img src="<?php if ($admin["gender"] == "male") {
                                echo base_url("assets/img/avatar/male/" . $admin["image"]);
                            } else {
                                echo base_url("assets/img/avatar/female/" . $admin["image"]);
                            } ?>" alt="_profile-img" />
            </div>
        </button>
        <ul class="dropdown-menu app-dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="app-profile-dropdown">
                <div class="avatar avatar-lg">
                    <img src="<?php if ($admin["gender"] == "male") {
                                    echo base_url("assets/img/avatar/male/" . $admin["image"]);
                                } else {
                                    echo base_url("assets/img/avatar/female/" . $admin["image"]);
                                } ?>" alt="_profile-img" />
                </div>
                <div class="d-block">
                    <h1 class="txt mb-0" style="font-size: 14px; color: var(--dark-color)">
                        <?= $admin["full_name"] ?>
                    </h1>
                    <p class="txt m-0" style="font-size: 13px; color: var(--dark-color)">
                        <?= $admin["email"] ?>
                    </p>
                </div>
            </div>
            <li>
                <a class="dropdown-item app-dropdown-link" href="<?= base_url("admin/store") ?>">
                    <div class="icon">
                        <i class='bx bx-store'></i>
                    </div>
                    Store
                </a>
            </li>
            <li>
                <a class="dropdown-item app-dropdown-link" href="<?= base_url("admin/profile") ?>">
                    <div class="icon">
                        <i class='bx bx-user'></i>
                    </div>
                    My Profile
                </a>
            </li>
            <li>
                <a class="dropdown-item app-dropdown-link logout-action" href="<?= base_url("auth/logout") ?>">
                    <div class="icon">
                        <ion-icon name="power-outline"></ion-icon>
                    </div>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>