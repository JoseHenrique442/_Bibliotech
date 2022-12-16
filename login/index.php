<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Login | Bibliotech</title>
</head>
<body>
    <!-- MENU LATERAL -->
    
    <!-- CONTEÚDO PRINCIPAL -->
    <main id="home">   
        <div class="left">
            <div class="content">
                <form action="login.php" method="POST">
                    <h1 class="form__title">Login</h1>
                    <div class="form__inputs">
                        <div class="inputs" id="input__1">
                            <label for="text">CPF</label>
                            <input type="number" name="CPF" id=""  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type = "number"
                            maxlength = "11">
                            <span class="bottom_bar"></span>
                        </div>
                        <div class="inputs" id="password__input">
                            <label for="text">Senha</label>
                            <input type="password" name="SENHA" id="password" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type = "password"
                            maxlength = "40">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"/></svg>                         
                            <span class="bottom_bar"></span>
                        </div>
                    </div>
                    <div class="links">
                        <a class="recover__link" href="../register/index.php">Ainda não tem uma conta?<span> Cadastre-se!</span></span></a>
                        <a class="recover__link" href="../recover/index.php">Esqueceu a senha? <span>Recuperar senha</span></span></a>
                    </div>
                    <div class="btn">
                        <span id="border"></span>
                        <span class="bg"></span>
                        <span class="text">Enviar</span>
                        <input type="submit" value="Enviar" />
                    </div>
                </form>
            </div>
        </div>   
        <div class="right">
            <div class="content">
                <a href="../index.php" id="link__home" title="PÁGINA PRINCIPAL">
                    <img src="../img/BIBLIOTECH.png" alt="">
                </a>
            </div>
        </div>         
    </main>
    <!-- RODAPÉ -->
    <footer>

    </footer>
    <script src="../password-visibility.js"></script>
</body>
</html>