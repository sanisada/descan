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

            <!-- Accordion for Metadata -->
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group" id="metadataAccordion">
                        <?php foreach ($metadata as $key => $data): ?>
                            <a href="#" class="list-group-item list-group-item-action" id="heading<?= $key ?>" data-toggle="collapse" data-target="#collapse<?= $key ?>" aria-expanded="false" aria-controls="collapse<?= $key ?>">
                                <p style="white-space: pre-wrap;"><?= esc($data['dataKey']) ?> - <?= esc($data['label']) ?></p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="accordion" id="metadataAccordionRight">
                        <?php foreach ($metadata as $key => $data): ?>
                            <div id="collapse<?= $key ?>" class="collapse" aria-labelledby="heading<?= $key ?>" data-parent="#metadataAccordionRight">
                                <div class="card card-body">
                                    <p style="white-space: pre-wrap;"><strong>Pertanyaan:</strong> <?= esc($data['dataKey']) ?> - <?= esc($data['label']) ?></p>
                                    <p style="white-space: pre-wrap;"><strong>Definisi:</strong> <?= esc($data['definisi']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <?= $pager->links('group', 'bootstrap_full') ?>
            </div>
        </div>
    </div>
</body>
