<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web/css/all.css">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
        *{
            box-sizing: border-box;
        }
        html{
            scroll-behavior: smooth;
        }
        body{
            margin: 0;
        }

        .main-head {
            width: 100vw;
            height: 90px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 70px;
        }
        .logo-name{
            display: flex;
            align-items: center;
        }
        .contact-call{
            display: flex;
            align-items: center;
        }
        .logo img {
            border-radius: 50%;
            margin-right: 20px;
        }

        .company-info-head h1 {
            font-family: "Montserrat", sans-serif;
            color: #040f13;
            font-size: 25px;
        }

        .contact-info-head{
            display: flex;
            flex-direction: column;
            align-items: end;
        }
        .company-info-head p {
            font-family: "Roboto Condensed", sans-serif;
            font-weight: 300;
            font-size: 19px;
            color: #777;
            margin-top: -20px;
        }

        .contact-info-head p {
            font-family: "Roboto Condensed", sans-serif;
            font-size: 18px;
            color: #212121c5;
            font-weight: 500;
            display: inline;
        }

        .contact-info-head a {
            font-family: "Josefin Sans", sans-serif;
            font-size: 23px;
            color: #333;
            text-decoration: none;
            margin-top: -17px;
        }

        .actions {
            display: flex;
            gap: 10px;
            margin-left: 80px;
        }
        .btn1{
            width: 180px;
            height: 55px;
            border: 2px solid #f60;
            border-radius: 8px;
            color: #f60;
            /* font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
            font-family: "Josefin Sans", sans-serif;
            font-size: 17px;
            overflow: hidden;
            z-index: 2;
            transition: all 0.8s;
        }
        .btn1:hover{
            background-color: #f60;
            color: #fafafa;
        }

        header {
            color: white;
        }

        .menu-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 20px;
        }

        .menu-icon {
            display: none;
            font-size: 28px;
            cursor: pointer;
        }

        .menu {
            display: flex;
            list-style-type: none;
        }

        .menu li {
            position: relative;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 400;
            font-size: 17px;
            letter-spacing: 1px;
            list-style-type: none;
            margin: 0px 15px;
        }

        .menu a {
            text-decoration: none;
            color: #040f13;
            font-size: 21px;
            padding: 10px 15px;
            display: block;
            transition: color 0.3s;
        }

        .menu a:hover {
            color: orangered;
        }

        .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color:#fafafa;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            z-index: 5;
        }

        .submenu li {
            width: 200px;
            list-style-type: none;
        }

        .submenu a {
            padding: 7px;
        }

        .menu li:hover .submenu {
            display: block;
        }
        /* ai */
        .main-page{
            width: 100vw;
            height: 100vh;
            visibility: hidden;
            background-color: #212121c5;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9;
            transition: backdrop-filter 5s;
        }
        .main-form{
            width: max-content;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            background-color: #F9F6EE;
            overflow: hidden;
            transform: translate(-50%, 10%);
            top: 0%;
            left: 50%;
            z-index: 10;
            box-shadow: 0px 0px 30px #212121c5;
            border-radius: 15px;
        }

        .main-page.active{
            visibility: visible;
            backdrop-filter: blur(5px);
        }
        .main-form-call{
            width: 450px;
            display: flex;
            flex-direction: column;
            border-right: 2px dashed #040f13;
            padding: 20px;
        }

        .main-photo{
            width: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: -1;
            overflow: hidden;
            position: relative;
        }
        .main-photo::after{
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #040f1383;
        }
        .main-form h1{
            font-family: "Montserrat", sans-serif;
        }
        .main-form h3{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: 300;
            color: grey;
            margin-top: -20px;
        }
        .main-form form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .main-form label{
            font-family: "Montserrat", sans-serif;
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .main-form form .main-input{
            width: 400px;
            height: 50px;
            padding: 10px;
            border: 2px solid #f60;
            border-radius: 8px;
            font-family: "Montserrat", sans-serif;
            font-size: 16px;
            margin-bottom: 25px;
        }
        .main-form textarea{
            width: 405px;
            height: 90px;
            border: 2px solid #f60;
            font-family: "Montserrat", sans-serif;
            font-size: 16px;
            border-radius: 8px;
            resize: none;
            padding: 10px;
        }
        .main-form .check-box-span{
            display: flex;
            align-items: center;
        }
        .main-form .main-checkbox{
            width: 30px;
            height: 30px;
            accent-color: #f60;
        }

        .main-form .main-checkbox-text{
            font-size: 15px;
            color: #040f13;
            margin-left: 5px;
            margin-top: 10px;
        }

        .main-form button{
            margin-top: 10px;
            width: 200px;
            height: 50px;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 17px;
            border: 2px solid orangered;
            background-color: orangered;
            border-radius: 10px;
            color: #fafafa;
            position: relative;
            overflow: hidden;
            z-index: 2;
        }
        .close-icon{
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 5;
            width: 50px;
            height: 50px;
            background-color: #212121c5;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }
        .close-form-icon{
            font-size: 30px;
            color: #fafafa;
            transition: transform 1s;
        }
        .close-icon:hover .close-form-icon{
            transform: rotate(360deg);
        }

        @media only screen and (max-width: 600px){
    body{
        width: 100%;
        padding-top: 30px;
    }
    .main-head {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px;
        position: relative;
    }

    .logo-name {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        margin-top: -30px;
        /* margin-left: -15%; */
        position: absolute;
        top: 10px;
        left: 10px;
    }

    .logo img {
        width: 40px;
        height: auto;
        margin-right: 4px;
    }

    .company-info-head h1 {
        font-size: 1.1rem;
        margin: 5px 10px 5px 0;
    }

    .company-info-head p {
        font-size: 0.7rem;
        margin-top: -10px;
    }

    .menu-icon {
        position: absolute;
        top: 10px;
        right: 10px;
        display: block;
        font-size: 2rem;
        cursor: pointer;
        color: #040f13;
    }

    .contact-call {
        width: 100%;
        display: flex;
        flex-direction: column-reverse;
        margin-top: 50px;
    }

    .contact-info-head {
        width: 100%;
        margin-top: -10px;
    }

    .contact-info-head p, .contact-info-head a {
        font-size: 0.9rem;
    }

    .actions .btn1 {
        font-size: 0.8rem;
        width: 130px;
        height: 40px;
        position: absolute;
        left: 10px;
    }

    nav .menu-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .menu {
        display: none;
        flex-direction: column;
        align-items: center;
        width: 100%;
        background-color: #fff;
        padding: 0;
    }

    #menu-toggle:checked + .menu-icon + .menu {
        display: flex;
    }

    .menu li {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #ccc;
    }

    .menu li a {
        display: block;
        padding: 10px 0;
        width: 100%;
        font-size: 16px;
    }

    .submenu {
        display: none;
        flex-direction: column;
        justify-content: center;
        background-color: #f9f9f9;
    }

    .dropdown:hover .submenu {
        display: flex;
    }

    .submenu li {
        border-bottom: 1px solid #eee;
        text-align: center;
    }

    .submenu li a {
        padding: 5px 0;
    }
    /* ai */
    .main-page{
        width: 100%;
        height: 100%;
        padding: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .main-form{
        width: 95%;
        height: max-content;
        position: fixed;
        transform: translate(-50%, 7%);
    }
    .main-form-call{
        width: 100%;
        border-right: none;
    }
    .main-form-call h1{
        font-size: 26px;
    }
    .main-form-call h3{
        font-size: 15px;
        margin-top: -15px;
    }
    .main-form-call form label{
        font-size: 15px;
        margin-bottom: 5px;
    }
    .main-form-call form span{
        width: 100%;
    }
    .main-form-call form .main-input{
        width: 100%;
        height: 40px;
        font-size: 14px;
        margin-bottom: 15px;
    }
    
    .main-form-call form textarea{
        width: 100%;
        height: 90px;
    }
    .main-form-call form .main-checkbox{
        width: 25px;
        height: 25px;
    }
    .main-form-call form .main-checkbox-text{
        font-size: 13px;
    }
    .main-form-call form button{
        width: 100%;
        height: 38px;
        font-size: 15px;
    }
    .main-photo{
        display: none;
    }
    .close-icon{
        top: 5px;
        right: 5px;
        width: 35px;
        height: 35px;
    }
    .close-form-icon{
        font-size: 25px;
    }
}
    </style>
</head>
<body>
    <header>
        <div class="main-head">
            <div class="logo-name">
                <div class="logo">
                    <img src="https://via.placeholder.com/60x60" alt="LOGO" class="logo-img">
                </div>
                <div class="company-info-head">
                    <h1>Название компании</h1>
                    <p>Транспортно-логистическая компания</p>
                </div>
            </div>
            <div class="contact-call">
                <div class="contact-info-head">
                    <p>Мы на связи 24/7</p>
                    <a href="tel:+0000000000"><i class="fa-solid fa-phone"></i> +998 00 000 00 00</a>
                </div>
                <div class="actions">
                    <button class="btn1" id="btn1">Заказать звонок</button>
                </div>
            </div>
        </div>
        <nav>
            <div class="menu-container">
                <input type="checkbox" id="menu-toggle" style="visibility: hidden;">
                <label for="menu-toggle" class="menu-icon">&#9776;</label>
                <ul class="menu">
                    <li><a href="../index.html">Главная</a></li>
                    <li class="dropdown">
                        <a href="#about">О компании</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Услуги <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="uslugi/transportnye-uslugi/index.html">Транспортные услуги</a></li>
                            <li><a href="uslugi/tamozhennoe-oformlenie/index.html">Таможенное оформление</a></li>
                            <li><a href="uslugi/ekspedirovanie/index.html">Экспедирование</a></li>
                            <li><a href="uslugi/strahovanie-gruzov/index.html">Страхование грузов</a></li>
                            <li><a href="uslugi/hranenie-gruzov/index.html">Хранение грузов</a></li>
                            <li><a href="uslugi/upakovka-gruzov/index.html">Упаковка грузов</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Грузоперевозки <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="grupoperevozki/avtomobilnye-perevozki/index.html">Автомобильные перевозки</a></li>
                            <li><a href="grupoperevozki/morskie-perevozki/index.html">Морские перевозки</a></li>
                            <li><a href="grupoperevozki/aviaperevozki/index.html">Авиаперевозки</a></li>
                            <li><a href="grupoperevozki/zheleznodorozhnye-perevozki/index.html">Железнодорожные перевозки</a></li>
                        </ul>
                    </li>
                    <li><a href="tarify/index.html">Тарифы</a></li>
                    <li><a href="price-list/index.html">Прайс-лист</a></li>
                    <li><a href="info/index.html">Информация</a></li>
                    <li><a href="contacts/index.html">Контакты</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="call-form" class="main-page">
        <div class="main-form">
            <div class="main-form-call">
                <h1>Заказать звонок</h1>
                <h3>Наш менеджер свяжется с вами в удобное для вас время</h3>
    
                <form action="">
                    <span>
                        <label for=""><i class="fa-solid fa-user"></i> Ваше имя:</label>
                        <input type="text" name="" id="" class="main-input" placeholder="Your name">
                    </span>
                    <span>
                        <label for=""><i class="fa-solid fa-phone"></i> Телефон:</label>
                        <input type="text" name="" id="" class="main-input" placeholder="Phone number">
                    </span>
                    <span>
                        <label for=""><i class="fa-solid fa-comment"></i> Комментарий:</label> <br>
                        <textarea name="" id="" placeholder="Comment (optional)"></textarea>
                    </span>
                    <span class="check-box-span">
                        <input type="checkbox" name="" id="" class="main-checkbox" checked>
                        <label for="" class="main-checkbox-text">Ознакомлен(а) с пользовательским соглашением</label>
                    </span>
                    <button type="submit">Отправить</button>
                </form>
            </div>
            <span class="close-icon" id="close-icon">
                <i class="fa-solid fa-xmark close-form-icon"></i>
            </span>
    
            <div class="main-photo">
                <img src="photos/operator.jpg" alt="Photo">
            </div>
        </div>
    </div>

    <script>
        let menuToggle = document.getElementById('menu-toggle');
        let menu = document.querySelector('.menu');
        menuToggle.addEventListener('change', function () {
            if (menuToggle.checked) {
                menu.style.display = 'flex';
            } else {
                menu.style.display = 'none';
            }
        });

        let btn = document.getElementById("btn1");
        let closer = document.getElementById("close-icon");
        let call_form = document.getElementById("call-form");

        
        btn.addEventListener('click', ()=>{
                call_form.classList.add('active');
                body.classList.add('active');
        });
        
        closer.addEventListener('click', ()=>{
            call_form.classList.remove('active');
            body.classList.remove('active');
        });
    </script>
</body>
</html>