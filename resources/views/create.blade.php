@extends('master')
@section('content')



    <div class="form-style-3">
        <form class="form-horizontal" action="/store" method="post">

            {{csrf_field()}}


            <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
                <center><tr>
                           <td><h1>Product  Form For Cylinder Gas</h1></td>
                    </tr><center>
                         
                        <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
                            <tr>
                                    <td align='center'><b>Customer Name:</b></td>
                                    <td><input type='text' name='c_name'></td>
                            </tr>
                            <tr> <td>&nbsp;</td> </tr>
                            <tr>
                                    <td align='center'><b>Customer Email-id:</b></td>
                                    <td><input type='text' name='c_eid'></td>
                            </tr>
                            <tr> <td>&nbsp;</td> </tr>
                            <tr>
                                    <td align='center'><b>Address:</b></td>
                                    <td><input type='text' name='c_address'></td>
                            </tr>
                            <tr> <td>&nbsp;</td> </tr>
                            <tr>
                                    <td align='center'><b>Phone-no:</b></td>
                                    <td><input type='text' name='c_phone'></td>
                            </tr>
                            <tr> <td>&nbsp;</td> </tr>
                            <tr>
                                    <td align='center'><b>Cylinder-company:</b></td>

                                    

                                <td><select name="cylinder_company">
                                     <option value="" disabled>--Please choose an option--</option>
                                     <option value="jamuna" >jamuna</option>
                                    <option value="basundhara">basundhara</option>

                                </select>
                                </td>

                            </tr>
                            <tr> <td>&nbsp;</td> </tr>
                            <tr>
                                    <td align='center'><b>Cylinder-weight:</b></td>
                                    <td><select name="cylinder_weight">
                                        <option value="" disabled>--Please choose an option--</option>
                                        <option value="1" >1kg</option>
                                        <option value="2">2kg</option>
                                        <option value="5">5kg</option>
                                    </select>
                                </td>

                            </tr>
                            <tr> <td>&nbsp;</td> </tr>
                            <tr>
                                    <td align='center'><b>cylinder-quantity:</b></td>
                                    <td><input type='text' name='cylinder_number'></td>

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

