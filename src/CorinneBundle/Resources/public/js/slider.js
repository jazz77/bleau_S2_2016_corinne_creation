function maBoucle() {
    setTimeout(function () {
        $('.carousel').carousel('next');

        maBoucle();


    }, 6000);
}


$(document).ready(function () {
    $('.modal-trigger').leanModal();

    

    $('.carousel.carousel-slider').carousel({full_width: true, indicators: true});
    
//    $('.carousel').carousel();


//     maBoucle();
//     $('.carousel').carousel('next', 3); // Move next n times.
//
//    function disableselect(e) {
//        return false
//    }
//
//    function reEnable() {
//        return true
//    }
//
//    //if IE4+
//    document.onselectstart = new Function("return false");
//    document.oncontextmenu = new Function("return false");
//    //if NS6
//    if (window.sidebar) {
//        document.onmousedown = disableselect;
//        document.onclick = reEnable;
//
//    }
//
//    $(document).on('contextmenu', 'div', function (e)
//    {
//        e.preventDefault();
//        return false;
//    });
//
//    $('img').mousedown(function (event) {
//        switch (event.which) {
//            case 1:
// //                alert('Left Mouse button pressed.');
//                break;
//            case 2:
//                alert('Middle Mouse button pressed.');
//                break;
//            case 3:
// //                alert('Right Mouse button pressed.');
//                $('#modal1').openModal();
//                break;
//            default:
//                alert('You have a strange Mouse!');
//        }
   });







});