<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    {{-- <x-navbar componentName="Users"/> --}}
    {{-- @if ($name == "abhay")
        <h1>This is abhay</h1>
    @elseif($name == "ashu")
        <h1>This is ashu</h1>
    @else
    <h1>This is unknown</h1>
    @endif --}}

    {{-- @for ($i = 0; $i < 10; $i++)
        <h1>{{$i}}</h1>
    @endfor --}}

    {{-- @foreach ($users as $user)
        <h2>{{$user}}</h2>
    @endforeach --}}

    {{-- @include('about') --}}

    {{-- @foreach ($collection as $item)
        <h4>{{$item['firstname']}}</h4>
    @endforeach --}}

    <form action="user" method="POST">
        @csrf
        {{method_field('DELETE')}} {{-- We can pass any request using this method --}}
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password">
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</body>
{{-- <script>
    // const data = @json($users);
    // console.log(data);
</script> --}}
</html>