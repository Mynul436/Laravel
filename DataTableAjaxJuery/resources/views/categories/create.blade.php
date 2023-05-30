<?php 
$cookie_name="User";
$cookie_value="Mynul Islam";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
      {{-- <form action= "<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"> --}}

        @csrf

        Name :<input type="text" name="fname"><br><br>

        Age :<input type="text" name="age"> <br><br>


        <input type="file" name="image"> <br><br>

        <input type="submit" value="Save" name="save">

    </form>

    <?php 
     if(isset($_POST['save'])){
      echo $_POST['fname'] . "<br>";
      echo $_POST['age'] . "<br>";
      echo $_COOKIE[$cookie_name];


     }
    ?>





    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group -mb-3">
                        <label for="">Name</label>
                        <input type="text" id="name" class="form-control">

                    </div>
                    <div class="form-group -mb-3">
                        <label for="">Type</label>
                        <select name="" id="type" class="form-control">
                            <option disabled selected>Chose option</option>
                            <option disabled selected>Electron</option>

                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveBtn"></button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-3" style="margin-top: 100px">
            <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Add
                Category</a>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
