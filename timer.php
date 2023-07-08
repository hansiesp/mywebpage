<!DOCTYPE html>
<html>
<head>
  <title>Digital Timer</title>
  <script type="text/javascript">
    function displayTime() {
      var date = new Date();
      var hours = date.getHours();
      var minutes = date.getMinutes();
      var seconds = date.getSeconds();

      hours = (hours < 10) ? "0" + hours : hours;
      minutes = (minutes < 10) ? "0" + minutes : minutes;
      seconds = (seconds < 10) ? "0" + seconds : seconds;

      var time = hours + ":" + minutes + ":" + seconds;
      document.getElementById("timer").innerHTML = time;

      setTimeout(displayTime, 1000);
    }
  </script>
  <style>
    #timer {
      font-size: 48px;
      text-align: center;
      margin-top: 200px;
    }
  </style>
</head>
<body onload="displayTime()">
  <div id="timer"></div>
</body>
</html>
