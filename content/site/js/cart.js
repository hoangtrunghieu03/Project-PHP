$(".cart_quantity_delete").on("click", function () {
  let isbn = $(this).data("isbn");
  $.ajax({
    url: "ajax.php",
    method: "POST",
    data: {
      action: "delete-from-cart",
      isbn: isbn,
    },
    success: function (data) {
      $("tr[data-id=" + isbn + "]").remove();
    },
    error: function (message) {
      console.log(message);
    },
  });
});

$("tr.cart-product").click(function (e) {
  console.log("click");
  let id = $(this).data("id");
  let quantity;
  if (e.target.className == "cart_quantity_up") {
    quantity =
      Number($("tr[data-id=" + id + "] input.cart_quantity_input").val()) + 1;
    $("tr[data-id=" + id + "] input.cart_quantity_input").val(quantity);
    let tong_tien =
      $("tr[data-id=" + id + "] input").val() *
      $("tr[data-id=" + id + "] span.price").text();
    $("tr[data-id=" + id + "] p.cart_total_price span").text(
      tong_tien.toFixed(0)
    );
    if ($("tr[data-id=" + id + "] input.cart_quantity_input").val() > 1) {
      $("tr[data-id=" + id + "] a.cart_quantity_down").css(
        "pointer-events",
        ""
      );
    }
  }
  if (e.target.className == "cart_quantity_down") {
    quantity =
      Number($("tr[data-id=" + id + "] input.cart_quantity_input").val()) - 1;
    $("tr[data-id=" + id + "] input.cart_quantity_input").val(quantity);
    let tong_tien =
      $("tr[data-id=" + id + "] input.cart_quantity_input").val() *
      $("tr[data-id=" + id + "] span.price").text();
    $("tr[data-id=" + id + "] p.cart_total_price span").text(
      tong_tien.toFixed(0)
    );
    if ($("tr[data-id=" + id + "] input.cart_quantity_input").val() == 1) {
      $("tr[data-id=" + id + "] a.cart_quantity_down").css(
        "pointer-events",
        "none"
      );
    }
  }
  /*------ tinh tong gio hang ---------*/
  let subtotal = 0;
  $(".cart_total span").each(function (index, value) {
    subtotal += parseFloat(value.innerText);
  });
  $("#cart-subtotal").text("$" + subtotal.toFixed(0));
  /*------- cap nhat gio hang ---------*/
  if (quantity >= 0) {
    $.ajax({
      url: "ajax.php",
      method: "POST",
      data: {
        action: "update_cart",
        key: id,
        up_or_down: e.target.className,
      },
    });
  }
});
