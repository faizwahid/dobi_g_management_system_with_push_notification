setInterval(function() { pushNotify(); }, 6000);
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
      	vibrate: [200, 100, 200]
    });
    // url that needs to be opened on clicking the notification
    // finally everything boils down to click and visits right
    notification.onclick = function() {
        window.open(url);
    };
    return notification;
}