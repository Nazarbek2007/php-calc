<?

    if(!empty($_POST) && !empty($_POST['col']) && !empty($_POST['row'])):

        $col = $_POST['col'];
        $row = $_POST['row'];
        $result = '';


        for($i = 1; $i <= $row; $i++):
        $result .= '<div class="table__row">';
            for($j = 1; $j <= $col; $j++):
            $result .= '<div class="table__col">' . $i * $j . '</div>';
            endfor;
        $result .= '</div>';
        endfor;
        echo $result;
    else:
        echo 'Вы ввели не правильные данные';
    endif;


    