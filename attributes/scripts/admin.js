

//google recapcha
grecaptcha.ready(function() {
    grecaptcha.execute('6LcwLKsUAAAAANZ1p7fRoV1cvFe55dPwr9ccgRmf', {action: 'homepage'}).then(function(token) {
    document.getElementById("g-recaptcha-response").value= token;
    });
});
