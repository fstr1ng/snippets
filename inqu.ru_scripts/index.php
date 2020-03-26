<!DOCTYPE html>
<html>
    <head>
        <title>Inqu.ru</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Inqu.ru">
        <meta name="keywords" content="inqu.ru, test, web-development">

        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="shortcut icon" type="image/x-icon" href="_img/favicon.png">
    </head>

    <body>


        <?php
            function createDashboardContent()
            {
                $greeting = "Hey you";
                return date("l dS F Y; H:i:s e P") .
                '<div class="greeting">' . $greeting . '<div>';
            }

            function displayDomainInfo($domain)
            {
                echo '<pre>';
                    echo 'WHOIS:<br>';
                    system('whois ' . $domain);
                    echo 'DNS:<br>';
                    $domainDNS = dns_get_record($domain);
                    print_r($domainDNS);
                    echo 'SERVER:<br>';
                    print_r($_SERVER);
                echo '</pre>';
            }

            echo(createDashboardContent());

            if (array_key_exists('domain', $_GET)) {
                displayDomainInfo($_GET['domain']);
            }

            /* Simple cycle
            for ($i = 0; $i <= 10; $i += 1)
            {
                echo ($i . '<br>');
            }
            */


        ?>

        <form action="" method="get">
            <p>Domain: <input type="text" name="domain" /></p>
            <p><input type="submit" value="dig"/></p>
        </form>


        <script type="text/javascript">

        </script>

    </body>

</html>




<?php
//test
//testing228
?>
