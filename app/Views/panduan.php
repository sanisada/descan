<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan</title>
    <style>
        .pdf-container {
            width: 100%;
            height: 100vh;
            border: none;
        }
    </style>
</head>
<body>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Panduan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Panduan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- PDF Reader -->
<div>
    <!-- Using iframe to display the PDF -->
    <iframe src="<?php echo base_url('assets')?>/dist/panduan.pdf" class="pdf-container"></iframe>
</div>

</body>
</html>
