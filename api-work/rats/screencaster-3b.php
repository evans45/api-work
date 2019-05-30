<?php
function b($txt){}

    $txt = "Engineer-Wairuri-Kamau|20.00,15,6" ;
    $d = explode('-', $txt);

    if($d[0] == 'engineer'){

    }elseif($d[0] == 'doctor'){

    }elseif($d[0] == 'Miss'){

    }else{
        $d[0] == 'Mr';
    }
    

    
    
    print_r($d);



?>