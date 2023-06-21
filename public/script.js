function updateCurrentTime() {
    var currentTime = new Date().toLocaleTimeString();
    document.getElementById("current-time").innerHTML = currentTime;
  }
  
  // Update the current time every second
  setInterval(updateCurrentTime, 1000);
  