<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container py-1">
<div class="row justify-content-center align-items-center h-100 ">
<div class="col-12 col-lg-9 col-xl-12">
<div class="card shadow-2-strong card-registration text-dark" style="border-radius: 12px;">
<div class="card-body p-4 p-md-5">
  
<div class="row border-bottom">
    <div class="col">
        <h5>Faq List</h5>
    </div>
    <div class="col">
        <form action="<?php echo URLROOT; ?>/customers/viewFaqs" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php if (isset($data['query'])) echo $data['query']; ?>" name="query" placeholder="faq title/description" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2"><button type="submit" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-magnifying-glass"></i> Search</button></span>
            </div>
        </form>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['faqs'] as $faqs) :  ?>
                <tr>
                    <td><?php echo $faqs->id ?></td>
                    <td><?php echo $faqs->title ?></td>
                    <td><?php echo $faqs->description ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

  </div>
  </div>
  </div>
  </div> </div>
  </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>