<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<section class="vh-50 gradient-custom">
    <div class="container py-2 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration text-dark" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">UPDATE FAQ</h3>
                        <form action="<?php echo URLROOT; ?>/owners/updateFaqs/<?php echo $data['id']; ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <span style="color:red ;"><?php echo $data['title_err']; ?></span>
                                    <div class="form-outline">
                                        <input type="text" placeholder="Title" id="title" name="title" class="form-control form-control-lg <?php if (!empty($data['title_err'])) echo 'is-invalid'; ?>" value="<?php echo $data['title']; ?>" />
                                        <label class="form-label" for="title">Title</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                <span style="color:red ;"><?php echo $data['description_err']; ?></span>
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline">
                                        <textarea name="description" class="form-control <?php if(!empty($data['description_err'])) echo 'is-invalid'; ?>" style="width:auto" id="description" cols="35" rows="3" placeholder="Faq Description"><?php echo $data['description']; ?></textarea>
                                    </div>
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
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>