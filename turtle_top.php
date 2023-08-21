<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Add viewport meta tag for responsiveness -->
    <title>ウミガメDB</title>
    <style>
        body {
            margin: 0;
            /* Remove default margin to ensure full-width content */
            font-family: Arial, sans-serif;
        }

        /* Apply styles based on screen width */
        @media (min-width: 600px) {

            /* For screens with width 600px and above (e.g., tablets and PCs) */
            div {
                background-color: rgb(100, 255, 255);
                padding: 30px;
                text-align: center;
                /* Center align the text */
            }

            button {
                background-color: white;
                width: 20%;
                height: 60px;
                display: block;
                margin: 0 auto;
            }
        }

        @media (max-width: 599px) {

            /* For screens with width below 600px (e.g., smartphones) */
            div {
                background-color: rgb(100, 255, 255);
                padding: 15px;
                text-align: center;
                /* Center align the text */
            }

            button {
                background-color: white;
                width: 80%;
                height: 40px;
                display: block;
                margin: 10px auto;
            }
        }
    </style>
</head>

<body>

    <div>ウミガメデータベース</div>

    </br>

    <button type="button" onclick="location.href='turtle_list.php'">一覧画面</button>

    </br>

    <button type="button" onclick="location.href='turtle_add.php'">登録画面</button>

</body>

</html>