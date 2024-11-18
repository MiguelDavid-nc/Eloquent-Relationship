<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All User Profiles</title>
</head>
<body>
    <h1>Profiles</h1>
    @foreach ($profiles as $profile)
        <div>Name: {{$profile->user->name}}</div>
        <div>Email: {{$profile->user->email}}</div>
        <div>Bio: {{$profile->bio}}</div>
        <div>School: {{$profile->school}}</div>
        <hr>
        <br>
    @endforeach
</body>
</html>
