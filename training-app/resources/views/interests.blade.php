<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interests</title>
</head>
<body>
    <form action = "{{route('interests.pass')}}" method = 'POST'>
        @csrf
{{-- <input type="checkbox" name="interests" value="Laravel">Laravel</input></br>
<input type="checkbox" name="interests" value="Vue">Vue</input></br>
<input type="checkbox" name="interests" value="React">React</input></br>
<input type="checkbox" name="interests" value="Angular">Angular</input></br>
<input type="button" value="Submit"></input> --}}
@foreach ($data as $item)
    <input type="checkbox" name="interests[]" value="{{$item->interests}}">{{$item->interests}}</input></br>
@endforeach
<input type="checkbox" name="interests[]" value="Others">Others</input></br>
@error('interests')
    <div style="color:red">{{ $message }}</div>
@enderror
<input type="submit"/>

    </form>
</body>
</html>