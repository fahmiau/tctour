// (function($){
//   $(function(){

//     $('.sidenav').sidenav();
//     $('.parallax').parallax();
//     $('input.autocomplete').autocomplete({
//       data: {
//         "Bandung": null,
//         "Jakarta": null,
//         "Surabaya": null,
//         "Yogyakarta": null,
//         "Solo":'https://placehold.it/250x250'
//       },
//     });

//   }); // end of document ready
// })(jQuery); // end of jQuery name space

$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $('input.autocomplete').autocomplete({
    data: {
      "Bandung": null,
      "Jakarta": null,
      "Solo": null,
      "Yogyakarta": null,
      "Surabaya": null,
      "Medan": null,
      "Padang": null
    },
  });
  $('.datepicker').datepicker({
    format:('yyyy-mm-dd')
  });
  $('select').formSelect();
});