<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condition</title>
</head>
<body>
    Number={{ $number }}

    @if ($even)
        <h1>{{$number}} is an Even Number </h1>
        @else
        <h1> {{$number}}  is an Odd Number</h1>
    @endif


    @if ($m<$f)
       <h1>more than Females </h1>
    @elseif ($m>$f) 
    <h1>more then Males </h1>
     @else
     Equal Female and Males 
    @endif

</body>
</html>