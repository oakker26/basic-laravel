<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@php
$str='Hello World';
    $fruits=["orange","mango","banana"];
    $myself=(object)[
        'name'=>"kwikwi",
        "age"=>23,
        'job'=>'developer'
];
@endphp
<ul>
    @foreach ($fruits as $fruit)
    <li><h2>{{$fruit}}</h2></li>
    @endforeach
</ul>
{{"<h1> I m san kyi dr pr </h1>"}}
{{-- {!!"<script>alert('san kyi dr')</script>"!!} --}}
<script>
    console.log('{{$str}}');
    console.log(@json($fruits));
    console.log(@json($myself));
</script>
</body>
</html>
