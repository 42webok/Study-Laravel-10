<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 d-block mx-auto">
                
                <form action="{{url('/add')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" placeholder="Enter Name" class="form-control">
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Enter Email" class="form-control">
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="number" placeholder="Enter Number" class="form-control">
                        <span class="text-danger">
                            @error('number')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-info" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>