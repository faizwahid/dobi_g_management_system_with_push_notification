<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<?php flash('customer_update_success'); ?>
<?php flash('customer_update_failed'); ?>

<section class="vh-50 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration text-dark" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><?php echo strtoupper($data['customer']->name); ?> Profile</h3>
                        <form action="<?php echo URLROOT; ?>/customers/viewProfile/<?php echo $data['customer']->id; ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="text" disabled id="name" name="name" class="form-control form-control-lg" value="<?php echo $data['customer']->name; ?>" />
                                        <label class="form-label" for="name">Name</label>
                                    </div>


                                </div>
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="text" disabled id="username" name="username" class="form-control form-control-lg" value="<?php echo $data['customer']->username; ?>" />
                                        <label class="form-label" for="username">Username</label>
                                    </div>


                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline">
                                        <textarea name="address" class="form-control" disabled id="address" cols="30" rows="3" placeholder="Your Address"><?php echo $data['customer']->address; ?></textarea>
                                        <label class="form-label" for="address">Address</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" disabled id="phoneNumber" name="phone" class="form-control form-control-lg " value="<?php echo $data['customer']->phone; ?>" />
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                    </div>
                                </div>
                            </div>


                        </form>
                        <div class="mt-3 pt-2">
                            <button onclick="location.href='<?php echo URLROOT; ?>/customers/updateProfile'" class="btn btn-lg btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>