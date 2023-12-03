//  $(document).ready(function () {
//     //  $(".show").load("./load-data.html")

//     $.ajax({
//        url: "./display.php",
//        method: "post",
//        success: function (data) {
//           $("#tbody").html(data);
//        }
//     })

//  });

window.onload = function () {
   //    $.ajax({
   //    url: "./display.php",
   //    method: "post",
   //    success: function (p) {
   //       $("#tbody").html(p);
   //    }
   // })

   // if(! $("#tbody").load("./display.php")){

   // } else {

   // }
   $("#tbody").load("./display.php");

}



$(".data").click(function () {
   $(".show").load("./display.php")
   $(".show").css({
      "color": "white",
      "background-color": "black"
   })
})

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




//  console.log($(this).attr('[data-id]'))


// database data deleted without page reloading
 function item_delete(id){
   $.ajax({
      url: "./delete.php",
      method: "post",
      data: {
          uid: id

      },
      success: function() {
         $("#tbody").load("./display.php");
      }
   })
}

// database data delete without page reloading




// database data update without page reloading
// function items_update(id) {

//    $.ajax({
//       url: "./update.php",
//       method: "post",
//       data:{
//          uid: id,
//          uname: name,
//          uemail: email,
//          upassword: password
//       },
//       success:function() {
//          $("#tbody").load("./display.php");
//       }
//    })
// }



// ==============================ajax data select delete ==================




// =============================ajax select data delete ==========================



   // function items_update(id) {
   //    var name = $("#name").val();
   //    var email = $("#email").val();
   //    var password = $("#password").val();
   
   //    $.ajax({
   //       url: "./update.php",
   //       method: "POST",
   //       data: {
   //          uid:id,
   //          uname: name,
   //          uemail: email,
   //          upassword: password
   //       },
   //       success: function () {
   //          // console.log("success")
   //          // $("#name").val("");
   //          // $("#email").val("");
   //          // $("#password").val("");
   
   //          //  $.ajax({
   //          //     url: "./display.php",
   //          //     method: "post",
   //          //     success: function (responce) {
   //          //       $("#tbody").html(responce);
   //          //     }
   //          //  })
   //          // $("#tbody").load("./display.php");
   
   
   //       }
   //    })
   
   // }






// database data update without page reloading



// form window drag
$("#draggable").draggable()
// form window drag


