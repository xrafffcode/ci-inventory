<?= $this->extend('layouts/admin') ?>
<?php $this->section('styles') ?>
<!-- Custom styles for this page -->
<link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?> " rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit</h1>
    <form action="" method="post" id="text-editor">
        <input type="hidden" name="id" value="<?= $items['id'] ?>" />
        <div class="form-group">
            <label for="title">Nama Barang</label>
            <input type="text" name="name" class="form-control" 
                placeholder="Nama Barang" value="<?= $items['name'] ?>" required>
        </div>
        <div class="form-group">
            <label for="title">Stok</label>
            <input type="number" name="stok" class="form-control" 
                placeholder="Stok Barang" value="<?= $items['stok'] ?>" required>
        </div>
        <div class="form-group">
            <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
            <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
<?php $this->section('scripts')?>
<!-- Page level plugins -->
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- Page level custom scripts -->
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
</script>
<?php $this->endSection()?>