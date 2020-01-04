@extends('master')
@section('content')

    <div class="form-style-3">
        <form class="form-horizontal" action="/message" method="post">

            {{csrf_field()}}


            <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
                <center><tr>
                           <td><h1>HERE IS YOUR TOTAL BILL</h1></td>
                    </tr><center>
                         
                        <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
                            <tr>
                                    <td align='center'>Customer Name:</td>
                                    <td><input type='text' name='c_name' value="{{$name}}" disabled></td>
                            </tr>
                            <tr> <td>&nbsp;</td> </tr>

                            <tr>
                                    <td align='center'>Customer Email-id:</td>
                                    <td><input type='text' name='c_name' value="{{$eid}}" disabled></td>
                            </tr>
                            <tr> <td>&nbsp;</td> </tr>


                            <tr>
                                    <td align='center'>cylinder-company</td>
                                    <td><input type='text' name='payment' value="{{$c_company}}" disabled></td>
                            </tr>

                            <tr> <td>&nbsp;</td> </tr>

                            <tr>
                                    <td align='center'>cylinder-weight</td>
                                    <td><input type='text' name='payment' value="{{$c_weight}}" disabled></td>
                            </tr>

                            <tr> <td>&nbsp;</td> </tr>

                            <tr>
                                    <td align='center'>cylinder-quantity</td>
                                    <td><input type='text' name='payment' value="{{$c_quantity}}" disabled></td>
                            </tr>

                            <tr> <td>&nbsp;</td> </tr>


