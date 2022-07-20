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
        FirstName: <input type="text" name="fname" id="fname">
        @error('fname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <br><br>

        LastName: <input type="lname" name="lname" id="lname">
        @error('lname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror<br><br>
        Email: <input type="email" name="email" id="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror<br><br>
        <input type="submit" value="Submit">
    </form>
    {{-- {{-This Containt Status-}} --}}
    @if (session()->has('status'))
    <div>
        {{session('status')}}
    </div>
        
    @endif
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>FName</th>
            <th>LName</th>
            <th>Action</th>
            <hr>
        </tr>
        <hr>
    </thead>
    <tbody>
        @foreach ($student as $stu)
        <tr>
            <td>{{$stu->id}}</td>
            <td>{{$stu->fname}}</td>
            <td>{{$stu->lname}}</td>
            <td>{{$stu->email}}</td>
            <td>
                <a href=""class ='btn'>Edit</a>
                <a href=""class ='btn'>Delet</a>
            </td>
        </tr>
            
        @endforeach
    </tbody>
    </table>
</body>
</html>