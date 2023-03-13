<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
     <div class="container">
      <table class="table">
        <pre>
          
        </pre>
        <thead>
            <tr>
                <th>p_id</th>
                <th>p_name</th>
                <th>p_cat</th>
                <th>p_desc</th>
                <th>price</th>
                <th>image</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $pro)

           
            <tr>
            
                <td>{{$pro->p_id}}</td>
                <td>{{$pro->p_name}}</td>
                <td>{{$pro->p_cat}}</td>
                <td>{{$pro->p_desc}}</td>
                <td>{{$pro->price}}</td>
                <td>{{$pro->image}}</td>
                <td>
               
                <a href="{{url('/show/delete/')}}/{{$pro->p_id}}"><button class="btn btn-danger">Delete</button></a>

                </td>
                <td>
               
                <a href="#"><button class="btn btn-primary">Edit</button></a>

                </td>
                
            </tr>
            @endforeach

        </tbody>
      </table>
     </div>
</body>
</html>