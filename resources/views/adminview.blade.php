@extends('master')
@section('content')
    <form class="form-horizontal" action="/message" method="post">

        {{csrf_field()}}

    <div>

        <br>
        <br>
        <br>
        <br>
        <br>
    <table class="table table-responsive table-hover">
        <tr>
            <th>#</th>
            <th>customer name</th>
            <th>customer-email</th>
            <th>customer-address</th>
            <th>customer-phon-no</th>
            <th>cylinder-company</th>
            <th>cylinder-weight</th>
            <th>cylinder-number</th>


        </tr>
        @php $i=0;@endphp

        @foreach($customers as $customer)
            @php $i++; @endphp
            <tr>
                <td>{{$i}}</td>
                <td>{{$customer->c_name}}</td>
                <td>{{$customer->c_eid}}</td>
                <td>{{$customer->c_address}}</td>
                <td>{{$customer->c_phone}}</td>
                <td>{{$customer->cylinder_company}}</td>
                <td>{{$customer->cylinder_weight}}</td>
                <td>{{$customer->cylinder_number}}</td>

            </tr>
        @endforeach






    </table>
    </div>
    </form>
@endsection


