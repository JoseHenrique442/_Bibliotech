<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css" type="text/css">
    <title>Registre-se no Bibliotech!</title>
</head>
<body>
    <!-- MENU LATERAL -->
    
    <!-- CONTEÚDO PRINCIPAL -->
    <main id="home">    
        <div class="left">
            <a href="../index.php" class="link__home" title="PÁGINA PRINCIPAL">
                <div class="content">
                    <img src="../img/BIBLIOTECH.png" alt="">
                </div>
            </a>
        </div>    
        <div class="right">
            <div class="content">
                <form action="registro.php" method="POST">
                    <h1 class="form__title">Registre-se</h1>
                    <div class="form__inputs">
                        <div class="inputs">
                            <label for="text" class="labels">Nome de usuário</label>
                            <input type="text" name="NOME" id="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type = "text"
                            maxlength = "45">
                            <span class="bottom_bar"></span>
                        </div>
                        <div class="inputs two__columns">
                            <div class="input__left">
                                <label for="text" class="labels">CPF</label>
                                <input type="number" name="CPF" id="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "11">
                                <span class="bottom_bar"></span>
                            </div>
                            <div class="input__right">
                                <label for="text" class="labels">Matrícula</label>
                                <input type="number" name="MATRICULA" id="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "10">
                                <span class="bottom_bar"></span>
                            </div>
                        </div>
                        <div class="inputs">
                            <label for="text" class="labels">E-mail</label>
                            <input type="email" name="EMAIL" id="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type = "email"
                            maxlength = "50">
                            <span class="bottom_bar"></span>
                        </div>
                        <div class="inputs two__columns">
                            <div class="input__left">
                                <label for="" class="select__label">Curso</label>
                                <select name="CURSO" id="">
                                    <option selected disabled value="Selecione o Curso">Selecione o Curso</option>
                                    <option value="Técnico em Administração">Técnico em Administração</option>
                                    <option value="Técnico em Agropecuária">Técnico em Agropecuária</option>
                                    <option value="Técnico em Informática">Técnico em Informática</option>
                                    <option value="Bacharelado em Administração">Bacharelado em Administração</option>
                                    <option value="Bacharelado em Ciências da Computação">Bacharelado em Ciências da Computação</option>
                                    <option value="Bacharelado em Medicina Veterinária">Bacharelado em Medicina Veterinária</option>
                                    <option value="Licenciatura em Matemática">Licenciatura em Matemática</option>
                                </select>
                            </div>
                            <div class="input__right">
                                <label for="" class="select__label">Campus</label>
                                <select name="CAMPUS" id="">
                                    <option selected disabled>Selecione o Campus</option>
                                    <option value="Campus Alegrete">Campus Alegrete</option>
                                    <option value="Campus Frederico Westphalen">Campus Frederico Westphalen</option>
                                    <option value="Campus Jaguari">Campus Jaguari</option>
                                    <option value="Campus Júlio de Castilhos">Campus Júlio de Castilhos</option>
                                    <option value="Campus Panambi">Campus Panambi</option>
                                    <option value="Campus Santa Rosa">Campus Santa Rosa</option>
                                    <option value="Campus Santo Ângelo">Campus Santo Ângelo</option>
                                    <option value="Campus Santo Augusto">Campus Santo Augusto</option>
                                    <option value="Campus São Borja">Campus São Borja</option>
                                    <option value="Campus São Vicente do Sul">Campus São Vicente do Sul</option>
                                    <option value="Campus Avançado Uruguaiana">Campus Avançado Uruguaiana</option>
                               </select>
                            </div>
                        </div>
                        <div class="inputs">
                            <label for="text" class="select__label">Usuário</label>
                            <select name="TIPO" id="">
                                <option selected disabled>Tipo de Usuário</option>
                                <option value="Usuário">Aluno</option>
                                <option value="Servidor">Servidor</option>
                            </select>
                        </div>
                        <div class="inputs" id="radio"> 
                                <label for="text" class="labels">Situação</label>
                                <div class="radio__options">
                                    <input type="radio" value="Regular" name="situation" id="regular" checked>
                                    <label for="regular" value="Regular" class="select__label">Regular</label>
                                    <input type="radio" value ="Afastado" name="situation" id="afastado">                           
                                    <label for="afastado" value="Afastado" class="select__label">Afastado</label>
                                </div>
                        </div>
                        <div class="inputs" id="password__input">
                            <label for="text" class="labels">Senha</label>
                            <input type="password" name="SENHA" id="password" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type = "password"
                            maxlength = "40">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"/></svg>
                            <span class="bottom_bar"></span>
                        </div>
                    </div>
                    <p class="already">Já tem uma conta?<a href="../login/index.php"> Faça Login</a></p>
                    <div class="btn">
                        <span id="border"></span>
                        <span class="bg"></span>
                        <span class="text">Enviar</span>
                        <input type="submit" value="Enviar" />
                    </div>
                </form>
            </div>
        </div>        
    </main>
    <!-- RODAPÉ -->
    <footer>

    </footer>
    <script src="../password-visibility.js"></script>
</body>
</html>