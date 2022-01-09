<?
if(!empty($_POST) && !empty($_POST['one']) && !empty($_POST['two'])):
        $one = $_POST['one'];
        $two = $_POST['two'];
        $symbol = $_POST['symbol'];
        $res = '';


        if($symbol === "+"):
            $res = $one + $two ;
        endif;    
        if($symbol == '-'):
            $res = $one - $two;
        endif;    
        if($symbol == '*'):
            $res = $one * $two;
        endif;    
        if($symbol == '/'):
            $res = $one / $two;
        endif;    
    
     echo $res;

    else:
        echo 'Вы ввдели не правильые данные';
     
    endif;