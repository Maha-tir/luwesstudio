<div class="app-dashboard-content">
    <?= $this->session->flashdata("profile-message") ?>
    <div class="content-padding pt-3">
        <div class="app-profile-info">
            <div class="app-profile-img">
                <img src="<?php if ($admin["gender"] == "male") {
                                echo base_url("assets/img/avatar/male/" . $admin["image"]);
                            } else {
                                echo base_url("assets/img/avatar/female/" . $admin["image"]);
                            } ?>" alt="_profile-img" />
            </div>
            <div class="app-profile-details">
                <h1 class="m-0" style="font-size: 19px; font-weight: 600">
                    <?= $admin["full_name"] ?>
                </h1>
                <p class="m-0" style="font-size: 14px">Administrator</p>
            </div>
        </div>
        <table class="table">
            <tbody>
                <tr class="border-0">
                    <td class="border-0">
                        <div class="d-flex align-items-center">
                            <div class="list-icon"><i class="bx bx-user"></i></div>
                            <span class="details">Full Name</span>
                        </div>
                    </td>
                    <td class="border-0"><span class="ellipsis">:</span></td>
                    <td class="border-0">
                        <span class="details"><?= $admin["full_name"] ?></span>
                    </td>
                </tr>
                <tr class="border-0">
                    <td class="border-0">
                        <div class="d-flex align-items-center">
                            <div class="list-icon"><i class="bx bx-user-pin"></i></div>
                            <span class="details">Username</span>
                        </div>
                    </td>
                    <td class="border-0"><span class="ellipsis">:</span></td>
                    <td class="border-0">
                        <span class="details">@<?= $admin["username"] ?></span>
                    </td>
                </tr>
                <tr class="border-0">
                    <td class="border-0">
                        <div class="d-flex align-items-center">
                            <div class="list-icon"><i class="bx bx-envelope"></i></div>
                            <span class="details">Email</span>
                        </div>
                    </td>
                    <td class="border-0"><span class="ellipsis">:</span></td>
                    <td class="border-0">
                        <span class="details"><?= $admin["email"] ?></span>
                    </td>
                </tr>
                <tr class="border-0">
                    <td class="border-0">
                        <div class="d-flex align-items-center">
                            <div class="list-icon">
                                <i class="bx bx-calendar-check"></i>
                            </div>
                            <span class="details">Joined on</span>
                        </div>
                    </td>
                    <td class="border-0"><span class="ellipsis">:</span></td>
                    <td class="border-0">
                        <span class="details"><?= date("d F Y", $admin["date_created"]) ?></span>
                    </td>
                </tr>
                <tr class="border-0">
                    <td class="border-0">
                        <div class="d-flex align-items-center">
                            <div class="list-icon"><i class="bx bx-star"></i></div>
                            <span class="details">Role</span>
                        </div>
                    </td>
                    <td class="border-0"><span class="ellipsis">:</span></td>
                    <td class="border-0">
                        <span class="details">Administrator</span>
                    </td>
                </tr>
                <tr class="border-0">
                    <td class="border-0">
                        <div class="d-flex align-items-center">
                            <div class="list-icon"><i class="bx bx-infinite"></i></div>
                            <span class="details">Gender</span>
                        </div>
                    </td>
                    <td class="border-0"><span class="ellipsis">:</span></td>
                    <td class="border-0">
                        <span class="details"><?= ucfirst($admin["gender"]) ?></span>
                    </td>
                </tr>
                <tr class="border-0">
                    <td class="border-0">
                        <div class="d-flex align-items-center">
                            <div class="list-icon">
                                <i class="bx bx-badge-check"></i>
                            </div>
                            <span class="details">Status</span>
                        </div>
                    </td>
                    <td class="border-0"><span class="ellipsis">:</span></td>
                    <td class="border-0">
                        <span class="details <?php if ($admin["is_active"] == 1) {
                                                    echo "success";
                                                } else {
                                                    echo "danger";
                                                } ?>"><?php if ($admin["is_active"] == 1) {
                                                            echo "Activated";
                                                        } else {
                                                            echo "Not Activated";
                                                        } ?></span>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="<?= base_url("auth/logout") ?>" class="logout-btn logout-action">Logout</a>
    </div>
</div>