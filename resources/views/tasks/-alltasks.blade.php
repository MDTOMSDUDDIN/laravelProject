<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all task file </title>
</head>
<body>
    <h1>this is a laravel blade template </h1>
    <h2>this is a all task file </h2>
    <div>
     @foreach ($tasks as $task)
         <p>{{ $task['name'] }}</p>
         <p>{{ $task['description'] }}</p>
         
     @endforeach
    </div>

    <script>
        const tasks=@json($tasks);
        console.log(tasks);
        console.log(tasks.length);
 
        
    </script>
</body>
</html>