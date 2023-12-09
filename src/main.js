

$(document).ready(function() {
   $('.load').fadeOut(400);


//    $.get("./display.php",function(data) {
//    //   var datas = JSON.stringify(data);
//       // console.log(data)
//       $.each(data,function(key, item) { 

//          // console.log(item)
        
//       $('.tbody').append(`<tr id="select${item.id}">
//                <td><input type="checkbox" class="select-id" value="<?php echo $row['id'] ?>"></td>
//                <td>${item.id}</td>
//                <td>${item.name}</td>
//                <td>${item.email}</td>
//                <td>${item.password}</td>
//                <!-- <td class="edit bg-success user-select-none text-white-50" ><a data-bs-toggle="modal" data-bs-target="#id${item.id}" >edit</a>  -->
//                <!-- </td> -->
//                <td class="bg-success user-select-none text-white-50"><a onclick="item_delete( ${item.id} )" id="id${item.id}" class="delete">delete</a></td>

//          </tr>`); 
//       });
//    },
//    "json"
// );

});


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
      success: function (data) {

         window.location.href = './index.php';



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


