
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main/login.css');?>">
</head>
<body>
    <main>
        <img src="<?php echo base_url('/assets/images/bandeiraEntrada.png');?>" alt="">
        <form action="" method="post">
            <input type="text" require placeholder="Usuario" name="user_login"><br><br>
            <input type="password" require placeholder="Senha" name="user_password"><br><br>
            <button id="bt_login">Entrar</button>
        </form>
    </main>
</body>
</html>