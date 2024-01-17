<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    button {
	background-color: red;
    padding: 10px;
}
    input{
        width: 150px;
        padding: 10px;
    }
    div{
        padding: 20px;
    }
    form{
        padding-left: 100px;
    }
    </style>
</head>
<body>
        <form action="action.php" method="post">
        <div>
                <label for="name">Full Name:</label>
                <input type="text" id="email" name="name" />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" />
            </div>
            <div>
                <label for="password">password:</label>
                <input type="password" id="email" name="password" />
            </div>
            <button type="submit">Submit</button>
        </form>
</body>
</html>