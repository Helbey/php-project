<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="bg-dark">
<div class="ml-10 2xl:ml-32 mr-10 pt-20">

<h1 class="text-3xl text-white_ pl-16 mt-4 mb-4">
    {{$movie['title']}}
</h1>
<img src="{{$movie['image']}}" class="mr-10 mt-10">
 <p class="text-xl text-white_ pl-16 mt-4 mb-4">
    {{$movie['description']}}
</p>
</div>
</div>
</div>
</div>
</body>
</html>