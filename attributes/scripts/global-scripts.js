//slider banner function
var slider = function(){
    if(i < images.length){
        var image = images[i];
        $('header').css("background-image", "url(/attributes/img/header/" + image + ")");
        $(".slider-text").text(textjes[t]);
        setTimeout(slider, 5000); // check again in 5 seconds
        if(t > textjes.length -2){
            t=0;
        }
        i++
        t++
    }
    else {
        i = 0;
        setTimeout(slider, 1000);
    }
}

//slider banner start function
var images = ["header-1.jpg", "header-2.jpg", "header-3.jpg","header-4.jpg", "header-5.jpg"]; 
var textjes = ["vergadering", "Feesten", "catering", "vergaderingen"]; 
i = 0;
t = 0;
slider();

//set menu active
$('document').ready(function(){
    console.log('script werkt, Menu geladen!');
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);
    if(filename === 'mogelijkheden.php'){
        console.log('jup');
        var setActive = document.getElementById("2");
        setActive.classList.add("active");
    }
    else if(filename === 'index.php'){
        console.log('jup');
        var setActive = document.getElementById("1");
        setActive.classList.add("active");
    }
    else if(filename === 'fotos.php'){
        console.log('jup');
        var setActive = document.getElementById("3");
        setActive.classList.add("active");
    }
    else if(filename === 'contact.php'){
        console.log('jup');
        var setActive = document.getElementById("4");
        setActive.classList.add("active");
    } else {
        var setActive = document.getElementById("2");
        setActive.classList.add("active");
    }
});

//Show and hide information box('s)
$('document').ready(function(){
    $( ".bt-options" ).click(function() {
        var idnummer = this.id;
        var boxnummer = idnummer.replace(/button-/g,'');
            console.log("slected: " + boxnummer);
            $(".main-button").removeClass( "active-button" );
            i=0
        while (i < 8) {
            i++;
            var boxnummerloop = "box" + i;
            var buttonnummer = "button-box" + i;
            console.log(boxnummer);
            var removeActive = document.getElementById(boxnummerloop);
            $(removeActive).removeClass( "activebox" );
            } 
        
        var setActive = document.getElementById(boxnummer);
        $(setActive).addClass( "activebox" );
        $(setActive).addClass( "activebox" );
        var setActive = document.getElementById(idnummer);
        $(setActive).addClass( "active-button" );

    });
});


//reserveren form
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}