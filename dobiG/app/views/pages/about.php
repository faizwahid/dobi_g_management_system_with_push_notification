<?php require APPROOT. '/views/inc/header.php'; ?>
<?php require APPROOT. '/views/inc/navbar.php'; ?>

<style>
  img.setPenyu{
    width:25%;
  }
  
   h1.penyu{
     font-size:3rem;
    }
  
  p.penyus{
    text-align:center;
  }
  
  @media only screen and (max-width:480px){
    img.setPenyu{
      width:100%;
    }
    
    p.penyus{
      text-align:justify;
    }
    
  }
    
</style>

   <div class="shadow p-4 mb-3 rounded mx-3" style="background-color:#fff">
    <div class="container">
            <div class="row">
              <div class="row-xl d-flex align-items-center justify-content-center w-50 w-lg-25 mx-auto">
				<center><img src="<?php echo URLROOT; ?>/img/dobi.png" class="shadow-lg p-1 bg-white  mb-3 mb-xl-0 rounded-circle shadow-4-strong setPenyu" style="border-width:3px" >
                  </center>
              </div>
              <div class="row-xl">
                <h1 class="display-3 mt-2 mt-xl-2 text-center display-xl-5 penyu"><?php echo $data['title']; ?></h1>
              	<p class="lead mx-xl-3 penyus"><?php echo $data['description']; ?></p>
                <div class="text-center">
                <div>
                  <div>
                  <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
                  </div>
                </div>
                </div>
              </div>
          </div>
     </div>
    </div>

<?php require APPROOT. '/views/inc/footer.php'; ?>
