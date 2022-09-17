<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-row w-full justify-around flex-wrap">
        @foreach($figures as $figure)
            <x-item :figure="$figure"></x-item>
        @endforeach
    </div>
</body>
</html>


