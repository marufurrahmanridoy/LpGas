
@extends('managerview')
@section('content')


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
            background-color:#000000	;
        }
        .order-form{
            margin: 50px auto;
            padding: 25px 20px;
            background: #696969;
            box-shadow: 2px 2px 4px #90EE90;
            border-radius: 10px;
            color: #6B8E23;
        }


    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2">
            <div class="order-form">




        <form class="form-horizontal" action="/order" method="post">

            {{csrf_field()}}


            <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
                <center><tr>
                           <td><h1>Product verification process </h1></td>
                    </tr><center>
                         
                        <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
                            <tr>
                                    <td align='center'>Agent_name:</td>
                                    <td><input type='text' name='a_name'></td>
                            </tr>
                            <tr> <td>&nbsp;</td> </tr>
                            <tr>
                                    <td align='center'>cylinder-id:</td>
                                    <td><input type='text' name='c_id'></td>
                            </tr>
                            <tr> <td>&nbsp;</td> </tr>
                            <tr>
                                    <td align='center'>Cylinder-weight:</td>
                                    <td><select name="c_weight">
                                        <option value="" disabled>--Please choose an option--</option>
                                        <option value="1" >1kg</option>
                                        <option value="2">2kg</option>
                                        <option value="5">5kg</option>
                                    </select>
                                </td>

                            </tr>

                            <tr> <td>&nbsp;</td> </tr>

                                     <tr>
                                    <td align='center'>Cylinder-company:</td>

                                    

                                <td><select name="c_company">
                                        <option value="" disabled>--Please choose an option--</option>
                                        <option value="jamuna" >jamuna</option>
                                        <option value="basundhara">basundhara</option>

                                    </select>
                                </td>

                            </tr>


                            <tr> <td>&nbsp;</td> </tr>
                            <table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
                                <tr>
                                        <td align='center'><input type='submit' name='submit' value="submit"></td>
                                </tr>
                            </table>
                        </table>
                         
            </table>



        </form>
    </div>
            <div class="team-member-img">
                <img class="img-responsive" src="assets/images/team/AdobeStock_197590222-32a7aceb.jpeg" alt="">
            </div>



@endsection


