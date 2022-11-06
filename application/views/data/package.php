<div class="app-dashboard-content">
    <?= $this->session->flashdata("pc-success"); ?>
    <div class="content-padding mt-2">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="app-dashboard-text-divider m-0">Package</h1>
            <button type="button" class="btn-addings" data-bs-toggle="modal" data-bs-target="#add-package">
                Add package
            </button>
        </div>
    </div>
    <div class="mt-3" style="overflow-x: auto; width: 100%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="th-of-txs">Package</th>
                    <th scope="col" class="th-of-txs">Max Person</th>
                    <th scope="col" class="th-of-txs">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($package as $pc => $value) : ?>
                    <tr>
                        <td class="td-of-txs">
                            <div class="td-on-cst">
                                <span class="txt"><?= $value->name ?></span>
                            </div>
                        </td>
                        <td class="td-of-txs">
                            <div class="td-on-cst">
                                <span class="txt"><?= $value->max_person ?> Person</span>
                            </div>
                        </td>
                        <td class="td-of-txs">
                            <div class="td-on-cst flex-row">
                                <a href="<?= base_url("detail/package/" . $value->id) ?>" class="btn-detail">
                                    <div class="icon" style="font-size: 1.1rem">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </div>
                                </a>
                                <button data-bs-toggle="modal" data-bs-target="#delete-package" class="btn-detail" id="delete-detail" data-id="<?= $value->id ?>" data-name="<?= $value->name ?>">
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
<div class="modal fade" id="add-package" tabindex="-1" aria-labelledby="add-package" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-package">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("admin/data_package") ?>" method="post">
                    <div class="cfr-input-field">
                        <label for="name" class="cfr-input-label">
                            Package Name
                        </label>
                        <input type="text" name="name" id="name" class="cfr-input-control" placeholder="Package name" value="<?= set_value("name") ?>" autocomplete="off" />
                    </div>
                    <?= form_error('name', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
                    <div class="cfr-input-field">
                        <label for="max_person" class="cfr-input-label">
                            Max Person
                        </label>
                        <input type="number" name="max_person" id="max_person" class="cfr-input-control" placeholder="Max Person" value="<?= set_value("max_person") ?>" autocomplete="off" />
                    </div>
                    <?= form_error('max_person', '<span class="text-form-error"><div class="error-icon"><ion-icon name="alert-circle-outline"></ion-icon></div>', '</span>'); ?>
                    <div class="d-flex align-items-center justify-content-end mt-2">
                        <button type="submit" class="btn-save">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete-package" tabindex="-1" aria-labelledby="delete-package" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="msg-img-alert">
                    <img src="<?= base_url("assets/img/vector/attention.png") ?>" alt="_attention-vector_png" />
                </div>
                <h1 class="msg-title">Delete package</h1>
                <p class="msg-text">
                    Are you sure you want to delete this package?
                </p>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr)">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#delete-package" class="ath-btn-sgc bg-scX" style="padding: 0.5rem 0.894rem; font-size: 13px" style="color: #ff0000 !important">
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
            var url = `<?= base_url() ?>detail/delete_package/${id}`

            $("#confirm-delete-btn").attr("href", url)
        })
    })
</script>