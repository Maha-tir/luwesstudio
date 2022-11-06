<div class="app-dashboard-bottom-bar">
    <ul class="app-dashboard-nav-menu">
        <li class="app-dashboard-nav-list">
            <a href="<?= base_url("admin/dashboard") ?>" class="app-dashboard-nav-link <?php if ($this->uri->segment(2) == "dashboard") {
                                                                                            echo "active";
                                                                                        } ?>">
                <div class="icon"><i class="bx <?php if ($this->uri->segment(2) == "dashboard") {
                                                    echo "bxs-grid-alt";
                                                } else {
                                                    echo "bx-home-alt";
                                                } ?> "></i></div>
                <span class="display">Dashboard</span>
            </a>
        </li>
        <li class="app-dashboard-nav-list">
            <a href="<?= base_url("admin/customer") ?>" class="app-dashboard-nav-link <?php if ($this->uri->segment(2) == "customer") {
                                                                                            echo "active";
                                                                                        } ?>">
                <div class="icon"><i class="bx <?php if ($this->uri->segment(2) == "customer") {
                                                    echo "bxs-user";
                                                } else {
                                                    echo "bx-user";
                                                } ?>"></i></div>
                <span class="display">Customer</span>
            </a>
        </li>
        <li class="app-dashboard-nav-list">
            <a href="<?= base_url("admin/request_booking") ?>" class="app-dashboard-nav-link <?php if ($this->uri->segment(2) == "request_booking") {
                                                                                                    echo "active";
                                                                                                } ?>">
                <span class="badge-nav-link">10</span>
                <div class="icon"><i class="bx <?php if ($this->uri->segment(2) == "request_booking") {
                                                    echo "bxs-bell";
                                                } else {
                                                    echo "bx-bell";
                                                } ?>"></i></div>
                <span class="display">Request Book</span>
            </a>
        </li>
        <li class="app-dashboard-nav-list">
            <a href="<?= base_url("admin/store") ?>" class="app-dashboard-nav-link <?php if ($this->uri->segment(2) == "store") {
                                                                                        echo "active";
                                                                                    } ?>">
                <div class="icon"><i class="bx <?php if ($this->uri->segment(2) == "store") {
                                                    echo "bxs-store";
                                                } else {
                                                    echo "bx-store";
                                                } ?>"></i></div>
                <span class="display">Store</span>
            </a>
        </li>
    </ul>
</div>