<div class="app-dashboard-content">
    <div style="overflow-x: auto; width: 100%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="th-of-txs">Customer</th>
                    <th scope="col" class="th-of-txs">Status</th>
                    <th scope="col" class="th-of-txs">Action</th>
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
                            <span class="badge badge-sm bg-info">Accepted</span>
                        </div>
                    </td>
                    <td class="td-of-txs">
                        <div class="td-on-cst flex-row">
                            <a href="<?= base_url("detail/customer") ?>" class="btn-detail">
                                <div class="icon">
                                    <ion-icon name="scan-outline"></ion-icon>
                                </div>
                            </a>
                            <button class="btn-detail" data-bs-toggle="modal" data-bs-target="#delete-customer">
                                <div class="icon" style="font-size: 1.1rem">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </div>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="delete-customer" tabindex="-1" aria-labelledby="delete-customer" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="msg-img-alert">
                    <img src="<?= base_url("assets/img/vector/quests.png") ?>" alt="_delete-vector_png" />
                </div>
                <h1 class="msg-title">Delete customer</h1>
                <p class="msg-text">
                    Are you sure you want to delete this customer?
                </p>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr)">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#delete-customer" class="ath-btn-sgc bg-scX" style="padding: 0.5rem 0.894rem; font-size: 13px" style="color: #ff0000 !important">
                        Cancel
                    </button>
                    <a href="delete" class="ath-btn-sgc" style="padding: 0.5rem 0.6784rem; font-size: 13px">
                        Delete Customer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>