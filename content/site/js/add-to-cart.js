$(".cart").on("click", function () {
  let isbn = $(this).data("isbn");
  let quantity = $("#quantity").val();
  $.ajax({
    url: "ajax.php",
    method: "POST",
    data: {
      action: "add-to-cart",
      isbn: isbn,
      quantity: quantity,
    },
    success: function (data) {
      $("#overlay").css("display", "block");
    },
    error: function (message) {
      console.log(message);
    },
  });
});

$("#overlay").on("click", function () {
  $("#overlay").css("display", "none");
});
