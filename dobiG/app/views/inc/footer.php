</div> <!-- container wrapper from header.php-->

<div class="mt-auto container " >
<footer class="mt-auto p-1 mt-5 py-3 ">
   <div class="d-flex flex-column align-items-center pt-3  " style="max-width:auto">
    <p class="mb-1 text-black">&copy; 2006–2023 Dobi G</p>
    <ul class="list-inline text-white">
      <li class="list-inline-item"><a href="#" class="link-blue">Privacy</a></li>
      <li class="list-inline-item"><a href="#" class="link-blue">Terms</a></li>
      <li class="list-inline-item"><a href="#" class="link-blue">Support</a></li>
    </ul>
  </div>
  </footer>
</div>
<style>
  .sticky {
  position: -webkit-sticky;
  position: fixed;
  bottom: 0;
  left: 0; 
  right: 0; 
  margin-left: auto; 
  margin-right: auto;
}

#content {
  position: fixed; 
  left: 0; 
  right: 0; 
  margin-left: auto; 
  margin-right: auto;
  margin-top: 5em; /* relative to the text size */
  bottom: 0;
  width: auto; /* Need a specific value to work */
}
</style>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="<?php echo URLROOT; ?>/js/main.js"></script>
<!-- if suburl is customers -->
<?php 
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
if ($uri_segments[1] == 'customers') { ?>
    <script>
      setInterval(function() { pushNotify(); }, 5000);
function pushNotify() {
    if (!("Notification" in window)) {
        // checking if the user's browser supports web push Notification
        alert("Web browser does not support desktop notification");
    }
    if (Notification.permission !== "granted")
        Notification.requestPermission();
    else {
        $.ajax({
            url: "/customers/notification",
            type: "GET",
            success: function(data, textStatus, jqXHR) {
                // check if response is 200
                if (jqXHR.status === 200) {
                    // create a notification
                    notification = createNotification(data.title, data.icon, data.body, data.url);
                    // closes the web browser notification automatically after 5 secs
                    setTimeout(function() {
                        notification.close();
                    }, 60000);
                }
            },
            error: function(response) { 
              console.log(response);
            }
        });
    }
};
function createNotification(title, icon, body, url) {
    var notification = new Notification(title, {
        icon: icon,
        body: body,
    });
    // url that needs to be opened on clicking the notification
    // finally everything boils down to click and visits right
    notification.onclick = function() {
        window.open(url);
    };
    return notification;
}
    </script>
<?php
}
?>
</body>
</html>