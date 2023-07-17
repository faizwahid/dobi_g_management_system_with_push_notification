 <!--navbar starts here -->
 <header class="p-1">

   <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-3 pt-3 border-bottom px-3 shadow p-3 rounded" style="max-width:auto;background-color:#4267B2;">

     <a href="#" class="d-flex align-items-center text-white text-decoration-none" >
      
        
        <img src="<?php echo URLROOT; ?>/img/washer.png" width="40" height="32" class="me-2">
         
       <span class="fs-4">DOBI G </span>
     </a>

     <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto dropdown" >
       <?php if(isset($_SESSION['current_actor'])): ?>
       	<?php if($_SESSION['current_actor']=='customer' && !isset($_SESSION['valid_actor'])): ?>
         <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/pages/index">Home</a>
         <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/pages/about">About</a>
         <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
       <?php endif; ?>
       <?php endif; ?>
       <?php if (isset($_SESSION['valid_actor'])) : ?>
         <!-- if valid actor is set -->
         <?php if ($_SESSION['valid_actor'] == 'owner') : ?>
       	   <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/owners/dashboard">Dashboard</a>
           <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/owners/viewStaff">Staff</a>
           <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/owners/viewServices">Service</a>
           <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/owners/viewFaqs">FAQ</a>
         <?php elseif ($_SESSION['valid_actor'] == 'customer') : ?>
       
           <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/customers/viewOrders">Order</a>
           <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/customers/viewFaqs">FAQ</a>
         <?php elseif ($_SESSION['valid_actor'] == 'staff') : ?>
           <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/staffs/viewOrders">Order</a>
           <a class="me-3 py-2 text-white text-decoration-none" href="<?php echo URLROOT; ?>/staffs/viewFaqs">FAQ</a>
         <?php endif; ?>
       <?php endif; ?>
       <!-- use session management to change profile according to owner,staff and customer-->
       <!-- hidden utk future refferences -->
       <!-- <a class="py-2 text-dark text-decoration-none" href="#"><?php echo $_SESSION['current_actor']; ?><i class="fa-regular fa-user"></i>
       </a>
       <?php if (isset($_SESSION['valid_actor'])) : ?>
         <button onclick="location.href='<?php echo URLROOT; ?>/owners/login'" class="btn btn-sm btn-outline-secondary" style="margin-left: 20px;">logout</button>
       <?php endif ?> -->
       <!-- drop down -->
       <div class="dropdown">
         <a href="<?php if($_SESSION['current_actor']=='customer') echo URLROOT.'/customers/login'; else echo '#'; ?>" class="btn btn-warning dropdown-toggle" data-bs-toggle="<?php if (isset($_SESSION['valid_actor'])) : echo 'dropdown';
                                                                    else : echo '#';
                                                                    endif; ?>" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php echo $_SESSION['current_actor']; ?><i class="fa-regular fa-user"></i>
         </a>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
           <?php if ($_SESSION['valid_actor'] == 'owner') : ?>
             <a class="dropdown-item" href="<?php echo URLROOT; ?>/owners/logout">Logout</a>
           <?php endif; ?>
           <?php if ($_SESSION['valid_actor'] == 'staff') : ?>
             <a class="dropdown-item" href="<?php echo URLROOT; ?>/staffs/logout">Logout</a>
           <?php endif; ?>
           <?php if ($_SESSION['valid_actor'] == 'customer') : ?>
             <a class="dropdown-item" href="<?php echo URLROOT; ?>/customers/logout">Logout</a>
             <a class="dropdown-item" href="<?php echo URLROOT; ?>/customers/viewProfile">Edit Profile</a>
           <?php endif; ?>
         </div>
       </div>
     </nav>
   </div>

 </header>

<style>
  .myDiv{
   background-color: lightblue;
}
</style>
 <!-- nav bar ends here -->