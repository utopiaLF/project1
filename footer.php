<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            box-sizing: border-box;
        }
        footer{
            width: 100vw;
            height: 100vh;
            background-color: #040f13;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        footer .main-footer{
            width: 100%;
            display: flex;
            justify-content: space-around;
            padding: 10px 80px;
            z-index: 1;
        }

        footer .main-footer div{
            width: 350px;
            display: flex;
            flex-direction: column;
            justify-content: left;
            margin: 20px;
            padding: 20px;
        }

        footer h1{
            font-family: "Montserrat", sans-serif;
            color: #fafafa;
            font-size: 25px;
            margin-bottom: 50px;
        }

        footer h3{
            font-family: "Josefin Sans", sans-serif;
            color: #fafafa;
            font-weight: 300;
            font-size: 17px;
        }
        footer h2{
            font-family: "Josefin Sans", sans-serif;
            color: #fafafa;
            font-weight: 300;
            font-size: 20px;
        }

        .contacts span h3{
            color: grey;
        }
        .contacts span h2{
            margin-top: -15px;
        }

        .pages-link span{
            display: flex;
            flex-direction: column;
        }
        .pages-link a{
            text-decoration: none;
            font-family: "Montserrat", sans-serif;
            font-size: 17px;
            font-weight: 300;
            margin-bottom: 15px;
            color: #fafafa;
            transition: all 0.5s;
            padding: 5px 5px 5px 0px;
        }
        .pages-link a:hover{
            color: orangered;
            margin-left: 15px;
        }

        .form-call h4{
            color: grey;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: 300;
            margin-top: -45px;
        }
        .form-call form{
            display: flex;
            flex-direction: column;
        }

        .form-call form label{
            font-family: "Montserrat", sans-serif;
            font-size: 17px;
            font-weight: 400;
            color: #fafafa;
            margin-bottom: 10px;
        }

        .form-call .input{
            width: 380px;
            height: 50px;
            border-radius: 10px;
            border: none;
            margin-bottom: 20px;
            font-family: "Montserrat", sans-serif;
            font-size: 18px;
            padding: 10px;
            outline: none;
        }

        .form-call form span{
            display: flex;
            align-items: center;
        }

        .form-call .checkbox{
            width: 40px;
            height: 40px;
            accent-color: #f60;
        }

        .form-call .checkbox-text{
            font-size: 17px;
            margin-left: 10px;
            color: #fafafa;
            margin-top: 0px;
        }

        .form-call button{
            margin-top: 30px;
            width: 200px;
            height: 50px;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 17px;
            border: none;
            background-color: orangered;
            border-radius: 10px;
            color: #fafafa;
            position: relative;
            overflow: hidden;
            z-index: 2;
            transition: background-color 0.4s;
        }
        .form-call button:hover{
            background-color: rgb(254, 111, 59);
        }
        @media only screen and (max-width: 600px){
        footer{
            width: 100%;
            height: max-content;
            padding: 20px;
        }
        footer .main-footer{
            width: 100%;
            height: max-content;
            flex-direction: column-reverse;
            padding: 10px;
            justify-content: left;
            align-items: end;
        }
        footer .main-footer div{
            width: 100%;
            padding: 0px 0px 0px 20px;
            border-left: 2px dashed #77777791;
        }
        footer h1{
            font-size: 20px;
            margin-bottom: 20px;
        }
        footer h3{
            font-size: 15px;
        }
        footer h2{
            font-size: 18px;
        }
        .form-call h4{
            margin-top: -20px;
            font-size: 13px;
        }
        .form-call form label{
            font-size: 14px;
            margin-bottom: 4px;
        }
        .form-call .input{
            width: 100%;
            height: 40px;
            font-size: 14px;
        }
        .form-call .checkbox{
            width: 30px;
            height: 30px;
        }
        .form-call .checkbox-text{
            font-size: 13px;
        }
        .form-call button{
            width: 150px;
            height: 40px;
            font-size: 14px;
        }
        .pages-link a{
            font-size: 14px;
            margin-bottom: 5px;
        }
        .contacts span h3{
            font-size: 13px;
        }
        .contacts span h2{
            margin-top: -10px;
            font-size: 17px;
        }
        }
    </style>
</head>
<body>
    <footer>
        <div class="main-footer">
            <div class="contacts">
                <h1>Контакты</h1>
                <span>
                    <h3>Телефон горячей линии:</h3>
                    <h2>+998 00 000 00 00 <i class="fa-brands fa-telegram"></i></h2>
                    <h2>+998 00 000 00 00 <i class="fa-brands fa-whatsapp"></i></h2>
    <br>
                    <h3>Адрес офиса:</h3>
                    <h2>undefined</h2>
    <br>
                    <h3>E-mail:</h3>
                    <h2>mail@example.com</h2>
    <br>
                    <h3>График работы офиса:</h3>
                    <h2>Пн-Пт с 9:00 до 18:00 <br>
                        Суббота с 10:00 до 17:00 <br>
                        Воскресенье - выходной</h2>
                </span>
            </div>
            <div class="pages-link">
                <h1>Услуги</h1>
    
                <span>
                    <a href="index.html">Главная</a>
                    <a href="#about">О компании</a>
                    <a href="info/index.php">Услуги</a>
                    <a href="info/index.php">Грузоперевозки</a>
                    <a href="tarify/index.html">Тарифы</a>
                    <a href="price-list/index.html">Прайс-лист</a>
                    <a href="info/index.php">Информация</a>
                    <a href="contacts/index.html">Контакты</a>
                </span>
            </div>
            <div class="form-call">
                <h1>Получите бесплатную <br> консультацию </h1>
                <h4>Менеджер свяжется с вами в удобное для вас время <i class="fa-solid fa-phone"></i></h4>
    
                <form action="">
                    <label for=""><i class="fa-solid fa-user"></i> Ваше имя:</label>
                    <input type="text" name="" id="" class="input" placeholder="Your name">
                    <label for=""><i class="fa-solid fa-phone"></i> Телефон:</label>
                    <input type="text" name="" id="" class="input" placeholder="Phone number">
                    <span>
                        <input type="checkbox" name="" id="" class="checkbox" checked>
                        <label for="" class="checkbox-text">Ознакомлен(а) с пользовательским соглашением</label>
                    </span>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </footer>
</body>
</html>