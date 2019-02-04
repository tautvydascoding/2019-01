console.log(   " mano js failas "  );


// ========js best practice & common mistakes (~2h)

// ------Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
    let prekiautojai = [];
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
    prekiautojai[0] = "senukai";
    prekiautojai[1] = "moki vezi";
    prekiautojai[2] = "ermitazas";
    prekiautojai[3] = "sodzius";
    prekiautojai[4] = "zalia stotele";
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva
    console.log(  prekiautojai    );

	// 2 pervadinti pirma stalciu pvz + "ir KO"
    prekiautojai[0] = "senukai ir KO";
    console.log(  prekiautojai    );

    // 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
    // !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
    let temp = prekiautojai[1];
    // let s, str, string, txt, text,   t, tmp, temp;
    prekiautojai[1] =  prekiautojai[2];
    prekiautojai[2] =  temp;
    console.log(  prekiautojai    );

    // 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

    function sukeisti(nr1, nr2) {
        let temp = prekiautojai[nr1];
        prekiautojai[nr1] =  prekiautojai[nr2];
        prekiautojai[nr2] =  temp;
    }
    sukeisti(0,1);
    console.log(  "po sukeitimo 0,1", prekiautojai    );
    sukeisti(2,0);
    console.log( "po sukeitimo 2,0", prekiautojai    );

    //
