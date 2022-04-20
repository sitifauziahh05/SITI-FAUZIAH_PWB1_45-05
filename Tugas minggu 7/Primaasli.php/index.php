function is_prime($number)
{
     
    if($number == 1){
        return false;
    }
    if ($number == 2){
        return true;
    }
    $x = sqrt($number);
    $x = floor($x);

    for($i = 2 ; $i <= $x ; ++$i ){
        if ($number % $i == 0){
            break;
        }
    }
    if($x == $i-1){
        return true;
    }else{
        return false;
    }
}