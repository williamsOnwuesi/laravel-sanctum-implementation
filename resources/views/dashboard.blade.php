<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    {{$user}}

    <h1>Welcome {{$user->name}}</h1>
    
    <h1>Tokens</h1>
    <h1>Create New Token</h1>

    <form action="/dashboard/create_token" method="POST">

        @csrf
        
        <input type="text" name="token_name" required/>
        <button type="submit">Create Token</button>

    </form>

</body>
</html>