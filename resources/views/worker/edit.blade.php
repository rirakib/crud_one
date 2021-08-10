<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>worker</title>
    <style>
        .card{
            box-shadow:5px 5px 14px 8px rgba(0,0,0,0.47);
        }
    </style>
</head>



<body class="bg-light">

    <h1 class="text-center bg-dark text-center pt-3 pb-3 text-white">Edit Profile</h1>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h4>Fill the form</h4>
                </div>
                <div class="col-5 text-right">
                    <a href="{{route('worker.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white p-3">
                    <form action="{{route('worker.update',$editVar)}}" method="POST">
                        @method('put')
                        @csrf
                        <input type="hidden" name="id" value="{{$editVar->id}}">
                        <div class="form-group mt-2">
                            <label for="userNumber">User id</label>
                            <input type="number" class="form-control @error('userNumber') is-invalid @enderror" value="{{$editVar->userNumber}}" id="userNumber" name="userNumber"
                                placeholder="User id must be 6 number">
                                @error('userNumber')
                                <p class="alert alert-danger">
                                    {{$message}}
                                </p>
                                @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="name">Name </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$editVar->name}}" id="name" name="name"
                                placeholder="John Doe">
                                @error('name')
                                <p class="alert alert-danger">
                                    {{$message}}
                                </p>
                                @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="position">Position </label>
                            <input type="text" class="form-control @error('position') is-invalid @enderror" value="{{$editVar->position}}" id="position" name="position"
                                placeholder="Developer">
                                @error('position')
                                <p class="alert alert-danger">
                                    {{$message}}
                                </p>
                                @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="number">Mobile </label>
                            <input type="number" class="form-control @error('number') is-invalid @enderror" value="{{$editVar->number}}" id="number" name="number"
                                placeholder="01XXXXXXXXX">
                                @error('number')
                                <p class="alert alert-danger">
                                    {{$message}}
                                </p>
                                @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="email">Email </label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$editVar->email}}" id="email" name="email"
                                placeholder="abc@gmail.com">
                                @error('email')
                                <p class="alert alert-danger">
                                    {{$message}}
                                </p>
                                @enderror
                        </div>  
                        <button type="submit" class="btn btn-primary mb-2 mt-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>










</body>

</html>