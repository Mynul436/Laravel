<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Relation Ship!</title>
  </head>
  <body>
   <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center my-3">Elequent Relationship </h2>

            <table class="table table-bordered">
                <thead>
                    <tr>
                     <th>Title</th>
                    <th>Comment</th>
                    </tr>
                 
                </thead>
<tbody>
@foreach($posts as $key)
<tr>
    <td>{{$key->title}}</td>
    <td>@foreach($key->comment as $cmt)
        {{$cmt->message}}
        
    @endforeach</td>
<td></td>

</tr>
    
@endforeach

</tbody>

            </table>
        </div>
    </div>
   </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
