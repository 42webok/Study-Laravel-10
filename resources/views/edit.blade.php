<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Form</title>
</head>

<body>
    <header class="p-5 bg-dark">
        <h2 class="text-center text-light">
            Edit Data
        </h2>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 card p-3 d-block mx-auto">
                
            <?php 
             
            
            ?>
            @if(!empty($data))
                
                <form action="{{url('/updateFormData/'.$data['id'])}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" value="{{$data['name']}}" placeholder="Enter Name" class="form-control">
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" value="{{$data['email']}}" placeholder="Enter Email" class="form-control">
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="number" value="{{$data['number']}}" placeholder="Enter Number" class="form-control">
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
                @endif
            </div>
        </div>
    </div>
</body>

</html>