<div class="app-dashboard-content">
    <?= $this->session->flashdata("bg-success"); ?>
    <div class="content-padding mt-2">
        <div class="d-flex align-items-center justify-content-end">
            <button type="button" class="btn-addings" data-bs-toggle="modal" data-bs-target="#add-background-color">
                Add background color
            </button>
        </div>
    </div>
    <div class="mt-3" style="overflow-x: auto; width: 100%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="th-of-txs">Background Color</th>
                    <th scope="col" class="th-of-txs">Status</th>
                    <th scope="col" class="th-of-txs">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($background_color as $bg => $value) : ?>
                    <tr>
                        <td class="td-of-txs">
                            <div class="td-on-cst">
                                <span class="txt"><?= $value->name ?></span>
                            </div>
                        </td>
                        <td class="td-of-txs">
                            <div class="td-on-cst">
                                <span class="txt"><?= $value->status ?></span>
                            </div>
                        </td>
                        <td class="td-of-txs">
                            <div class="td-on-cst flex-row">
                                <a href="<?= base_url("detail/background_color/" . $value->id) ?>" class="btn-detail">
                                    <div class="icon" style="font-size: 1.1rem">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </div>
                                </a>
                                <button data-bs-toggle="modal" data-bs-target="#delete-background-color" class="btn-detail" id="delete-detail" data-id="<?= $value->id ?>" data-name="<?= $value->name ?>">
                                    <div class="icon" style="font-size: 1.1rem">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </div>
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="add-background-color" tabindex="-1" aria-labelledby="add-background-color" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-background-color">
                    Add Background Color
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("admin/data_background_color") ?>" method="post">
                    <div class="cfr-input-field">
                        <label for="name" class="cfr-input-label">
                            Background Color
                        </label>
                        <input type="text" name="name" id="name" class="cfr-input-control" placeholder="Background Color" value="<?= set_value("name") ?>" autocomplete="off" />
                    </div>
                    <?= form_error('name', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
                    <div class="cfr-input-field">
                        <label for="status" class="cfr-input-label">Status</label>
                        <div class="app-select-dropdown">
                            <div class="app-select-dropdown-header">
                                <div class="app-select-placeholder">
                                    <input type="text" name="status" id="status" class="app-select-input-placeholder" placeholder="Please Choose" value="<?= set_value("status") ?>" />
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
                        <button type="submit" class="btn-save">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete-background-color" tabindex="-1" aria-labelledby="delete-background-color" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="msg-img-alert">
                    <img src="<?= base_url("assets/img/vector/attention.png") ?>" alt="_attention-vector_png" />
                </div>
                <h1 class="msg-title">Delete background color</h1>
                <p class="msg-text">
                    Are you sure you want to delete this background color?
                </p>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr)">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#delete-background-color" class="ath-btn-sgc bg-scX" style="padding: 0.5rem 0.894rem; font-size: 13px" style="color: #ff0000 !important">
                        Cancel
                    </button>
                    <a href="" class="ath-btn-sgc" id="confirm-delete-btn" style="padding: 0.5rem 0.6784rem; font-size: 13px">
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).on("click", "#delete-detail", function() {
            var id = $(this).data("id")
            var name = $(this).data("name")
            var url = `<?= base_url() ?>detail/delete_background_color/${id}`

            $("#confirm-delete-btn").attr("href", url)
        })
    })
</script>