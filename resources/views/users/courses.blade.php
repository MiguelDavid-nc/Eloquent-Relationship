<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h1>Courses by {{ $user->name }}</h1>

    @if($user->courses->isEmpty())
        <p>No courses available for this user.</p>
    @else
    <h1>User Name: {{$user->name}}</h1>

    <h1>COURSES:</h1>
    @foreach ($user->courses as $course)
        <div>{{$course->course_name}}</div>
    @endforeach
    @endif
    
</body>
</html>