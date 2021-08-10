<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>worker</title>

    <style>
        .info-box{
            display:flex;
            justify-content:center;
        }
        .card{
            height:450px;
            width:300px;
            box-shadow:5px 5px 14px 8px rgba(0,0,0,0.87);
        }
        .card img{
            max-width:250px;
        }
        .card .info{
            margin-top:18px;
        }
        .card .info span{
            color:crimson;
            font-weight:bold;
            font-size:18px;
        }
    </style>
</head>



<body class="bg-light">

    <h1 class="text-center bg-dark text-center pt-3 pb-3 text-white">Worker Information</h1>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h4>Show Worker</h4>
                </div>
                <div class="col-5 text-right">
                    <a href="{{route('worker.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 info-box">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-img text-center">
                            <img src="https://i.picsum.photos/id/1005/5760/3840.jpg?hmac=2acSJCOwz9q_dKtDZdSB-OIK1HUcwBeXco_RMMTUgfY" alt="profile-img">
                        </div>
                        <div class="info">
                                <p>Id: <span>  {{$showVar->userNumber}}</span> </p>
                                <p>Name: <span>  {{$showVar->name}}</span></p>
                                <p>Position: <span>  {{$showVar->position}}</span></p>
                                <p>Mobile: <span>  {{$showVar->number}}</span></p>
                                <p>Email: <span>  {{$showVar->email}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    







</body>

</html>