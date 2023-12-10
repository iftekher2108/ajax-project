<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./node_modules/jquery-ui/themes/base/theme.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }


        table {
            overflow-x: scroll;
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid black;
            padding: 10px;
        }

        .anime {
            animation: rotate 1s linear infinite;
        }


        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body>


    <div class="load h-100 w-100 position-fixed bg-white ">
        <div class="position-absolute display-4 top-50 start-50 translate-middle" >
            <i class="anime  fa-solid fa-spinner"></i>
        </div>    
    </div>



    <br><br><br>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div id="draggable" class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title text-white-50 fs-5" id="staticBackdropLabel">user add data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form class="input-form" style="display: flex; flex-direction: column; gap: 10px; padding: 0% 10%; ">
                        <input type="text" class="name form-control" id="name" name="name" placeholder="name" required autocomplete="name">
                        <input type="email" class="email form-control" id="email" name="email" placeholder="email" required autocomplete="email">
                        <input type="text" class="password form-control" id="password" name="password" placeholder="password" required autocomplete="off">


                        <div class="d-flex text-white-50 justify-content-between">
                            <button class="submit px-5 btn btn-success" data-bs-dismiss="modal">Add data</button>
                            <button type="button" class="btn px-5 btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <br>

    <button class="delete-record btn btn-success px-5 mx-5 my-1 align-self-end">delete</button>
    <div class="table-data">
        <table class="text-center">
            <tr>
                <th class="bg-success text-white-50"><input type="checkbox" id="select-all"></th>
                <th class="bg-success text-white-50 ">ID</th>
                <th class="bg-success text-white-50 ">Name</th>
                <th class="bg-success text-white-50 ">E-mail</th>
                <th class="bg-success text-white-50 ">Password</th>
                <th class="bg-success text-white-50 " colspan="2">Action</th>
            </tr>

            <?php

            include "./connection.php";

            $select = "SELECT * FROM user";

            $execute = mysqli_query($con, $select);

            while ($row = mysqli_fetch_array($execute)) { ?>


                <tr id="select<?php echo $row['id']; ?>">
                    <td><input type="checkbox" class="select-id" value="<?php echo $row['id'] ?>"></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td class="edit bg-warning user-select-none text-white" ><a class="nav-link edit-select" id="<?php echo $row['id'] ?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update-model">edit</a></td>

                    <td class="bg-danger user-select-none text-white"><a onclick="item_delete( <?php echo $row['id']; ?> )" id="id<?php echo $row['id']; ?>" class="delete nav-link">delete</a></td>

                </tr>


                <!-- href="./delete.php?id=<?php echo $row["id"]; ?>" -->





            <?php
            }
            ?>

        </table>

    </div>

<!-- ======================== update database data ============================= -->


    <!-- Modal -->
    <div class="modal fade" id="update-model" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div id="draggable" class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title text-white-50 fs-5" id="staticBackdropLabel">user update data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form class="input-form" style="display: flex; flex-direction: column; gap: 10px; padding: 0% 10%; ">
                    
                        <input type="text" class="user-id form-control" id="id" placeholder="id" disabled>
                        <input type="text" class="name form-control" id="name" name="name" placeholder="name" required autocomplete="name">
                        <input type="email" class="email form-control" id="email" name="email" placeholder="email" required autocomplete="email">
                        <input type="text" class="password form-control" id="password" name="password" placeholder="password" required autocomplete="off">


                        <div class="d-flex text-white-50 justify-content-between">
                            <button class="update-submit px-5 btn btn-success" data-bs-dismiss="modal">Update data</button>
                            <button type="button" class="btn px-5 btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>








    <a href="https://www.google.com/" target="_blank"> windows
    </a>

    
   <table class="table-2">

    </table>

    
    <script src="./dist/jquery.min.js"></script>

    <script src="./node_modules/jquery-ui/dist/jquery-ui.min.js"></script>


    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="./src/main.js"></script>

    <script>
        // all delete not possible to this file

        $("#select-all").click(function() {
            console.log('iftekher mahmud')
            $('.select-id').prop('checked', $(this).prop('checked'))
        })



        $('.delete-record').click(function() {

            var id = [];
            $('.select-id:checked').each(function() {
                id.push($(this).val())
            })

            console.log(id)

            $.ajax({
                type:'post',
                url: './multi-delete.php',
                data:{
                uid:id,
                },
                success: function(data) {
                    console.log("delete successfully")
                    $('.select-id:checked').parent().parent().hide(300)
                    // window.location.href= 'index.php';

                    console.log(data); //for debug purposes

                }
                // error:function(data) {
                //     console.log('error'+ data)
                // }
            })


        })

        // ==================data update get selected data =============================

        $('.edit-select').click(function(){

            var select_id =$(this).attr('id');
          
            console.log(id); //for debug purposes
            $.ajax({
                type: "post",
                url: "./update-id.php",
                data: {uid:select_id},
                dataType: "json",
                success: function (data) {
                    console.log(data); //for debug purposes
                  $('#update-model .user-id').val(data[0].id);
                  $('#update-model .name').val(data[0].name);
                  $('#update-model .email').val(data[0].email);
                  $('#update-model .password').val(data[0].password);   
                }
            });

        })
        // ==================data update get selected data =============================


        $('.update-submit').click(function(e){
            e.preventDefault();
            var id = $('#update-model #id').val();
            var name = $("#update-model #name").val();
            var email = $("#update-model #email").val();
            var password = $("#update-model #password").val();
            $.ajax({
                type: "post",
                url: "./update.php",
                data: {
                    uid:id,
                    uname: name,
                    uemail: email,
                    upassword: password,
                },
                success: function (data) {
                    console.log(data);
                }
            });
        })





    </script>
</body>

</html>