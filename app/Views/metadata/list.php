<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Metadata</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Metadata</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<body>
    <div class="row">
        <div class="col-md-12">

            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('message'); ?>
                </div>
            <?php endif ?>
            
            <form method="get" action="<?= base_url('metadata') ?>">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" name="search" value="<?= esc($search) ?>" class="form-control" placeholder="Search...">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>

            <table class="table table-bordered table-striped" id="metadataTable">
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align:center;">#</th>
                        <th style="text-align:center;">Rincian</th>
                        <th style="text-align:center;">Pertanyaan</th>
                        <th style="text-align:center;">Definisi</th>
                    </tr>
                </thead>
                <tbody id="metadataTableBody">
                    <?php foreach ($metadata as $key => $data): ?>
                        <tr>
                            <td><?= $key + 1 + ($currentPage - 1) * $rowsPerPage; ?></td>
                            <td><?= esc($data['dataKey']) ?></td>
                            <td><?= esc($data['label']) ?></td>
                            <td><?= esc($data['definisi']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="pagination">
                <?= $pager->links('group', 'bootstrap_full') ?>
            </div>
        </div>
    </div>
</body>
