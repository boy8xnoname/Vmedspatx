jQuery(document).ready(function($){
    // Get the date from the localized ACF field
    var countDownDate = new Date(countdown_timer_date.date).getTime();
    
    // Update the countdown every 1 second
    var x = setInterval(function() {
        
        // Get today's date and time
        var now = new Date().getTime();
        
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60)));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Display the result in the element with id="countdown-timer"
        $("#countdown-timer").html('<div class="countdown-item"><span class="digi">'+ days + '</span><span class="label"> Days </span></div><div class="countdown-item"><span class="digi">' + hours + '</span><span class="label"> Hours </span></div><div class="countdown-item"><span class="digi">' + minutes + '</span><span class="label"> Minutes </span></div><div class="countdown-item"><span class="digi">' + seconds +'</span><span class="label"> Seconds </span></div>');

        // If the count down is finished, write some text 
        if (distance < 0) {
           clearInterval(x);
           $("#countdown-timer").html("EXPIRED");
        }
    }, 1000);
});