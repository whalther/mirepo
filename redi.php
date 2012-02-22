<? 
    $tam=getimagesize("http://d.emule.com/fondo-oso-polar/fondo-oso-polar.jpg");  
    if($tam[0] > 500 OR $tam[1] > 500) 
        { 
        cambiartam("http://d.emule.com/fondo-oso-polar/fondo-oso-polar.jpg", "thum/nuevaimagen.jpg", 200, 200); 
        } 

function cambiartam($nombre,$archivo,$ancho,$alto) 
    { 
    $tmp=split(".",$nombre, 1); 

    if (preg_match('/jpg|jpeg|JPG/',$tmp[0])) 
        { 
        $imagen=imagecreatefromjpeg($nombre); 
        } 
    if (preg_match('/png|PNG/',$tmp[0])) 
        { 
        $imagen=imagecreatefrompng($nombre); 
        } 
    if (preg_match('/gif|GIF/',$tmp[0])) 
        { 
        $imagen=imagecreatefromgif($nombre); 
        } 

    $x=imageSX($imagen); 
    $y=imageSY($imagen); 

    if ($x > $y)  
        { 
        $w=$ancho; 
        $h=$y*($alto/$x); 
        } 

    if ($x < $y)  
        { 
        $w=$x*($ancho/$y); 
        $h=$alto; 
        } 

    if ($x == $y)  
        { 
        $w=$ancho; 
        $h=$alto; 
        } 


    $destino=ImageCreateTrueColor($w,$h); 
    imagecopyresampled($destino,$imagen,0,0,0,0,$w,$h,$x,$y);  


    if (preg_match("/png/",$tmp[0])) 
        { 
        imagepng($destino,$archivo);  
        }  
    if (preg_match("/gif/",$tmp[0])) 
        { 
        imagegif($destino,$archivo); 
        } 
    else  
        { 
        imagejpeg($destino,$archivo);  
        } 

    imagedestroy($destino);  
    imagedestroy($imagen);  
} 

?> 