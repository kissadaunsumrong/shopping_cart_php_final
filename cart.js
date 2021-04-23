
// ************************************************
// Shopping Cart API
// ************************************************


load_cart_item_number();
$('.addItem').click(function(e) {
  e.preventDefault();
    var form = $(this).closest(".form-submit");
    var id = form.find(".pid").val();
    var name = form.find(".pname").val();
    var image = form.find(".pimage").val();
    var price = form.find(".pprice").val();

    console.log( id, name ,  price , image);

    data = {
      pid : id,
      pname: name ,
      pimage: image,
      pprice: price,
    };

    $.ajax({
      method: "POST",
      url:"actionFunction.php",
      data : data,
      success:function(response){
        window.scrollTo(0,0);
        load_cart_item_number();
      }
    })
    .done(function(msg){
      // alert("Data Saved: " + msg);
    });

    load_cart_item_number();

  });

  $('.addItemQM').click(function(e) {
    e.preventDefault();
      var form = $(this).closest(".form-submit");
      var id = form.find(".pid").val();
      var name = form.find(".pname").val();
      var image = form.find(".pimage").val();
      var price = form.find(".pprice").val();
  
      console.log( id, name ,  price , image);
  
      data = {
        pid : id,
        pname: name ,
        pimage: image,
        pprice: price,
      };
  
      $.ajax({
        method: "POST",
        url:"/actionFunction.php",
        data : data,
        success:function(response){
          window.scrollTo(0,0);
          load_cart_item_number();
        }
      })
      .done(function(msg){
        // alert("Data Saved: " + msg);
      });
  
      load_cart_item_number();
  
    });
  
  function load_cart_item_number(){
    $.ajax({
      url: "actionFunction.php",
      method: "GET",
      data: {cartItem: "cart_Item"},
      success:function(response){
        $("#cart-Item").html(response);
      }
    });
  }