<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <style>
            .login_input{
                padding: 1%;
                margin: 1%;
                border-radius: 5px;
                color: grey;
            }

            button{
                padding: 0.5% 1.2%;
                margin: 1%;
                outline: none;
                border-radius: 5px;
                color: white;
                background: green;
            }
        </style>

    </head>

    <body>
        
        <h1>Hey Stranger!, Please Login To Your Account.</h1>

        <form action="/login" method="POST">

            @csrf

            <input type="text" name = "email" class = "login_input" required/>
            <input type="password" name = "password" class = "login_input" required/>
            <button type="submit">Login</button>

        </form>

    </body>

</html>