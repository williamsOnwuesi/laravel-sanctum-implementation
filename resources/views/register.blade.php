<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>

    <form action="/register" method="POST">
        
        @csrf

        <input name="name" type="text" class="form_input"/>
        <input name="email" type="email" class="form_input"/>
        <input name="password" type="password" class="form_input"/>
        <button type="submit">Register</button>
        
    </form>

</body>
</html>