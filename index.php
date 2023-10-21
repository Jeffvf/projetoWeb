<html>
<head>  
    <title>Projeto Web</title>
    <style>
        body{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        #php-text{
            text-align:center;
            align-self:center;
            font-size:24px;
        }
    </style>
</head>

<body>
    <div id="php-text">
        <?php
        $views = 0;
        $visitors_file = "visitas.txt";

        if (file_exists($visitors_file))
        {
            $views = (int)file_get_contents($visitors_file);
        }
        
        $views++;
        file_put_contents($visitors_file, $views);

        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set("America/Sao_Paulo");

        $h = date('G');
        if($h>=5 && $h<12)
        {
            echo "Bom dia!<br>";
        }
        else if($h>=12 && $h<18)
        {
            echo "Boa tarde!<br>";
        }
        else
        {
            echo "Boa noite!<br>";
        }
        echo 'Hoje é ' . utf8_encode(strftime('%A, %d de %B de %Y<br>', strtotime('today')));
        echo "Agora são " . date("H:i:s") . '<br>';
        echo "<br>Esse site recebeu " . $views . ' visitas<br>';
        ?>
    </div>
</body>
</html>