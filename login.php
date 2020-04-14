<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background-image: url('img/login.jpg');
            background-size: cover;
            overflow:hidden;
        }
        .contain{
            margin:6% auto;
            width: 40%;
            background-color:rgba(192,192,192,0.5);
            padding: 5%;
            border-radius: 20px;
        }
        .contain form input{
            margin-bottom:5%;
            border-radius:20px;
        }

        .contain form button{
            border-radius:20px;
            width:30%;
        }

        .but{
            margin-top:2%;
            margin-left:2%;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="but">
        <a href="awal.php"><input type='submit' class='btn btn-light' name='submit' value = "Back"></a>
    </div>
    <div class="contain text-center">
        <h3 class="mb-5">Wellcome</h3>
        <h6>Harus Login Dulu Ya :)</h6> <br>
        <form method="post" action="ceklogin.php">
            <input type="text" class="form-control" name="nama" placeholder="Nama User">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <button type="submit" class="btn bg-light">login</button>
        </form>
        
    </div>

    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
