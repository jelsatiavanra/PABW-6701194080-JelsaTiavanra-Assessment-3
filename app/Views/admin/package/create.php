<?= $this->extend('layout/master'); ?>

<?= $this->section('content'); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Package</h1>
    <!-- <a href="/package/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fas fa-plus fa-sm text-white-50"></i> Add Package</a> -->
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/packagecontroller/store" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="" class="mb-2">Package Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Package Type</label>
                        <input type="text" class="form-control" name="type">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Package Location</label>
                        <input type="text" class="form-control" name="location">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Package Price In IDR</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Package Features</label>
                        <input type="text" class="form-control" name="features">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Package Detail</label>
                        <textarea name="detail" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Package Image</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <input type="submit" value="ADD" class="btn" style="background:rgb(255, 112, 136) !important;color:white">
                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>
