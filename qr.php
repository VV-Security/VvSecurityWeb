<?php
require_once 'application/libraries/phpqrcode/qrlib.php';
$contenido="Prueba de qr con imagen";

QrCode::png($contenido      //contenido
            ,"QrPrueba.png" //nombre del archivo
            ,QR_ECLEVEL_Q   //ERRORES
            ,100              //tamaño en pixeles
            ,1              //margen
        );



    $QrOrignial = @imagecreatefrompng("QrPrueba.png"); 
    $LogoOriginal =@imagecreatefrompng("assets/img/logoQr.png");    

    $DataQr=getimagesize("QrPrueba.png");
    $DataLogo=getimagesize("assets/img/logoQr.png");

    list($width,$height) = getimagesize("QrPrueba.png");
    list($Lwidth,$Lheight) = getimagesize("assets/img/logoQr.png");

    $newQr = imagecreatetruecolor($width,$height);

    imagecopy($newQr,$QrOrignial,0,0,0,0,$width,$height);
    imagecopy($newQr,$LogoOriginal,($width/2)-($Lwidth/2),($height/2)-($Lheight/2),0,0,$Lwidth,$Lheight);


    imagepng($newQr,"Qrconlogo.png",0);

?>

