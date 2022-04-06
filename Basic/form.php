<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET ,$_POST , $_REQUEST | Forms Php</title>
    <style>
        label{
            font-size: 30px;
        }
        input{
            width: 15vw;
            height: 3vh;
            font-size: 1rem;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 1px solid pink ;
            color: white;
            background-color: #262626;
            border-radius: 3px;
        }
        button{
            width: 15vw;
            padding: 12px;
            background-color: pink;
            color: white;
            border: none;

        }
    </style>
</head>
<body>
    <form action="form_actions.php" method="post">
        <label for="firstname">
            Name : 
        </label>
        <input type="text" name="firstname" id="name" placeholder="Enter your Name" required><br><br>
        <label for="firstname">
            Age : 
        </label>
        <input type="text" name="age" id="age" placeholder="Enter your age"><br><br>
        <label for="furits">Select Frutis : </label>    
        <select for='fruits' name='options'>
                <option value="banana" >Banana</option>
                <option value="apple">Apple</option>
                <option value="grapes">Grapes</option>
                <option value="pineapple">PineApple</option>
            </select>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>