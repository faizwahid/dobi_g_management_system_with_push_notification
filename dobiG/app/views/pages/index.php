<?php require APPROOT. '/views/inc/header.php'; ?>
<?php require APPROOT. '/views/inc/navbar.php'; ?>
<link href="<?php echo URLROOT; ?>/css/grid.css" rel="stylesheet">

   <div class="shadow p-4 mb-3 bg-white rounded mx-3">
    <div class="container">
            <div class="row">
              <div class="col-xl d-flex align-items-center justify-content-center ratio ratio-16x9">
				<img src="<?php echo URLROOT; ?>/img/dobi.png" class="shadow  mb-5 rounded" style="border-width:3px" >              
              </div>
              <div class="col-xl">
                <h1 class="display-3 mt-3 mt-xl-4" style="text-align:justify; font-weight: bold;"><?php echo $data['title']; ?></h1>
              	<p class="lead" style="text-align:justify; font-weight: 400;"><?php echo $data['description']; ?></p>
                <div class="text-center">
                <h3 class="mb-3" style="font-weight: 400;">Open - Closed</h3>
                <div>
                  <span class="bg-success text-white py-2 px-3 rounded m-xl-2 d-inline-block" style="font-size: 1.3rem;  2px solid lightgrey;"><?php echo $data['open']; ?></span>
                  <span class="bg-danger text-white py-2 px-3 rounded m-xl-2 d-inline-block" style="font-size: 1.3rem;  2px solid whitesmoke;"><?php echo $data['close']; ?></span>
                  <div>
                  <span class="bg-info text-white py-2 px-4 rounded m-2 m-xl-2 d-inline-block" style="font-size: 1.3rem">Monday - Sunday</span>
                  </div>
                </div>
                </div>
              </div>
          </div>
     </div>
    </div>

   <div class="shadow p-3 mb-3 bg-white rounded mx-3">
    <div class="container">
     <h3>Types of Services</h3>
      <div class="cards">
        <div class="height">
          <div class="card overflow-hidden" style=" border-width:3px">
            <div class="card-body">
        		<img src="<?php echo URLROOT; ?>/img/bowl.png" width="100" height="84" class="me-2">
              <h5 class="card-title text-black">Wash, Dry & Fold</h5>
              <h6 class="card-subtitle mb-2 text-muted">RM 2.50/kg</h6>
              <p class="card-text text-black">All the item will be wash and dry. It also will be fold by staff</p>
            </div>
          </div>
        </div>
        
        <div class="height">
          <div class="card overflow-hidden" style=" border-width:3px">
            <div class="card-body">
        		<img src="<?php echo URLROOT; ?>/img/iron.png" width="100" height="84" class="me-2">
              <h5 class="card-title text-black">Wash, Dry & Iron</h5>
              <h6 class="card-subtitle mb-2 text-muted">RM 5.00/kg</h6>
              <p class="card-text text-black">All the item will be wash and dry. It also will be iron by staff.</p>
            </div>
          </div>
        </div>
        
        <div class="height">
          <div class="card overflow-hidden" style=" border-width:3px">
            <div class="card-body">
        		<img src="<?php echo URLROOT; ?>/img/dry-cleaning.png" width="100" height="84" class="me-2">
              <h5 class="card-title text-black">Dry Cleaning</h5>
              <h6 class="card-subtitle mb-2 text-muted">RM 10.00/pcs</h6>
              <p class="card-text text-black">All the item will be dry cleaning.</p>
            </div>
          </div>
        </div>
        
        <div class="height" >
          <div class="card overflow-hidden" style=" border-width:3px">
            <div class="card-body">
        		<img src="<?php echo URLROOT; ?>/img/carpet-cleaner.png" width="100" height="84" class="me-2">
              <h5 class="card-title text-black">Carpet</h5>
              <h6 class="card-subtitle mb-2 text-muted">RM 4.00/feet</h6>
              <p class="card-text text-black">Carpet will be wash using waterjet and vacuum.</p>
            </div>
          </div>
        </div>
        
      </div>
     </div>
    </div>

 <div class="shadow p-3 mb-3 rounded mx-3" style="background-color:#fff">
    <div class="container">
            <div class="row">
              <h3>Covered Area</h3>
              <div class="row-xl d-flex align-items-center justify-content-center mx-auto">
				<div class="m-2 m-lg-3 m-xl-3">
                  <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MboVXzJ2zbCupTbIgbtS4UyCGA-5Nrs&ehbc=2E312F" style="width:70vw ; height:60vh"></iframe>
                  </div>
              </div>
          </div>
     </div>
    </div>

<?php require APPROOT. '/views/inc/footer.php'; ?>
