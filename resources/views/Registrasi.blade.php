<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>

    <style>
        body{
          margin: 0;
          padding: 0;
          
        }

        form {
            background: #ffffff -50% 100%;
            position: absolute;
            width: 400px;
            height: 450px;
            
            left: 500px;
            top: 100px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .judul{
            position: absolute;
            left: 120px;
            top: 50px;
            font-family: 'Roboto';
            font-size: 25px;
            font-weight: 700;
            color: blue;
        }
        .foto1{
            position: absolute;
            left: 180px;
            top: 80px;
        }
        .uname{
            position: absolute;
            top: 150px;
            left: 110px;
        }
        .uname1{
            width: 190px;
            height: 20px;
            position: absolute;
            top: 170px;
            left: 110px;
        }
        .pwd{
            position: absolute;
            top: 200px;
            left: 110px;
        }
        .pwd1{
            width: 190px;
            height: 20px;
            position: absolute;
            top: 220px;
            left: 110px;
        }
        .kpwd{
            position: absolute;
            top: 250px;
            left: 110px;
        }

        .kpwd1{
            width: 190px;
            height: 20px;
            position: absolute;
            top: 270px;
            left: 110px;
        }
        .btn{
            width: 200px;
            height: 35px;
            margin-top:10px; 
            background: #000000;
            color: white;
            position: absolute;
            top: 300px;
            left: 110px;
            border: none;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
        }
        .btn:hover{
            width: 200px;
            height: 35px;
            margin-top:10px; 
            background:blue;
            color: white;
            position: absolute;
            top: 300px;
            left: 110px;
            border: none;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
        }
        .regis{
            position: absolute;
            top: 350px;
            left: 110px;
        }


    </style>
</head>
<body>
    <section style="  background: url('../../img/navbar.png');
    width:1366px; 
    height:100vh;
    background-size:cover">
    <div style="  background-image: linear-gradient(90deg, #000000 -46.92%, rgba(0, 0, 0, 0) 100%);  width:1366px; height:100vh;">
    <form action="/">
        <label class="judul">Form Registrasi</label>
        <img class="foto1" src="img/foto1.png" alt="">
        <label class="uname" for="" >Username</label>
        <input class="uname1" type="text" placeholder="Username" required >
        <label class="pwd" for="">Password</label>
        <input class="pwd1" type="password" placeholder="Password" required>
        <label class="kpwd" for="">Konfirmasi Password</label>
        <input class="kpwd1" type="Password" placeholder="Konfirmasi Password" required>

        <button class="btn">Registrasi</button>
        <p class="regis">Sudah punya akun silahkan <a href="/">Login</a></p>
    </form>
</div>
</section>
</body>
</html>