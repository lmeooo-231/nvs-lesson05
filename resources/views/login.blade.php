<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="POST" action="{{route('login.submit')}}">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
            @error('email')
                <span class="text-danger">{{message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control"
                name="password" id="password" value="123456">
            @error('password')
                <span class="text-danger">{{message}}</span>
            @enderror 
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</body>
</html>