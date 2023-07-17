<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<section class="vh-5 gradient-custom">
    <div class="container py-1 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration text-dark" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">UPDATE STAFF DETAILS</h3>
                        <form action="<?php echo URLROOT; ?>/owners/updateStaffDetails" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    
                                    <div class="form-outline">
                                        <input type="text" id="name" disabled name="name" class="form-control form-control-lg <?php if(!empty($data['name_err'])) echo 'is-invalid'; ?>" value="<?php echo $data['name']; ?>" />
                                        <label class="form-label" for="name">Name</label>
                                    </div>
                                    

                                </div>
                                <div class="col-md-6 mb-4">

                                    <span style="color:red ;"><?php echo $data['username_err']; ?></span>
                                    <div class="form-outline">
                                        <input type="text" id="username" name="username" class="form-control form-control-lg <?php if(!empty($data['username_err'])) echo 'is-invalid'; ?>" value="<?php echo $data['username']; ?>" />
                                        <label class="form-label" for="username">Username</label>
                                    </div>
                                    

                                </div>
                            </div>

                            <div class="row">
                                
                                <span style="color:red ;"><?php echo $data['address_err']; ?></span>
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline">
                                        <textarea name="address" class="form-control <?php if(!empty($data['address_err'])) echo 'is-invalid'; ?>" id="address" cols="30" rows="3" placeholder="Staff Address"><?php echo $data['address']; ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <span style="color:red ;"><?php echo $data['phone_err']; ?></span>
                                    <div class="form-outline">
                                        <input type="text" id="phoneNumber" name="phone" class="form-control form-control-lg <?php if(!empty($data['phone_err'])) echo 'is-invalid'; ?>" value="<?php echo $data['phone']; ?>" />
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    
                                    <span style="color:red ;"><?php echo $data['password_err']; ?></span>
                                    <div class="form-outline">
                                        <input type="password" id="passwordAddress" name="password" class="form-control form-control-lg <?php if(!empty($data['password_err'])) echo 'is-invalid'; ?>" />
                                        <label class="form-label" for="passwordAddress">Password</label>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    
                                    <span style="color:red ;"><?php echo $data['confirm_password_err']; ?></span>
                                    <div class="form-outline">
                                        <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-lg <?php if(!empty($data['confirm_password_err'])) echo 'is-invalid'; ?>" />
                                        <label class="form-label" for="confirm_password">Confirm Password</label>
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