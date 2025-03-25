$(document).ready(function ($) {
 let query = {
  "fields": ["nome", "renda"]
 }
 encodeURIComponent(query);
 $(document.body).prepend(query);
 $.ajax(
  {
   url: "endpoint.php",
   method: "post",
   dataType: "html",
   success: function (data, status, xhr) {
    $("table").append(data);
   },
   error: function (xhr, status, error) {
    $(".error-msg").prepend(status + ": " + error);
   }
  });
});