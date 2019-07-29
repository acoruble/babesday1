// Set the date we're counting down to
var countDownDate = new Date("Oct 11, 2019 19:00:00").getTime();

// Get todays date and time
var now = new Date().getTime();

// Find the distance between now an the count down date
var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//Zeros
var hours = (hours.toLocaleString(undefined,{minimumIntegerDigits: 2}));
var minutes = (minutes.toLocaleString(undefined,{minimumIntegerDigits: 2}));
var seconds = (seconds.toLocaleString(undefined,{minimumIntegerDigits: 2}));


if(days>10) {
  document.getElementById("daysTicker").innerHTML = days;
}else{
  document.getElementById("daysTicker").innerHTML = "0" + days;
}
document.getElementById("hoursTicker").innerHTML = hours;
document.getElementById("minsTicker").innerHTML = minutes;
// document.getElementById("secsTicker").innerHTML = seconds;

// If the count down is finished, write some text
if (distance < 0) {
  clearInterval(x);
  document.getElementById("daysTicker").innerHTML = 0;
  document.getElementById("hoursTicker").innerHTML = 0;
  document.getElementById("minsTicker").innerHTML = 0;
}

timer();


function timer() {
  setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    //Zeros
    var hours = (hours.toLocaleString(undefined,{minimumIntegerDigits: 2}));

    var minutes = (minutes.toLocaleString(undefined,{minimumIntegerDigits: 2}));


    if(days>10) {
      document.getElementById("daysTicker").innerHTML = days;
    }else{
      document.getElementById("daysTicker").innerHTML = "0" + days;
    }
    document.getElementById("hoursTicker").innerHTML = hours;
    document.getElementById("minsTicker").innerHTML = minutes;
    // document.getElementById("secsTicker").innerHTML = seconds;

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown").innerHTML = "THE CAMPAIGN BEGINS";
    }
  }, 60000);
}

