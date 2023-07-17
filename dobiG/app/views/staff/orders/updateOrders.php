<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<section class="vh-50 gradient-custom">
    <div class="container py-2 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration text-dark" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">UPDATE ORDER</h3>
                        <form action="<?php echo URLROOT; ?>/staffs/updateOrder/<?php echo $data['orders']->orderID; ?>" method="POST">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="orderid" class="form-label">Order Id</label>
                                        <input type="text" value="<?php echo $data['orders']->orderID; ?>" class="form-control" disabled id="orderid">
                                    </div>
                                    <div class="mb-2">
                                        <label for="name" class="form-label">Customer Name</label>
                                        <input type="text" value="<?php echo $data['orders']->customerName; ?>" class="form-control" disabled id="name">
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" disabled id="address"><?php echo $data['orders']->customerAddress; ?></textarea>
                                        <label for="address">Address</label>
                                    </div>
                                    <div class="mb-2">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" value="<?php echo $data['orders']->customerPhone; ?>" class="form-control" disabled id="phone">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="service_name" class="form-label">Service</label>
                                        <select name="service_select" class="form-select" aria-label="Default select example" id="service_name">
                                            <option value="<?php echo $data['orders']->serviceID; ?>"><?php echo $data['orders']->serviceName; ?></option>
                                            <?php foreach ($data['services'] as $services) : ?>
                                                <option value="<?php echo $services->id ?>"><?php echo $services->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="Remarks" class="form-label">Remarks</label>
                                        <textarea placeholder="yellow bag/blue laundry bag etc.." name="remarks" class="form-control <?php if (!empty($data['remarks_err'])) echo 'is-invalid'; ?>" id="Remarks" rows="3"><?php echo $data['orders']->orderRemarks; ?></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label for="weight" class="form-label">Weight (kg/ft/pcs)</label>
                                        <input type="number" name="weight" step="0.1" class="form-control <?php if(isset($data['weight_err']) && !empty($data['weight_err'])) echo 'is-invalid'; ?>" id="weight">
                                        <span style="color:red;"><?php if(isset($data['weight_err']) && !empty($data['weight_err'])) echo $data['weight_err']; ?></span> 
                                    </div>
                                </div>
                            </div >
                            <p class="card-subtitle mb-3 mt-2 text-muted"><strong class="text-danger">Note:</strong> Other services will be weighted by kg, but for carpet it will be by ft & dry cleaning by pcs.</p>
                            <input class="btn btn-danger btn-lg mt-2" name="action" type="submit" value="Cancel" />
                            <input class="btn btn-primary btn-lg mt-2" name="action" type="submit"  value="Update" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>