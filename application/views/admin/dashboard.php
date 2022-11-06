<div class="app-dashboard-content">
    <div class="app-dashboard-widgets content-padding">
        <div class="card-widget w-style-1">
            <div class="card-widget-icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="card-widget-details">
                <h1 class="widget-title">Today's Customer</h1>
                <h1 class="widget-subtitle">30</h1>
            </div>
        </div>
        <div class="card-widget w-style-2">
            <div class="card-widget-icon">
                <i class="fa-solid fa-bell"></i>
            </div>
            <div class="card-widget-details">
                <h1 class="widget-title">Request Booking</h1>
                <h1 class="widget-subtitle">10</h1>
            </div>
        </div>
    </div>
    <div class="flex-divider content-padding">
        <h1 class="app-dashboard-text-divider">Recent Request Booking</h1>
        <a href="<?= base_url("admin/request_booking") ?>" class="link-show-more">See All</a>
    </div>
    <div class="app-dashboard-recent-booking">
        <div class="flex-recent-booking">
            <div class="profile-request-booking p-style-1">
                <div class="icon-profile-request">
                    <i class="fa-regular fa-user"></i>
                </div>
                <span class="name-profile-request">Jhon Doe</span>
            </div>
            <div class="profile-request-booking p-style-2">
                <div class="icon-profile-request">
                    <i class="fa-regular fa-user"></i>
                </div>
                <span class="name-profile-request">Abet Kalung</span>
            </div>
            <div class="profile-request-booking p-style-3">
                <div class="icon-profile-request">
                    <i class="fa-regular fa-user"></i>
                </div>
                <span class="name-profile-request">Michael Jackson</span>
            </div>
            <div class="profile-request-booking p-style-4">
                <div class="icon-profile-request">
                    <i class="fa-regular fa-user"></i>
                </div>
                <span class="name-profile-request">Supriadi</span>
            </div>
        </div>
    </div>
    <div class="flex-divider content-padding">
        <h1 class="app-dashboard-text-divider">Customers</h1>
        <a href="<?= base_url("admin/customer") ?>" class="link-show-more">See All </a>
    </div>
    <div style="overflow-x: auto; width: 100%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="th-of-txs">Customer</th>
                    <th scope="col" class="th-of-txs">Phone</th>
                    <th scope="col" class="th-of-txs">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="td-of-txs">
                        <div class="td-on-cst">
                            <span class="name txt">Jhon Doe</span>
                            <span class="email">jhondoe12@gmail.com</span>
                        </div>
                    </td>
                    <td class="td-of-txs">
                        <div class="td-on-cst">
                            <a href="tel:+6289123456789" class="phone txt">
                                +62 891-234-567-89
                            </a>
                        </div>
                    </td>
                    <td class="td-of-txs">
                        <div class="td-on-cst">
                            <span class="badge badge-sm bg-secondary">Waiting..</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="td-of-txs">
                        <div class="td-on-cst">
                            <span class="name txt">Abet Kalung</span>
                            <span class="email">abetXX123@gmail.com</span>
                        </div>
                    </td>
                    <td class="td-of-txs">
                        <div class="td-on-cst">
                            <a href="tel:+6289123456789" class="phone txt">
                                +62 891-234-567-89
                            </a>
                        </div>
                    </td>
                    <td class="td-of-txs">
                        <div class="td-on-cst">
                            <span class="badge badge-sm bg-success">Accepted</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>