<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-color: aliceblue;
        }

        form{
            margin: auto;
            width: 350px;
            font-family: verdana;
            padding-top: 100px;
            z-index: 300px;
        }
        input{
            padding: 4px;
            width: 200px;
            margin: 5px;
            outline: none;
            border-radius: 5px;
        }
        select{
            padding: 4px;
            width: 210px;
            margin: 5px;
            outline: none;
            border-radius: 5px;
        }
        .btn{
            background: turquoise;
        }
    </style>
</head>
<body>
    <form action="user_data.php" method="post">
    <h3>Zuri registration Form Project Week3</h3>
        <input type="text" name="name" id="input" placeholder="Name">
        <br>
        <input type="text" name="email" id="input" placeholder="E-mail">
        <br>
        <input type="text" name="date" id="input" placeholder="Date Of Birth">
        <br>
        <select name="gender" id="">
            <option value="">-- Select Gender --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <br>

        <select name="country" id="">
            <option value="">-- Select Country --</option>
            <option value="nigeria">Nigeria</option>
            <option value="ghana">Ghana</option>
            <option value="senegal">Senegal</option>
        </select>

        <input type="submit" class="btn" name="submit" value="Submit">

        <!-- Userdata Details -->
        <div style="margin-top:10px;">
        <?php
        /**
         * Get the data
         */
        if (file_exists("userdata.csv")) {
            $files = file("userdata.csv");
            echo "<pre>";
            print_r($files);
            
        }else{
            echo "File doesn't exists";
        }
        ?>
        </div>
    </form>

</body>
</html>