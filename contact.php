<!DOCTYPE HTML>
<html lang="pl">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Kristour.eu</title>
    <meta name="description"
        content="Wycieczki autokarowe(Węgry, Chorwacja, Niemcy), Bilety lotnicze oraz autokarowe, rejs, bilety na kąpieliska, obozy." />
    <meta name="keywords" content="Zakup biletu, Sindbad, Eurojet, Wycieczki Eger, Autokary do wynajęcia itd." />
    <link rel="stylesheet" href="assets/style.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kumar+One&display=swap" rel="stylesheet">
</head>

<body>

    <div class="navi">
        <div class="container">
            <div class="container-navi">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/image/logov3.PNG" />
                    </a>
                </div>
                <div class="menu-container">

                    <div class="info">
                        <a href="recom.html">
                            Rekomendacje
                        </a>
                    </div>

                    <div class="info">
                        <a href="index.php">
                            Kontakt
                        </a>
                    </div>


                    <div class="info">
                        <a href="aboutus.html">
                            O nas
                        </a>

                    </div>

                </div>
            </div>
        </div>


    </div>

    <br></br>

    <div id="header">
        <div id="form">
            FORMULARZ <br/>
            KONTAKTOWY
        </div>
    </div>

    <div id=contactform>

        <div id="information">

            <form action="mail.php" method="post">
                <label for="imie">Imie:</label><br/>
                <input type="text" name="imie" id="imie" minlength="4" placeholder="min 4 znaki"><br/><br/>
                <label for="Nazwisko">Nazwisko:</label><br/>
                <input type="text" name="Nazwisko" id="Nazwisko" minlength="4" placeholder="min 4 znaki"><br><br/>
                <label for="email">E-mail:</label><br/>
                <input type="text" name="email" id="email" minlength="4"><br/><br/>
                <p>Płeć:</p>
                <label for="m">Mężczyzna: <br/></label>
                <input type="radio" name="plec" id="m" value="m"><br/>
                <label for="k">Kobieta: <br/></label>
                <input type="radio" name="plec" id="k" value="k"><br/>
                <p>Kontakt:</p>>
                <select name="kontakt">
                    <option value=""></option>
                    <option value="tele">Telefoniczny</option>
                    <option value="email">E-mail</option>
                    <option value="sms">SMS</option>
                </select>
                <p>Opis:</p>
                <textarea name="opis" rows="6" cols="35" placeholder="Napisz coś o sobie..."></textarea><br/><br/>
                <label><input type="checkbox" name="zgoda" required><br/>Zapoznałem sie z regulaminem.<br/><br/><br/>
                <input type="submit" name="submit" value="Wyślij">
            </form>

        </div>

    </div>

    <br></br>


    <div class="footer">
        FOOTER
    </div>



</body>

</html>