 
//  on load display data
 $(document).ready(function () {
    //  $(".show").load("./load-data.html")

    $.ajax({
       url: "./display.php",
       success: function (data) {
          $("#tbody").html(data);
       }
    })

 });




// $(".data").click(function () {
//    $(".show").load("./display.php")
//    $(".show").css({
//       "color": "white",
//       "background-color": "black"
//    })
// })


// submit to data save
$(".submit").click(function (e) {
   e.preventDefault();

   var name = $("#name").val();
   var email = $("#email").val();
   var password = $("#password").val();

   console.log(name, email, password)

   $.ajax({
      url: "./insert.php",
      method: "POST",
      data: {
         uname: name,
         uemail: email,
         upassword: password
      },
      success: function () {
         // console.log("success")
         // $("#name").val("");
         // $("#email").val("");
         // $("#password").val("");

         //  $.ajax({
         //     url: "./display.php",
         //     method: "post",
         //     success: function (responce) {
         //        $("#tbody").html(responce);
         //     }
         //  })
         $("#tbody").load("./display.php");


      }
   })

})
// submit to data save




// database data deleted without page reloading
 function item_delete(id){
   $.ajax({
      url: "./delete.php",
      method: "post",
      data: {
          uid: id

      },
      success: function() {
         // $("#tbody").load("./display.php");
         $(`#id${id}`).parent().parent().hide(300)

      }
   })
}

// database data delete without page reloading




// database data update without page reloading




// database data update without page reloading



// form window drag
$("#draggable").draggable()
// form window drag


