

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Responsive Registration Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{
            background-color:#ffffff	;
        }
        .register-form{
            margin: 50px auto;
            padding: 25px 20px;
            background: #000000;
            box-shadow: 2px 2px 4px #000000;
            border-radius: 5px;
            color: #e60000;
        }
        .register-form h2{
            margin-top: 0px;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-radius: 10px;
            border: 1px solid #e60000;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2">
            <div class="register-form">
                <form class="form-horizontal" action="/login1" method="post">

                    {{csrf_field()}}


                    <h2 class="text-center">Registration</h2>
                    <p class="hint-text">Create your account.</p>
                    <div class="row">



                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Last Name" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">

                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input type="submit" value="submit" class="btn btn-primary btn-block btn-lg" tabindex="7">
                            </div>
                        </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

