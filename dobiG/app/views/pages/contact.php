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
      text-align:center;
      margin-left:5%;
      margin-right:5%;
    }
    
  }
    
</style>

   <div class="shadow p-4 mb-3 rounded mx-3" style="background-color:#fff">
    <div class="container">
            <div class="row">
              <div class="row-xl d-flex align-items-center justify-content-center w-50 w-lg-25 mx-auto">
				<center><img src="<?php echo URLROOT; ?>/img/operator.png" class="shadow-lg p-1 bg-dark  mb-3 mb-xl-0 rounded-circle shadow-4-strong setPenyu" style="border-width:3px" >
                  </center>
              </div>
              <div class="row-xl ">
                <h1 class="display-3 mt-2 mt-xl-2 text-center display-xl-5 penyu"><?php echo $data['title']; ?></h1>
                <center>
				<div class=" m-auto mx-3" style="width: 225px;">
                <table>
                <tr>
                  <td>
              		<p class="lead mx-xl-3 penyus mb-2 " style="text-align: left;"><strong><img src="<?php echo URLROOT; ?>/img/call.png" width="25" height="25" class="me-2"></strong><a href="tel:+601110015672" style="text-decoration: none;color: black;"><?php echo $data['number']; ?></a></p>
                  </td>
                </tr>
                <tr>
                  <td>
                	<p class="lead mx-xl-3 penyus mb-2 " style="text-align: left;" ><strong><img src="<?php echo URLROOT; ?>/img/email.png" width="25" height="25" class="me-2"></strong><a href="mailto:dobiG@gmail.com" style="text-decoration: none;color: black;"><?php echo $data['email']; ?></a></p>
                  </td>
                </tr>
                <tr>
                  <td>
              		<p class="lead mx-xl-3 penyus d-flex" style="text-align: left; text-align: justify;"><strong><img src="<?php echo URLROOT; ?>/img/location.png" width="25" height="25" class="me-2"></strong><a href="https://goo.gl/maps/ZPbBRZNxmweXzuLaA" style="text-decoration: none;color: black;"><?php echo $data['location']; ?></a></p>
                  </tr>
                </table>
                  </div>
                </center>
                  </div>
                <div class="text-center">
                <div> 
                </div>
                </div>
              </div>
          </div>
     </div>

   <div class="shadow p-4 mb-3 rounded mx-3" style="background-color:#fff">
    <div class="container">
            <div class="row">
         
              <div class="row-xl">
                <h1 class="display-2 mt-2 mt-xl-2 text-center display-xl-5 penyu"><?php echo $data['topic']; ?></h1>
              	<!--form contact us -->
               		 <form action="https://formsubmit.co/c6785f0f0835cdbf6e1e19da40b863c7" method="POST">
                        <!-- Name input -->
                        <div class="form-outline mb-2 mt-4 col-md-5 m-auto">
                          <input type="text" id="name" class="form-control" name="Name" placeholder="Your Name" required/>
                          <label class="form-label" for="name">Name</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-2 col-md-5 m-auto">
                          <input type="email" id="email" class="form-control" name="Email" placeholder="Your Email" required/>
                          <label class="form-label" for="email">Email</label>
                        </div>

                        <!-- Message input -->
                        <div class="form-outline mb-2 col-md-5 m-auto">
                          <textarea class="form-control" id="message" rows="4" name="Message" placeholder="Message.." required></textarea>
                          <label class="form-label" for="message">Message</label>
                        </div>

                        <!-- Submit button -->
                       <div class="col-md-5 m-auto">
                        <button type="submit" class="btn btn-primary btn-block mb-4" style="float: right;">Send</button>
                         </div>
                      </form>
                <!--ENd form contact us -->
                <div class="text-center">
                <div>
                
                </div>
                </div>
              </div>
          </div>
     </div>
    </div>
<style>
  

  
</style>
<?php require APPROOT. '/views/inc/footer.php'; ?>
