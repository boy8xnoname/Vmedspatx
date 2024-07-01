jQuery(document).ready(function($){
    // Get the date from the localized ACF field
    /*var now = new Date();
    var days_i = now.getDate() + countdown_timer_date.day;
    var hours_i = now.getHours() + countdown_timer_date.hours;
    var minutes_i = now.getMinutes() + countdown_timer_date.minutes;
    var seconds_i = now.getSeconds()  + countdown_timer_date.seconds;*/
    // Update the countdown every 1 second
    var d = countdown_timer_date.day*24*60*60*1000;
    var h = 1*countdown_timer_date.hours*60*60*1000;
    var m = 1*1*countdown_timer_date.minutes*60*1000;
    var s = 1*1*1*countdown_timer_date.seconds*1000;
 
//alert(td.getDate() + d);
//var countDownDate = new Date().getTime();
var countDownDate = new Date(new Date().getTime()+(d)+(h)+(m)+(s)).getTime();
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
        $("#countdown-timer").html('<div class="countdown-item"><span class="digi">'+ days + '</span><span class="label"> Days </span></div><div class="countdown-item"><span class="digi">' + hours + '</span><span class="label"> Hours </span></div><div class="countdown-item"><span class="digi">' + minutes + '</span><span class="label"> Minutes </span></div><div class="countdown-item"><span class="digi">' + seconds +'</span><span class="label"> Seconds </span></div>');

  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    //document.getElementById("demo").innerHTML = "EXPIRED";
 
            $("#countdown-timer").html('<div class="countdown-item"><span class="digi">00</span><span class="label"> Days </span></div><div class="countdown-item"><span class="digi">00</span><span class="label"> Hours </span></div><div class="countdown-item"><span class="digi">00</span><span class="label"> Minutes </span></div><div class="countdown-item"><span class="digi">00</span><span class="label"> Seconds </span></div>');

        }
    }, 1000);
});