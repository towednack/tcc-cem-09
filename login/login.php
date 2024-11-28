<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../media/icons/ico.ico">
    <title>CEM 09 - Entrar</title>
    <link rel="stylesheet" href="login.css">
    <script src="script.js"></script>
</head>

<body>
    <div id="formMessage">
        <p id="formMessageP"></p>
        <button id="formMessageButton" onclick='javascript:self.history.back()'></button>
    </div>
    <header>
        <div class="header-mid">
            <div class="img-align">
                <img src="../media/icons/cem09LogoWhite.png" class="logoCem09">
            </div>
            <h1 class="welcome">Bem-vindo(a)!</h1>
            <p>Para ter uma experiência personalizada, entre com sua conta abaixo.</p>
            <div class="themeSwitchBlock tooltip">
                <img src="../media/icons/sunIcon.png" id="themeSwitch">
                <span class="tooltiptext">Mudar o tema de cores.</span>
            </div>
    </header>

    <!-- MOBILE CODE -->
    <main id="mobileMain">
        <div class="chooseLoginRegister">
            <p>O que você gostaria de fazer?</p>
            <br>
            <button onclick="chooseLoginRegisterFunc(1)">ENTRAR</button>
            <br>
            <button onclick="chooseLoginRegisterFunc(2)">REGISTRAR</button>
        </div>
    </main>
    <!-- DESKTOP CODE -->
    <main id="desktopMain">
        <div class="formMainLabels">
            <p id="formMainLabelRegister">Se registre como aluno:</p>
            <p id="formMainLabelLogin">Entre como aluno:</p>
        </div>
        <div class="container-forms">

            <div id="forms-cadastro">

            <?php

                include "connection.php";

                if (isset($_POST['register'])) {

                    $name = $_POST['username'];
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    $cpass = $_POST['cpass'];


                    $check = "select * from users where email='{$email}'";

                    $res = mysqli_query($conn, $check);

                    $passwd = password_hash($pass, PASSWORD_DEFAULT);

                    $key = bin2hex(random_bytes(12));




                    if (mysqli_num_rows($res) > 0) {
                        echo "<script>outputLogin('Este email já está em uso!', 'Tentar novamente')</script>";
                    }
                    else {

                        if ($pass === $cpass) {

                            $sql = "insert into users(username,email,password) values('$name','$email','$passwd')";

                            $result = mysqli_query($conn, $sql);

                                if ($result) {
                                    echo "<script>outputLogin('Sua conta foi registrada com sucesso!', 'Faça login')</script>";
                                }
                                else {
                                    echo "<script>outputLogin('Este email já está em uso!', 'Tentar novamente')</script>";
                                }

                        }
                        else {
                            echo "<script>outputLogin('Este email já está em uso!', 'Tentar novamente')</script>";
                        }
                    }
                }
                else {

            ?>

                <form id="registerForm" action="#" method="POST">

                    <!-- nome para cadastro -->
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <div class="nameBlock">
                            <input type="text" name="username" id="name" placeholder="Ex.: João da Silva" required>
                            <p>Nome completo sem abreviações.</p>
                        </div>
                    </div>

                    <!-- email para cadastro -->
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="Ex.: joao@gmail.com" required>
                    </div>
                    
                    <!-- senha para cadastro -->
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" name="password" id="senha1" placeholder="•••••">
                        <span class="input-group-addon tooltip">
                            <img src="../media/icons/closedEyeWhite.png" id="passwordShowHideButton1" onclick="passwordShowHide(1)">
                            <span class="tooltiptext" style="left: 120% !important;">Mostrar ou esconder a senha.</span>
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="cpass">Repetir a senha:</label>
                        <input type="password" name="cpass" placeholder="•••••" required>
                    </div>

                    <!-- botão para turma -->
                    <div class="form-group">
                        <label for="turmas">Turma:</label>
                        <select id="turmas" name="turmas">

                            <!-- Turmas de Primeiro Ano -->
                            <option value="1A">1ºA</option>
                            <option value="1B">1ºB</option>
                            <option value="1C">1ºC</option>
                            <option value="1D">1ºD</option>
                            <option value="1E">1ºE</option>
                            <option value="1F">1ºF</option>
                            <option value="1G">1ºG</option>
                            <option value="1H">1ºH</option>
                            <option value="1I">1ºI</option>
                            <option value="1J">1ºJ</option>

                            <!-- Turmas de Segundo Ano -->
                            <option value="2A">2ºA</option>
                            <option value="2B">2ºB</option>
                            <option value="2C">2ºC</option>
                            <option value="2D">2ºD</option>
                            <option value="2E">2ºE</option>
                            <option value="2F">2ºF</option>
                            <option value="2G">2ºG</option>
                            <option value="2H">2ºH</option>
                            <option value="2I">2ºI</option>
                            <option value="2J">2ºJ</option>

                            <!-- Turmas de Terceiro Ano -->
                            <option value="3A">3ºA</option>
                            <option value="3B">3ºB</option>
                            <option value="3C">3ºC</option>
                            <option value="3D">3ºD</option>
                            <option value="3E">3ºE</option>
                            <option value="3F">3ºF</option>
                            <option value="3G">3ºG</option>
                            <option value="3H">3ºH</option>
                        </select>
                    </div>

                </form>
                <div class="btn">
                    <button class="submit" form="registerForm" type="submit" name="register" value="Signup">Registrar</button>
                </div>

            </div>
            <?php
                }
            ?>


            <div id="formDivisor"></div>

            <div id="forms-login">

                <?php
                    include "connection.php";

                    if (isset($_POST['login'])) {

                        $email = $_POST['email'];
                        $pass = $_POST['password'];

                        $sql = "select * from users where email='$email'";

                        $res = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($res) > 0) {

                            $row = mysqli_fetch_assoc($res);

                            $password = $row['password'];

                            $decrypt = password_verify($pass, $password);


                            if ($decrypt) {
                                $_SESSION['id'] = $row['id'];
                                $_SESSION['username'] = $row['username'];
                                echo '<script type="text/javascript">',
                                'goToHome();',
                                '</script>'
                                ;


                            }
                            else {
                                echo "<script>outputLogin('A senha foi digitada incorretamente!', 'Tentar novamente')</script>";
                            }

                        }
                        else {
                            echo "<script>outputLogin('O email ou senha foram digitados incorretamente!', 'Tentar novamente')</script>";
                        }


                    } 
                    else {


                ?>

                <form id="loginForm" action="#" method="POST">
                    <!-- email para cadastro -->
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="Ex.: joao@gmail.com">
                    </div>

                    <!-- senha para cadastro -->
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" name="password" id="senha2" placeholder="•••••">
                        <span class="input-group-addon tooltip">
                            <img src="../media/icons/closedEyeWhite.png" id="passwordShowHideButton2" onclick="passwordShowHide(2)">
                            <span class="tooltiptext" style="left: 120% !important;">Mostrar ou esconder a senha.</span>
                        </span>
                    </div>

                    <!-- esqueceu a senha -->
                    <h2 class="esqueceu-senha"><a href="#" onclick="forgotPassword('open'); return false;">Esqueceu a senha?</a></h2>

                </form>
                <div class="btn2">
                    <button class="submit" form="loginForm" type="submit" name="login" id="submit" value="Login">Entrar</button>
                </div>

            </div>
            <?php
                }
            ?>

        </div>
    </main>

    <footer>
        <div class="footerContact">
            <p>CONTATO</p>

            <p class="wpp"><img src="../media/icons/whatsappIconWhite.png" class="whatsappIco"> (61) 94002-8922 <a id="openWhatsapp" href="https://wa.me/5561940028922">Abrir no Whatsapp</a></p>
            <p class="email-contato"><img src="../media/icons/emailIconWhite.png" class="emailIco"> direcao@cem09.edu.br <a id="openEmail" href="mailto:direcao@cem09.edu.br">Abrir email</a></p>
        </div>
        <div class="footerMiddle">
            
        </div>
        <div class="footerRight">

        </div>
        <p class="copyright">Todos os direitos reservados © 2024 - Centro de Ensino Médio 09 de Ceilândia</p>
    </footer>

    <!-- POPUPS -->
    <div id="forgotPasswordPopup">
        <div class="warningBlock">
            <img src="../media/icons/closeIconBlack.webp" alt="Fechar." onclick="forgotPassword('close')">
            <p>Para recuperar ou alterar sua senha, contate a direção da escola em:</p>
            <div>
                <p class="wpp"><img src="../media/icons/whatsappIconBlack.png" class="whatsappIco"> (61) 94002-8922 <a id="openWhatsapp" href="https://wa.me/5561940028922">Abrir no Whatsapp</a></p>
                <p class="email-contato"><img src="../media/icons/emailIconBlack.png" class="emailIco"> direcao@cem09.edu.br <a id="openEmail" href="mailto:direcao@cem09.edu.br">Abrir email</a></p>
            </div>
        </div>
    </div>
</body>

</html>