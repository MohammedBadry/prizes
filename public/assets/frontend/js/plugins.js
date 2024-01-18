$(document).ready(function () {
   $(".open-edit-popUp").on("click", function (e) {
        e.preventDefault();
        $(".edit-time").addClass("active");
   });
   $(".edit-time .close-popup").on("click", function () {
       $(".edit-time").removeClass("active");
   })
});