<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<div class="container py-1 h-100">
<div class="row justify-content-center align-items-center h-100">
<div class="col-12 col-lg-9 col-xl-12">
<div class="card shadow-2-strong card-registration text-dark" style="border-radius: 12px;">
<div class="card-body p-4 p-md-5">

<div class="row border-bottom">
    <div class="col">
        <h5>Dashboard</h5>
    </div>
    <div class="col">
    </div>
</div>

<div class="row">
  <div class="col-sm-3" style="margin-top: 10px;">
    <div class="card" style="background-color: #BB8FCE; box-shadow: 5px 2.5px 2.5px grey;">
      <div class="card-body">
        <h5 class="card-title" style="color: white;">Staff</h5>
        <p class="card-text" style="color: white;"><?php echo $data['staffs'];?></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3" style="margin-top: 10px;">
    <div class="card" style="background-color: #F4D03F; box-shadow: 5px 2.5px 2.5px grey;">
      <div class="card-body" >
        <h5 class="card-title" style="color: white;">Services</h5>
        <p class="card-text" style="color: white;"><?php echo $data['services'];?></p>
      </div>
    </div>
  </div>
    <div class="col-sm-3" style="margin-top: 10px;">
    <div class="card" style="background-color: #EB984E; box-shadow: 5px 2.5px 2.5px grey;">
      <div class="card-body">
        <h5 class="card-title" style="color: white;">Faqs</h5>
        <p class="card-text" style="color: white;"><?php echo $data['faqs'];?></p>
      </div>
    </div>
  </div>
      <div class="col-sm-3" style="margin-top: 10px;">
    <div class="card" style="background-color: #45B39D; box-shadow: 5px 2.5px 2.5px grey;">
      <div class="card-body">
        <h5 class="card-title" style="color: white;">Customers</h5>
        <p class="card-text" style="color: white;"><?php echo $data['customers'];?></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
          
<?php require APPROOT . '/views/inc/footer.php'; ?>