
        <main class="main">
            <?

                var_dump($_GET);

                $name = 'pro';
                // echo '<h1>PROWEB</h1>'; /* Выводит информацию на экран */
            ?>

            <?if($name == 'proweb'):?>
                <h1><?= $name?></h1> <!-- РАВНО - вывод в тег -->
            <?else:?>
                <h1>В переменной такого слова нет</h1>
            <?endif;?>

            <?
                $array = ['John', 'Alex', 'Ivan']; /* Массив */
                $countries = [
                    'uzbekistan' => ['tashkent', 'samarkand', 'buxara'],
                    'russia' => ['moskva', 'st.peterburg', 'kazan'],
                    'usa' => ['california', 'washington', 'florida']
                ]; /* Ассоциотивный массив. Нет понятия объект. Ключи должны быть обяхательно в ковычках */
            ?>

            <?for($i = 0; $i < count($array); $i++):?>
                <h2><?= $array[$i]?></h2>
            <?endfor;?>

            <?foreach($countries as $country => $info):?>
                <h2><?= $country?></h2>
                <hr>
                <?foreach($info as $value):?>
                    <p><?= $value?></p>
                <?endforeach;?>
            <?endforeach;?>

            <form action="">
                <p>Выберите год рождения</p>
                <select>
                    <?for($i = 1960; $i <= date('Y'); $i++):?>
                    <option><?= $i?></option>
                    <?endfor;?>
                </select>
            </form>


            <h2><?= date('d/m/Y')?></h2>
        </main>