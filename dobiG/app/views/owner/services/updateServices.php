<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<section class="vh-5 gradient-custom">
    <div class="container py-1 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration text-dark" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">UPDATE SERVICES</h3>
                        <form action="<?php echo URLROOT; ?>/owners/updateServices/<?php echo $data['id']; ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <span style="color:red ;"><?php echo $data['name_err']; ?></span>
                                    <div class="form-outline">
                                        <input type="text" placeholder="Dry cleaning" id="name" name="name" class="form-control form-control-lg <?php if (!empty($data['name_err'])) echo 'is-invalid'; ?>" value="<?php echo $data['name']; ?>" />
                                        <label class="form-label" for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <span style="color:red ;"><?php echo $data['price_err']; ?></span>
                                    <div class="form-outline">
                                        <input type="number" step="0.01" placeholder="RM" id="username" name="price" class="form-control form-control-lg <?php if (!empty($data['price_err'])) echo 'is-invalid'; ?>" value="<?php echo $data['price']; ?>" />
                                        <label class="form-label" for="username">Price (kg/ft/pcs)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 pt-2">
                                <input class="btn btn-danger btn-lg" name="action" type="submit" value="Cancel" />
                                <input class="btn btn-primary btn-lg" name="action" type="submit"  value="Update" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>