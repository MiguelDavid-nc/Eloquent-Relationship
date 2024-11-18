<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course</title>
</head>
<body>
    @foreach ($courses as $course)
        <h1>COURSE:{{$course->course_name}}</h1>
        <h1>USERS:</h1>
        @foreach ($course->users as $user)
            <div>{{$user->name}}</div>
        @endforeach
        <hr>
    @endforeach
    
</body>
</html>
