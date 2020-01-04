@extends('master')
@section('content')

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
            <th>email-id</th>
            <th>customer total-bill</th>



        </tr>
        @php $i=0;@endphp

        @foreach($customers as $customer)
        @php $i++; @endphp
        <tr>
            <td>{{$i}}</td>
            <td>{{$customer->c_name}}</td>
            <td>{{$customer->c_eid}}</td>
            <td>{{$customer->calculation}}</td>

        </tr>
        @endforeach

    </table>
</div>
@endsection



