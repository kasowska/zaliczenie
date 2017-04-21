(function () {
    console.log('dziala');
})();
var bgmode = 0;
function changeBg (url, orginUrl) {
    if (bgmode === 0) {
        $('body').css('background', 'url('+url+') no-repeat fixed').css('background-size', 'cover');
        bgmode = 1;
    } else {
        
    $('body').css('background', 'url('+orginUrl+') no-repeat fixed').css('background-size', 'cover');
    bgmode = 0;
    }
}
     function validInput () {
         var input = $('#name').val();
         if (input.lenght > 0 ) {
             $('button[type=submit]').removeAttr('disabled');
         } else {
             $('button[type=submit]').attr('disabled', 'disabled');
         }
     }
   
    