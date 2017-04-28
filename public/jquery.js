(function () {
    console.log('dziala');
})();
var bgmode = 0;
function changeBg (url1,url2, orginUrl) {
    if (bgmode === 0) {
        $('body').css('background', 'url('+url1+') no-repeat fixed').css('background-size', 'cover');
        bgmode = 1;
    } else if (bgmode ===1){
        $('body').css('background', 'url('+url2+') no-repeat fixed').css('background-size', 'cover');
        bgmode = 2;
    } else {
    $('body').css('background', 'url('+orginUrl+') no-repeat fixed').css('background-size', 'cover');
    bgmode = 0;
    }
}
    function validInput () {
    var input = $('#name').val();
    if (input.length > 0) {
        $('button[type=submit]').removeAttr('disabled');
    } else {
         $('button[type=submit]').attr('disabled', 'disabled');
    }
}
   
    