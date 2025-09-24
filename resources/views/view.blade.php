<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>View Data</title>
</head>

<body>
    <header class="p-5 bg-dark">
        <h2 class="text-center text-light">Laravel Crud</h2>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 mb-4">
                <a href="{{url('/add')}}" class="btn btn-info">
                Add Data
            </a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key=>$val)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$val['name']}}</td>
                    <td>{{$val['email']}}</td>
                    <td>{{$val['number']}}</td>
                    <td>{{$val['created_at']}}</td>
                    <td>
                        <a href="{{url('editFormData' , ['user_id'=>$val['id']])}}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{url('delete' , ['user_id'=>$val['id']])}}" class="btn btn-danger btn-sm">Delete</a>
                   </td>
                </tr>
                  @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>