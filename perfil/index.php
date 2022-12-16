<?php

include('../verificar.php');
 if(!isset($_SESSION)) 
 { 
     session_start(); 
     
 }

 ?>

<!DOCTYPE html>
<html lang="pt-br" class="normal">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="../global.css" type="text/css">
    <title>Página de Perfil | Bibliotech</title>
</head>
<body>
    <!-- MENU LATERAL -->
    <nav>
        <div class="main__menu">
            <div id="home" class="icon__box">
                <a href="../index.php">
                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_223_35)">
                        <path d="M0.0172615 25.2575C0.0172615 27.0369 1.33533 28.4308 2.82914 28.4308H5.64103L5.57952 44.2575C5.57952 44.5343 5.59709 44.7913 5.62345 45.0582V46.6597C5.62345 48.8444 7.19635 50.6139 9.13831 50.6139H10.5442C10.6409 50.6139 10.7376 50.5249 10.8342 50.604C10.9572 50.5249 11.0803 50.6139 11.2033 50.6139H16.168C18.11 50.6139 19.6829 48.8444 19.6829 46.6597V37.9604C19.6829 36.2107 20.9394 34.797 22.4947 34.797H28.1185C29.6738 34.797 30.9304 36.2107 30.9304 37.9604V46.6597C30.9304 48.8444 32.5033 50.6139 34.4452 50.6139H39.3573C39.4891 50.6139 39.6209 50.604 39.7527 50.5941C39.8581 50.604 39.9636 50.6139 40.069 50.6139H41.475C43.416 50.6139 44.9898 48.8444 44.9898 46.6597V35.5879C44.9898 35.4989 44.9872 35.4001 44.9819 35.3111V28.4308H47.7973C49.3816 28.4308 50.6136 27.0369 50.6136 25.2575C50.6136 24.3678 50.3496 23.577 49.734 22.885L27.2046 0.792424C26.5896 0.0990529 25.8866 0 25.2715 0C24.6564 0 23.9534 0.198106 23.4174 0.693371L0.983845 22.885C0.280876 23.577 -0.0793953 24.3678 0.0172615 25.2575Z" fill="#EBF8FF"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_223_35">
                        <rect width="50.6139" height="50.6139" fill="white" transform="matrix(-1 0 0 1 50.6136 0)"/>
                        </clipPath>
                        </defs>
                    </svg>    
                </a>
            </div>
            <div id="profile" class="icon__box">
                <a href="../perfil/index.php">
                    <svg width="51" height="52" viewBox="0 0 51 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_223_37)">
                        <path d="M25.3066 25.9208C17.3191 25.9208 10.8455 20.2554 10.8455 13.2674C10.8455 6.27929 17.3191 0.613892 25.3066 0.613892C33.2941 0.613892 39.7677 6.27929 39.7677 13.2674C39.7677 20.2554 33.2941 25.9208 25.3066 25.9208ZM19.5787 30.6659H31.0346C41.8454 30.6659 50.6136 38.3371 50.6136 47.7975C50.6136 49.6896 48.8602 51.2248 46.6978 51.2248H3.91323C1.75084 51.2278 -0.000312805 49.6955 -0.000312805 47.7975C-0.000312805 38.3371 8.76673 30.6659 19.5787 30.6659Z" fill="#EBF8FF"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_223_37">
                        <rect width="50.6139" height="50.6139" fill="white" transform="matrix(-1 0 0 1 50.6136 0.613892)"/>
                        </clipPath>
                        </defs>
                    </svg>    
                </a>
            </div>
            <div id="ranking" class="icon__box"> 
    
                <a href="../ranking/index.php">
                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_223_39)">
                        <path d="M18.4975 6.32235C17.762 6.46471 17.4457 7.60154 17.9834 8.27573L20.9886 11.9027L20.2769 17.0432C20.2373 17.9724 20.9333 18.6842 21.6134 18.2591L25.2908 15.8372L28.9999 18.2888C29.68 18.7139 30.4471 18.0021 30.3364 17.0827L29.6246 11.9324L32.6298 8.27573C33.1676 7.60154 32.8513 6.46471 32.1158 6.32235L27.9797 5.57699L26.1133 0.853879C25.7732 0.00164796 24.8084 0.037137 24.5 0.853879L22.6336 5.57699L18.4975 6.32235ZM20.2452 25.5349C18.8454 25.5349 17.7145 26.9485 17.7145 28.6982V47.6784C17.7145 49.4282 18.8454 50.8418 20.2452 50.8418H30.368C31.7678 50.8418 32.8987 49.4282 32.8987 47.6784V28.6982C32.8987 26.9485 31.7678 25.5349 30.368 25.5349H20.2452ZM37.9601 31.8616C36.5603 31.8616 35.4294 33.2752 35.4294 35.025V47.6784C35.4294 49.4282 36.5603 50.8418 37.9601 50.8418H48.0829C49.4803 50.8418 50.6136 49.4282 50.6136 47.6784V35.025C50.6136 33.2752 49.4803 31.8616 48.0829 31.8616H37.9601ZM15.1839 41.3517C15.1839 39.602 14.0529 38.1883 12.6532 38.1883H2.53038C1.13059 38.1883 -0.000312805 39.602 -0.000312805 41.3517V47.6784C-0.000312805 49.4282 1.13059 50.8418 2.53038 50.8418H12.6532C14.0529 50.8418 15.1839 49.4282 15.1839 47.6784V41.3517Z" fill="#EBF8FF"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_223_39">
                        <rect width="50.6139" height="50.6139" fill="white" transform="matrix(-1 0 0 1 50.6136 0.227783)"/>
                        </clipPath>
                        </defs>
                    </svg>    
                </a>
            </div>
            <div id="chat" class="icon__box">
                <a href="../forum/index.php">
                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_223_54)">
                        <path d="M50.5201 6.23729V34.6165C50.5201 38.1008 47.6782 40.8537 44.1938 40.8537H29.9597L17.6137 50.1138C16.8352 50.6822 15.7237 50.1187 15.7237 49.155V40.8537H6.23433C2.74995 40.8537 -0.0919189 38.0119 -0.0919189 34.6165V6.23729C-0.0919189 2.75291 2.74995 0 6.23433 0H44.1918C47.7622 0 50.5201 2.84187 50.5201 6.23729Z" fill="#EBF8FF"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_223_54">
                        <rect width="50.61" height="50.61" fill="white" transform="translate(-0.000976562)"/>
                        </clipPath>
                        </defs>
                    </svg>    
                </a>
            </div>
            <div id="font-size" class="icon__box">
                <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_223_43)">
                    <g clip-path="url(#clip1_223_43)">
                    <path d="M46.994 41.1206H44.0783L28.5914 5.21519C28.0618 3.98256 26.7195 3.16312 25.2125 3.16312C23.7055 3.16312 22.3499 3.98246 21.8212 5.21519L6.52975 41.1206H3.61402C1.61787 41.1206 -0.000976562 42.5351 -0.000976562 44.2837C-0.000976562 46.0324 1.61787 47.4469 3.61402 47.4469H14.459C16.4552 47.4469 18.074 46.0324 18.074 44.2837C18.074 42.5351 16.4552 41.1206 14.459 41.1206H14.2557L16.1874 36.3759H34.2173L36.149 41.1206C34.1529 41.1206 32.534 42.5351 32.534 44.2837C32.534 46.0324 34.1529 47.4469 36.149 47.4469H46.994C48.9902 47.4469 50.609 46.0324 50.609 44.2837C50.609 42.5351 48.9936 41.1206 46.994 41.1206ZM19.0004 30.0497L25.304 15.3313L31.6099 30.0497H19.0004Z" fill="#EBF8FF"/>
                    </g>
                    </g>
                    <defs>
                    <clipPath id="clip0_223_43">
                    <rect width="50.6139" height="50.6139" fill="white" transform="matrix(-1 0 0 1 50.6133 0)"/>
                    </clipPath>
                    <clipPath id="clip1_223_43">
                    <rect width="50.61" height="50.61" fill="white" transform="translate(-0.000976562)"/>
                    </clipPath>
                    </defs>
                </svg>    
            </div>
            <div id="contrast" class="icon__box">
                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-0.000602722 25.3069C-0.000602722 39.2851 11.3282 50.6139 25.3063 50.6139C39.2845 50.6139 50.6133 39.2851 50.6133 25.3069C50.6133 11.3288 39.2845 0 25.3063 0C11.3282 0 -0.000602722 11.3288 -0.000602722 25.3069ZM25.3063 6.32674V44.2871C14.8277 44.2871 6.32613 35.7856 6.32613 25.3069C6.32613 14.7393 14.8277 6.32674 25.3063 6.32674Z" fill="#EBF8FF"/>
                    </svg>    
                </div>
            <div id="config" class="icon__box">
                <a href="../configuration/index.php">
                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_223_41)">
                        <path d="M1.59096 16.4693C1.26474 17.3194 1.54153 18.2783 2.21375 18.9011L6.49418 22.796C6.38544 23.6165 6.32613 24.4568 6.32613 25.3069C6.32613 26.1571 6.38544 26.9974 6.49418 27.8179L2.21375 31.7128C1.54153 32.3355 1.26474 33.2944 1.59096 34.1446C2.02592 35.321 2.54985 36.4578 3.14299 37.5353L3.60761 38.3361C4.26005 39.4235 4.99158 40.4516 5.79231 41.4302C6.38544 42.1321 7.34434 42.3792 8.21426 42.1024L13.7205 40.3428C15.0452 41.361 16.5972 42.2112 18.0701 42.8636L19.3058 48.5083C19.5035 49.398 20.1955 50.0306 21.105 50.2679C22.4692 50.4953 23.8729 50.6139 25.3953 50.6139C26.7397 50.6139 28.1435 50.4953 29.5077 50.2679C30.4171 50.0306 31.1091 49.398 31.3068 48.5083L32.5425 42.8636C34.1044 42.2112 35.5675 41.361 36.8922 40.3428L42.3944 42.1024C43.2683 42.3792 44.2322 42.1321 44.8174 41.4302C45.6191 40.4516 46.3506 39.4235 47.0031 38.3361L47.4657 37.5353C48.0658 36.4578 48.5877 35.321 49.0257 34.1446C49.3459 33.2944 49.0761 32.3355 48.3979 31.7128L44.1215 27.8179C44.2302 26.9974 44.2865 26.1571 44.2865 25.3069C44.2865 24.4568 44.2302 23.6165 44.1215 22.796L48.3979 18.9011C49.0761 18.2783 49.3459 17.3293 49.0257 16.4693C48.5877 15.2929 48.0648 14.1561 47.4657 13.0785L47.0041 12.2778C46.3506 11.1904 45.6191 10.1623 44.8174 9.18859C44.2322 8.48178 43.2683 8.23662 42.3944 8.51539L36.8922 10.2711C35.5675 9.2489 34.1044 8.39874 32.5425 7.75322L31.3068 2.10858C31.1091 1.21098 30.4171 0.49823 29.5077 0.346982C28.1435 0.118725 26.7397 0 25.3063 0C23.8729 0 22.4692 0.118725 21.105 0.346982C20.1955 0.49823 19.5035 1.21098 19.3058 2.10858L18.0701 7.75322C16.5972 8.39874 15.0452 9.2489 13.7205 10.2711L8.21426 8.51539C7.34434 8.23662 6.38544 8.48178 5.79231 9.18859C4.99158 10.1623 4.26005 11.1904 3.60761 12.2778L3.14299 13.0785C2.54985 14.1561 2.02592 15.2929 1.59096 16.4693ZM25.3063 33.2154C20.9369 33.2154 17.3979 29.6763 17.3979 25.218C17.3979 20.9375 20.9369 17.3096 25.3063 17.3096C29.6757 17.3096 33.2148 20.9375 33.2148 25.218C33.2148 29.6763 29.6757 33.2154 25.3063 33.2154Z" fill="#EBF8FF"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_223_41">
                        <rect width="50.6139" height="50.6139" fill="white" transform="matrix(-1 0 0 1 50.6133 0)"/>
                        </clipPath>
                        </defs>
                    </svg>    
                </a>
            </div>
        </div>
    </nav>
    <!-- CONTEÚDO PRINCIPAL -->
    <main id="home">
        <div class="menu__hamburguer">
            <div class="hamburguer" data-on="false">
                <span class="hamburguer-filling"></span>
            </div>
        </div>
        <div class="hamburguer-open">
            <ul>
                <li><a href="../index.php" title="Página de Início">Página Inicial</a></li>
                <li><a href="../perfil/index.php" title="Página de Perfil">Perfil</a></li>
                <li><a href="../ranking/index.php" title="Página de Ranking">Ranking</a></li>
                <li><a href="../forum/index.php" title="Página de Fórum">Fórum</a></li>
                <li><a href="../configuration/index.php" title="Página de Configurações">Configurações</a></li>
            </ul>
        </div>
        <div class="left__side__profile">
            <div class="profile__stats">
                <div class="circle__img">
                    <img src="../img/user-4.jpg" alt="">
                </div>
                <div class="profile__stats__name">
                    <h1>José Henrique Alves de Azevedo</h1>
                    <h1>IFFar-FW</h1>
                    <h1>2022</h1>
                </div>
            </div>
            <div class="info">
                <div class="info__label">
                    <h3>Nome: <?php print_r($_SESSION['NOME']);?></h3>
                </div>
                <div class="info__label">
                    <h3>Matrícula:  <?php print_r($_SESSION['MATRICULA']);?></h3>                    
                </div>
                <div class="info__label">
                    <h3>CPF:  <?php print_r($_SESSION['CPF']);?></h3>                    
                </div>
                <div class="info__label">
                    <h3>Email:  <?php print_r($_SESSION['EMAIL']);?></h3>                    
                </div>
                <div class="info__label">
                    <h3>Curso:  <?php print_r($_SESSION['CURSO']);?></h3>                    
                </div>
                <div class="info__label">
                    <h3>Vínculo:  <?php print_r($_SESSION['CAMPUS']);?></h3>                    
                </div>
                <div class="info__label">
                    <h3>Situação:  <?php print_r($_SESSION['SITUACAO']);?></h3>                    
                </div>
            </div>
        </div>

        <div class="right__side__profile">
            <h1>Agenda</h1>
                <div class="agenda__compromisses">
                <h3>(dd/dd/dd): Nos Idos de Março</h3>
                <h3>(dd/dd/dd): Nos Idos de Março</h3>
                <h3>(dd/dd/dd): Nos Idos de Março</h3>
                <h3>(dd/dd/dd): Nos Idos de Março</h3>
                <h3>(dd/dd/dd): Nos Idos de Março</h3>
                <h3>(dd/dd/dd): Nos Idos de Março</h3>
                <h3>(dd/dd/dd): A sutil arte de ligar o f#da-se</h3>
                <h3>(dd/dd/dd): Nos Idos de Março</h3>
                <h3>(dd/dd/dd): Nos Idos de Março</h3>
                <h3>(dd/dd/dd): A sutil arte de ligar o f#da-se</h3>
            
            </div>
        </div>
    </main>
    <!-- RODAPÉ -->
    <footer>

    </footer>
    <script src="../dark-mode.js"></script>
    <script src="../font-size.js"></script>
    <script src="../menu-hamburguer.js"></script>
</body>
</html>