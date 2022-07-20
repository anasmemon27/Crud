<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        FirstName: <input type="text" name="fname" id="fname" value="{{$student->fname}}">
        <br><br>

        LastName: <input type="lname" name="lname" id="lname" alue="{{$student->lname}}">
        <br><br>
        Email: <input type="email" name="email" id="email"alue="{{$student->email}}">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    {{-- {{-This Containt Status-}} --}}
    @if (session()->has('status'))
    <div>
        {{session('status')}}
    </div>
            @endif

</body>
</html>