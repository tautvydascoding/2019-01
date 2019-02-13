
        <?php
        // 1. sukurti index.php
        // 2. parasyti Forma su vienu ivedimo lauku:
        //  'elpastas' ir mygtuku "subscribe"

        // 2. kai paspaudzia 'subscribe',
        // vartotoja perkelti i subscribe.php faila
        // formoje action='subscribe.php'
        //
        // 3.
        // 3. subscribe.php faile
        // isvesti elpasta

        // 5. subscribe.php faile suprogramuoti tikrinima:
        // kad vartotojui nieko neivedus ismestu pranesima
        // jeigu vartotojas kazka ivede - isvesti jo email i ekrana
        // jeig vartotojas nieko neivede - isvesti pranesima, kad elpastas neivestas




        // // PVZ
        // jeigu stalcius 'elpastas' egzistuoja
        if ( array_key_exists('elpastas', $_GET) ){
            // ar stalciuje 'elpastas'  kazkas ideta
            if (    $_GET['elpastas']  ==   NULL    ) {
                echo "talcius neturi reiksmes !!!<hr />";
            } else {
                echo "talcius Turi reiksme: {$_GET['elpastas']}  <hr />";
                echo "talcius Turi reiksme:" . $_GET['elpastas'] . "<hr />";
            }
        } else {
            echo "stalciaus tokiu pavadinimu 'elpastas' nera";
        }
