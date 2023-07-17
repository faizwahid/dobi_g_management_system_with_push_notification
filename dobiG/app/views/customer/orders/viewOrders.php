<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<?php flash('order_register_success'); ?>
<?php flash('order_register_failed'); ?>
<?php flash('order_add_success'); ?>
<?php flash('order_add_failed'); ?>
<?php flash('successful_cancel_order'); ?>
<?php flash('failed_cancel_order'); ?>

<div class="container py-1 h-100 ">
<div class="row justify-content-center align-items-center h-100">
<div class="col-12 col-lg-9 col-xl-12">
<div class="card shadow-2-strong card-registration text-dark" style="border-radius: 12px;">
<div class="card-body p-4 p-md-5">

<?php echo $_SESSION['currentUser']->username; ?>
<div class="row border-bottom">
  <div class="col">
    <h5>My Orders</h5>
  </div>
  <div class="col text-end">
    <h5><i class="fa-solid fa-user-plus"></i><a href="<?php echo URLROOT; ?>/customers/addOrders" style="text-decoration: none; color:black;"> Add new order</h5></a>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Order Id</th>
        <th scope="col">Date</th>
        <th scope="col">Service</th>
        <th scope="col">Weight (kg/ft/pcs)</th>
        <th scope="col">Status</th>
        <th scope="col">Remark</th>
        <th scope="col">Staff</th>
        <th scope="col">Total Price (RM)</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['orders'] as $orders) :  ?>
        <?php
        $orderCreated = dateTimeConverter($orders->orderCreated);
        if ($orders->staffName == null) {
          $orders->staffName = 'not assigned';
          $orders->orderPrice = '';
          $orders->orderWeight = 'not weighted';
        }
        ?>
        <!-- Modal cancel starts here -->
        <div class="modal fade" id="order<?php echo $orders->id; ?>" tabindex="-1" aria-labelledby="order<?php echo $orders->id; ?>" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="order<?php echo $orders->id; ?>">cancel confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Proceed to cancel order with ID: <?php echo $orders->id; ?> ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" onclick="location.href='<?php echo URLROOT; ?>/customers/cancelOrder/<?php echo $orders->id; ?>'" class="btn btn-sm btn-danger">Proceed</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal cancel ends here -->

        <tr>
          <td><?php echo $orders->orderID ?></td>
          <td><?php echo $orderCreated; ?></td>
          <td><?php echo $orders->serviceName ?></td>
          <!-- weight rules if have value or not -->
          <td><?php if($orders->orderWeight == 'not weighted')  :?>
          <?php echo $orders->orderWeight ?>
          <?php elseif ($orders->orderWeight >= 0)  :?>
          <?php echo number_format($orders->orderWeight, 2, '.', ''); ?>
          <?php endif; ?>
          <!-- end if -->
          </td>
          <td><?php if ($orders->orderStatus == 'in queue') : ?>
              <span class="badge rounded-pill bg-secondary"><?php echo $orders->orderStatus ?></span>
            <?php elseif ($orders->orderStatus == 'pending') : ?>
              <span class="badge rounded-pill bg-warning"><?php echo $orders->orderStatus ?></span>
            <?php elseif ($orders->orderStatus == 'processing') : ?>
              <span class="badge rounded-pill bg-info"><?php echo $orders->orderStatus ?></span>
            <?php elseif ($orders->orderStatus == 'completed') : ?>
              <span class="badge rounded-pill bg-success"><?php echo $orders->orderStatus ?></span>
            <?php elseif ($orders->orderStatus == 'cancelled') : ?>
              <span class="badge rounded-pill bg-danger"><?php echo $orders->orderStatus ?></span>
            <?php endif; ?>
          </td>
          <td><?php echo $orders->orderRemarks ?></td>
          <td><?php echo $orders->staffName ?></td>
          <!-- price rules if have value or not -->
          <td><?php if($orders->orderPrice == '')  :?>
          <?php echo $orders->orderPrice ?>
          <?php elseif ($orders->orderPrice >= 0)  :?>
            <!-- round off 1st -->
          <?php echo number_format($orders->orderPrice, 2, '.', ''); ?>
          <?php endif; ?>
          <!-- end if -->
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