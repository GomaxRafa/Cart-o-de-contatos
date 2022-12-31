<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafael José - Contatos</title>
    <link rel="icon" href="img/iconTitulo.png" type="imagem">
    <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap'); </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

</head>
<body>
    <style>
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: rgb(34,193,195);
            background: linear-gradient(0deg, rgba(34,193,195,1) 31%, rgba(76,45,253,1) 89%);
            text-align: center;
        }

        .line{
            border-right: 2px solid rgba(255, 255, 255, .75);
            color: rgba(255, 255, 255, .75);
            font-family: 'Special Elite', monospace;
            font-size: 20px;
            margin: 0 auto;
            white-space: nowrap;
            overflow: hidden;
        }

        .typing-animation{
            animation: blinkCursor 500ms steps(40) infinite normal, typing 4s steps(40) 1s normal both;
        }

        @keyframes typing {
            from{
                width: 0;
            }
            to{
                width: 15em;
            }
        }
        @keyframes blinkCursor{
            from {
                border-right-color: rgba(255,255,255,0.75);
            }
            to{
                border-right-color: transparent;
            }
        }

    </style>

    <p class="line typing-animation" > Olá, sou Rafael José  ...  </p>
    <script>
        setTimeout(function() {
            window.location.href = "home.php";
        }, 7000);
    </script>
</body>
</html>