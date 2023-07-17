<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<?php flash('accept_order_success'); ?>
<?php flash('successful_cancel_order'); ?>
<?php flash('failed_cancel_order'); ?>
<?php flash('update_order_success'); ?>
<?php flash('update_order_fail'); ?>
<?php flash('complete_order_success'); ?>
<?php flash('complete_order_fail'); ?>
<?php flash('search_results'); ?>
<?php flash('cancel_order_success'); ?>
<?php flash('cancel_order_fail'); ?>
 <!-- <meta http-equiv="refresh" content="10"> -->

<div class="container py-1 h-100">
<div class="row justify-content-center align-items-center h-100">
<div class="col-12 col-lg-9 col-xl-12">
<div class="card shadow-2-strong card-registration text-dark" style="border-radius: 12px;">
<div class="card-body p-4 p-md-5">

  <div>
<?php echo $_SESSION['currentUser']->username; ?>
     </div>
<div class="row border-bottom">
    <div class="col">
        <h5>All orders</h5>
    </div>
    <div class="col">
        <form action="<?php echo URLROOT; ?>/staffs/viewOrders" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php if (isset($data['query'])) echo $data['query']; ?>" name="query" placeholder="search anything..." aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2"><button type="submit" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-magnifying-glass"></i> Search</button></span>
            </div>
        </form>
    </div>
</div>

<div class="mt-4">
        <div class="btn-group" class="btn btn-primary position-relative">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"><span style="font-weight: 600;">Filter </span><i class="fas fa-filter" style="font-size:15px;color:white;text-shadow:2px 2px 4px #000000;"></i></button>
            <div class="dropdown-menu">
                <a href="<?php echo URLROOT; ?>/staffs/viewOrders?filter=in queue" class="dropdown-item">in queue</a>
                <a href="<?php echo URLROOT; ?>/staffs/viewOrders?filter=pending" class="dropdown-item">pending</a>
                <a href="<?php echo URLROOT; ?>/staffs/viewOrders?filter=processing" class="dropdown-item">processing</a>
                <a href="<?php echo URLROOT; ?>/staffs/viewOrders?filter=completed" class="dropdown-item">completed</a>
                <a href="<?php echo URLROOT; ?>/staffs/viewOrders?filter=cancelled" class="dropdown-item">cancelled</a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo URLROOT; ?>/staffs/viewOrders" class="dropdown-item">all</a>
            </div>
  		</div>

<script>
  const urlparams = new URLSearchParams(window.location.search);
  const url_root = '<?php echo URLROOT; ?>'
  let orders = <?php echo json_encode($data['orders']); ?>;
  const currentUser = '<?php echo $_SESSION['currentUser']->id; ?>';
  
  function cancelOrderRemarks (event) {
    // textarea class="form-control" id="cancelremarks" data-order-id="${orders.orderID}" rows="3" name="cancelremarks" required></textarea>
        event.preventDefault();
        const orderID = event.target.dataset.orderId;
        const textArea = document.querySelector(`textarea[name="cancelremarks"][data-order-id="${orderID}"]`);
        // const form = new FormData();
        // form.append("cancelremarks", textArea.value);
    	// form.action = `${url_root}/staffs/cancelOrder/${orderID}`;
    	// console.log(form);
    	const form = `<form method="post" id="submitCancelRemarks" action="${url_root}/staffs/cancelOrder/${orderID}" style="display:hidden">
                    	<textarea class="form-control" id="cancelremarks" rows="3" name="cancelremarks" required>${textArea.value}</textarea>
                      </form>`;
    	
    	document.body.innerHTML += form;
    	document.querySelector('form#submitCancelRemarks').submit();
    	// const xhr = new XMLHttpRequest();
		// xhr.open("POST", `${url_root}/staffs/cancelOrder/${orderID}`);
    	// xhr.send(form);
    }
  
  document.addEventListener("DOMContentLoaded", () => {
  	const orders_body = document.getElementById("orders-body");
    
    let filter_orders;
    
    if(urlparams.has('filter')) {
		const filter_value = urlparams.get('filter');
      // words.filter(word => word.length > 6)
    	filter_orders = orders.filter((orders) => orders.orderStatus == filter_value);
        
    } else {
      filter_orders = orders;
    }
    
    const content = filter_orders.map((orders) => {
          // in queue bg-secondary || pending bg-warning || processing bg-info|| complete bg-success|| cancelled bg-danger (status)
          let classBgStatus;
          if (orders.orderStatus == 'in queue') {
            classBgStatus = 'bg-secondary'
          } else if (orders.orderStatus == 'pending') {
            classBgStatus = 'bg-warning'
          } else if (orders.orderStatus == 'processing') {
            classBgStatus = 'bg-info'
          } else if (orders.orderStatus == 'completed') {
            classBgStatus = 'bg-success'
          } else if (orders.orderStatus == 'cancelled') {
            classBgStatus = 'bg-danger'
          }
      
      		let price;
      		if(orders.orderPrice == '') {
              if(orders.orderStatus== 'cancelled') {
                price = '-';
              }else if(orders.orderStatus== 'pending') {
                price = 'calculating';
              }else if(orders.orderStatus== 'in queue') {
                price = '';
              }else{
                price = parseFloat(orders.orderPrice).toFixed(2);
              }
            } else if (orders.orderPrice >= 0) {
              price = parseFloat(orders.orderPrice).toFixed(2);
            }
      		
      		let weight;
      		if(orders.orderStatus == 'in queue'){
       		 	weight= 'not weighted';
            }
            else if(orders.orderStatus == 'cancelled'){
                      weight= '-';
                  }
            else if(orders.orderStatus == 'pending'){
                            weight= 'calculating';
                        }
          	else if(orders.orderWeight >= 0){
          		weight = parseFloat(orders.orderWeight).toFixed(2);
            }
          
          	// button action
          let buttonAction;
          if(orders.orderStatus == 'in queue') {
            buttonAction = ` <button data-bs-toggle="modal" data-bs-target="#accept${orders.orderID}" class="btn btn-sm btn-outline-warning rounded mb-1">accept</button>
                                <button data-bs-toggle="modal" data-bs-target="#cancel${orders.orderID}" class="btn btn-sm btn-outline-danger rounded">cancel</button>`;
          } else if (orders.orderStatus == 'pending') {
            if(orders.staffID != null && orders.staffID == currentUser) {
              
              buttonAction = `
				<button onclick="location.href='${url_root}/staffs/updateOrder/${orders.orderID}'" class="btn btn-sm btn-outline-info rounded mb-1">update</button>
            	<button data-bs-toggle="modal" data-bs-target="#cancel${orders.orderID}" class="btn btn-sm btn-outline-danger rounded">cancel</button>`
            }
          }
          else if (orders.orderStatus == 'processing') {
            if(orders.staffID == currentUser) {
              buttonAction = `<button data-bs-target="#order${orders.orderID}" data-bs-toggle="modal" class="btn btn-sm btn-outline-success">complete</button>`
            } else {
              buttonAction = `<button class="btn btn-sm btn-outline-success" disabled>complete</button>`
            }
          }
          else if (orders.orderStatus == 'completed') {
            buttonAction = `<button class="btn btn-sm btn-outline-success" disabled>completed!</button>`
          }
          
      		const dateFormat = new Date (orders.orderCreated)
          	const orderCreated =dateFormat.getFullYear() + "-" + (dateFormat.getMonth()+1)+ "-" +dateFormat.getDate();
      
          	let staffName, ordersPrice, ordersWeight;
          
          if(orders.staffName == null) {
            staffName = 'not assigned';
            ordersPrice = '';
            ordersWeight = 'not weighted';
          } else {
            staffName = orders.staffName;
          }
        	return `
                <!-- Modal complete order starts here -->
                <div class="modal fade" id="order${orders.orderID}" tabindex="-1" aria-labelledby="order${orders.orderID}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="order${orders.orderID}">Complete order confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Proceed to complete order #${orders.orderID} ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" onclick="location.href='${url_root}/staffs/completeOrder/${orders.orderID}'" class="btn btn-sm btn-success">Complete this order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal complete order ends here -->

                <!-- Modal cancel order starts here -->
                <div class="modal fade" id="cancel${orders.orderID}" tabindex="-1" aria-labelledby="cancel${orders.orderID}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cancel${orders.orderID}">Cancel order confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Proceed to cancel order #${orders.orderID} ?
                                <br><br>
								<div class="form-group">
									<label for="cancelremarks">Cancel Remarks</label>
									<textarea class="form-control" id="cancelremarks" data-order-id="${orders.orderID}" rows="3" name="cancelremarks" required>Others</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary rounded" data-bs-dismiss="modal">Close</button>
                                <button type="submit" data-order-id="${orders.orderID}" onclick="cancelOrderRemarks(event)" class="btn btn-sm btn-danger rounded">Cancel this order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal cancel order ends here -->

                <!-- Modal accept order starts here -->
                <div class="modal fade" id="accept${orders.orderID}" tabindex="-1" aria-labelledby="cancel${orders.orderID}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="accept${orders.orderID}">Accept order confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Proceed to accept order #${orders.orderID} ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" onclick="location.href='${url_root}/staffs/acceptOrder/${orders.orderID}'" class="btn btn-sm btn-warning">Accept this order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal accept order ends here -->

                <tr>
                    <td>${orders.orderID}</td>
                    <td>${orderCreated}</td>
                    <td>${orders.customerName}</td>
                    <td>${orders.customerPhone}</td>
                    <td>${orders.serviceName}</td>
                    <td style="text-align: center;">${weight}</td>
                    <td>
                        <textarea cols="15" class="form-control" disabled id="floatingTextarea">${orders.orderRemarks}</textarea>
                    </td>
                    <td>${staffName}</td>
                    <!-- price rules if have value or not -->
                    <td style="text-align: center;">${price}</td>
                    <td>
						<span class="badge rounded-pill ${classBgStatus}">${orders.orderStatus}</span>
                    </td>
                    <td style="text-align: right;">
                        <div class="btn-group-vertical">
                            <!-- buttons will depends with order status -->
                            ${buttonAction == undefined ? '' : buttonAction}
                            <!-- end if -->
                        </div>
                    </td>
                </tr>
			`;
        }).join('');
      orders_body.innerHTML = content;
    
    
  });
</script>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Date</th>
                <th scope="col">Customer</th>
                <th scope="col">Phone</th>
                <th scope="col">Service</th>
                <th scope="col" style="text-align: center;">Weight (kg/ft/pcs)</th>
                <th scope="col">Remark</th>
                <th scope="col">Staff</th>
                <th scope="col">Total Price (RM)</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="orders-body">
            
        </tbody>
    </table>
 
  </div>
  </div>
  </div>
  </div>

    <?php require APPROOT . '/views/inc/footer.php'; ?>