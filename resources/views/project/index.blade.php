<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <ul class="projects">
            @foreach($projects as $project)
                <li>{{$project->title}}</li>
            @endforeach
        </ul>
    </div>
</div>
</body>
</html>
