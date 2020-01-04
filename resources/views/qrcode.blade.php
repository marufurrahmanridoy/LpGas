@extends('managerview')
@section('content')


    <html>
<head>

</head>
<body>

{!! QrCode::size(500)->generate($all); !!}




</body>
</html>


@endsection
