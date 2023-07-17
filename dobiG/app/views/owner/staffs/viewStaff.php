<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<?php flash('staff_register_success'); ?>
<?php flash('staff_register_failed'); ?>
<?php flash('staff_update_success'); ?>
<?php flash('staff_update_failed'); ?>
<?php flash('successful_delete_staff'); ?>
<?php flash('failed_delete_staff'); ?>

<div class="container py-1 h-100">
<div class="row justify-content-center align-items-center h-100">
<div class="col-12 col-lg-9 col-xl-12">
<div class="card shadow-2-strong card-registration text-dark" style="border-radius: 12px;">
<div class="card-body p-4 p-md-5">
  
<div class="row border-bottom">
  <div class="col">
    <h5>Staff List</h5>
  </div>
  <div class="col">
    <form action="<?php echo URLROOT; ?>/owners/viewStaff" method="POST">
      <div class="input-group mb-3">
        <input type="text" class="form-control" value="<?php if(isset($data['query'])) echo $data['query']; ?>" name="query" placeholder="staff name/username/address" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2"><button type="submit" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-magnifying-glass"></i> Search</button></span>
      </div>
    </form>
  </div>
  <div class="col text-end">
    <h5><i class="fa-solid fa-user-plus"></i><a href="<?php echo URLROOT; ?>/owners/addStaff" style="text-decoration: none; color:black;"> Add new staff</h5></a>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['staffs'] as $staffs) :  ?>
        <!-- Modal delete starts here -->
        <div class="modal fade" id="staff<?php echo $staffs->id; ?>" tabindex="-1" aria-labelledby="staff<?php echo $staffs->id; ?>" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staff<?php echo $staffs->id; ?>">Delete confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Proceed to delete staff with ID: <?php echo $staffs->id; ?> ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" onclick="location.href='<?php echo URLROOT; ?>/owners/deleteStaff/<?php echo $staffs->id; ?>'" class="btn btn-sm btn-danger">Proceed</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal delete ends here -->

        <tr>
          <td><?php echo $staffs->id ?></td>
          <td><?php echo $staffs->name ?></td>
          <td><?php echo $staffs->username ?></td>
          <td><?php echo $staffs->phone ?></td>
          <td><textarea name="address" disabled id="staff_address_<?php echo $staffs->id; ?>" cols="25" rows="2"><?php echo $staffs->address ?></textarea></td>
          <td>
            <button onclick="location.href='<?php echo URLROOT; ?>/owners/viewStaffID/<?php echo $staffs->id; ?>'" class="btn btn-sm btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></button>
            <button data-bs-toggle="modal" data-bs-target="#staff<?php echo $staffs->id ?>" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  
</div>
</div>
</div>
</div>
</div>
</div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>