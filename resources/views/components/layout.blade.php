<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full h-full flex flex-col flex-1">
        <x-navbar></x-navbar>
        <main class="flex flex-col p-4 w-full h-full">
            {{ $slot }}
        </main>
        <x-footer></x-footer>
    </div>
</body>

</html>
