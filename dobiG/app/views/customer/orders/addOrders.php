<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<section class="vh-50 gradient-custom">
    <div class="container py-2 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration text-dark" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">ADD NEW ORDER</h3>
                        <form action="<?php echo URLROOT; ?>/customers/addOrders" method="POST">
                            <select name="select_service" class="form-select mb-3 <?php if(!empty($data['select_service_err'])) echo 'is-invalid'; ?>" aria-label="Default select example">
                                <option value = "" selected>Select services</option>
                                <?php foreach ($data['services'] as $services) : ?>
                                    <option value="<?php echo $services->id; ?>">
                                        <div class="row">
                                            <div class="col border">
                                                <?php echo strtoupper ($services->name); ?>
                                            </div>
                                            <div class="col text-end border">
                                                - RM <?php echo number_format($services->price, 2, '.', ''); ?>  <span><small>(kg/ft/pcs)</small></span>  
                                            </div>
                                        </div>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <div class="mb-3">
                                <label for="Remarks" class="form-label">Remarks</label>
                                <textarea placeholder="yellow bag/blue laundry bag etc.." name="remarks" class="form-control <?php if(!empty($data['remarks_err'])) echo 'is-invalid'; ?>" id="Remarks" rows="3"></textarea>
                                    <span style="color:red ;"><?php echo $data['remarks_err']; ?></span>
                            </div>
                          	<p class="card-subtitle mb-3 text-muted"><strong class="text-danger">Note:</strong> Other services will be weighted by kg, but for carpet it will be by ft & dry cleaning by pcs.</p>
                            <input class="btn btn-danger btn-lg" name="action" type="submit" value="Cancel" />
                            <input class="btn btn-primary btn-lg" name="action" type="submit"  value="Add" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>