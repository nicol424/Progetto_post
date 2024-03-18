<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- cdn css fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    {{-- vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>storysail</title>
</head>
<body>
    <x-nav/>
    <x-header title=""/>

    <div class="min-vh-100">
        {{$slot}}
    </div>
    
    <x-footer/>
</body>
</html>