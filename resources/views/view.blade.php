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
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Date</th>
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
                </tr>
                  @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>