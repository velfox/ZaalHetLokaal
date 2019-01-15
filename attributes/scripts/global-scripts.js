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

