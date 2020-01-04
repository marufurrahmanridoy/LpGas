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
                                <td align='center'>total bill</td>
                                <td><input type='text' name='payment' value="{{$calculation}}" disabled></td>
                        </tr>

                                
                        <tr> <td>&nbsp;</td> </tr>
                        <tr>
                                <td align='center'>payment_method:</td>
                                <td><select name="p_method">
                                    <option value="" disabled>--Please choose an option--</option>
                                    <option value="bkash" >bkash</option>
                                    <option value="handcash">handcash</option>
                                    <option value="dbl">dbl</option>
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
@endsection


