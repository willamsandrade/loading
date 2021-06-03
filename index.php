<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body{
            width: 100vw;
            height: 100vh;
            background: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dots{
            display: flex;
        }
        .dots div{
            width: 50px;
            height: 50px;
            background: #FFFF00;
            border-radius: 50%;
            margin-left: 15px;
            animation: wave 1s ease-in-out infinite alternate;
        }
        .dots div:nth-child(1){
            animation-delay: -0.4s;
        }
        .dots div:nth-child(2){
            animation-delay: -0.2s;
        }
        @keyframes wave {
            from{
                transform: translateY(-100%);
            }
            to{
                transform: translateY(100%);
            }
        }
    </style>
</head>
<body>
    <div class="dots">
        <div></div>
        <div></div>
        <div></div>
    </div>
</body>
</html>