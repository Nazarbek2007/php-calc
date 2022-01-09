
        <main class="main">
            <section class="head">
                <h2 class="head__title">Таблица умножения</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>
            <form  class="form form__table">
                <label class="form__label">
                    <span class="form__text">Количество колонок</span>
                    <input type="text" class="form__input" name="col">
                </label>
                <label class="form__label">
                    <span class="form__text">Количество строк</span>
                    <input type="text" class="form__input" name="row">
                </label>
                <button class="form__btn">Отправить</button>
            </form>


            <?
                // var_dump($_POST);

            ?>

            <div class="table">
               
            </div>
        </main>


        <script>
            const formTable = document.querySelector('.form__table'),
                table = document.querySelector('.table');

                formTable.addEventListener('submit', function (e) { 
                    e.preventDefault();
                    fetch('../ajax/table-result.php', {
                        method: 'POST',
                        body: new FormData(this)
                    })
                    .then((res) => res.text())
                    .then(data => {
                        table.innerHTML = data
                    })
                })
        </script>