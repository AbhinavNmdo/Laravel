<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <x-navbar componentName="Users"/>
    @if ($name == "abhay")
        <h1>This is abhay</h1>
    @elseif($name == "ashu")
        <h1>This is ashu</h1>
    @else
    <h1>This is unknown</h1>
    @endif
</body>
</html>