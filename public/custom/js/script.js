// $(document).ready(function() {
//     alert("hello");

//     $.ajax({
//         type: "GET",
//         url: "/sidemenu",
//         dataType: "json",
//         success: function(response) {
//             console.log(response['sidemenu']);

//             $.each(response['sidemenu'], function(k, v) {

//                 $(".sidemenu").append('<li><a href="<?php echo site_url("' + response['sidemenu'][k]['route'] + '"); ?>">' + response['sidemenu'][k]['menu'] + '</a></li>');

//             });




//         },
//         error: function(xhr, textStatus, error) {
//             console.log(xhr.statusText);
//             console.log(textStatus);
//             console.log(error);
//         }
//     })
// });