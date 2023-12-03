<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
            animation: rotate 1.5s ease-in-out infinite;
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


    <div id="load" class="fs-1 position-fixed top-50 d-none">
        <i class="anime fa-solid fa-spinner"></i>
    </div>



    <br><br><br>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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


                    <form class="input-form" style="display: flex; flex-direction: column; gap: 10px; padding: 0% 30%; ">
                        <input type="text" class="name" id="name" name="name" placeholder="name" required>
                        <input type="email" class="email" id="email" name="email" placeholder="email" required>
                        <input type="password" class="password" id="password" name="password" placeholder="password" required>


                        <div class=" gap-4 d-flex text-white-50">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="submit btn btn-success" data-bs-dismiss="modal">Add data</button>
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
            <th class="bg-success text-white-50"><input type="checkbox" class="select_all"></th>
            <th class="bg-success text-white-50 ">ID</th>
            <th class="bg-success text-white-50 ">Name</th>
            <th class="bg-success text-white-50 ">E-mail</th>
            <th class="bg-success text-white-50 ">Password</th>
            <th class="bg-success text-white-50 " colspan="2">Action</th>

            <tbody id="tbody">



            </tbody>


        </table>
    </div>


    <br><br><br>

    <button class="data btn btn-primary"> load data</button>
    <br><br><br>

    <div class="show">

    </div>





    <a href="https://www.google.com/" target="_blank"> windows
    </a>


    <script src="./dist/jquery.min.js"></script>
    <script src="./node_modules/jquery-ui/dist/jquery-ui.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="./src/main.js"></script>

    <script>
        $(".select_all").click(function() {
            console.log('iftekher mahmud')
            $('.select_id').prop('checked', $(this).prop('checked'))
        })

        $('.delete-record').click(function() {
            
           var id = [];
            $('.select_id:checked').each(function() {
                id.push($(this).val())
            })

            $.ajax({
                type: 'delete',
                url: 'multi-delete.php', 
                data: {
                 ids:id    
                }
                    
                ,
                success: function(data) {
                    console.log("delete successfully" +id)
                }
                // error:function(data) {
                //     console.log('error'+ data)
                // }
            })


        })





    </script>

</body>

</html>