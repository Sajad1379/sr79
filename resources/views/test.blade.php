<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viwe_port">
    <title>Document</title>
</head>
<body>
    @foreach ($s as $user)
        <p>This is user {{ $user }}</p>
</br>
    @endforeach
    <!-- @if($s==100)
        <h1>salam</h1>
    @else
        <h1>helloooo</h1>
    @endif -->
</body>
</html>