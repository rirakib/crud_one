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

    <h1 class="text-center bg-dark text-center pt-3 pb-3 text-white">Worker Dashboard</h1>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h4>Worker list</h4>
                </div>
                <div class="col-5 text-right">
                    <a href="{{route('worker.create')}}" class="btn btn-primary">Create New</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-2">
                <div class="table-responsive">
                    <table class="table bg-dark text-white">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Show</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($indexData as $data)
                            <tr>
                                <td>{{$data->userNumber}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->position}}</td>
                                <td>{{$data->number}}</td>
                                <td>{{$data->email}}</td>
                                <td><a href="{{route('worker.edit',$data->id)}}" class="btn btn-primary">Edit</a></td>
                                <td><a href="{{route('worker.show',$data->id)}}" class="btn btn-primary">Show</a></td>
                                <td>
                                    <form action="{{route('worker.destroy',$data->id)}}" method="POST">
                                        @method('delete')
                                        @csrf 
                                        <input type="submit" class="btn btn-danger" value="Delete"/>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>


    







</body>

</html>