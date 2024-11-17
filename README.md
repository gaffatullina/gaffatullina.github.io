# gaffatullina.github.io
<html>
    <head>
        <title> Резюме </title>
        <style>
            p {
                margin-bottom: 25px;
            }

            table {
                border: 1px solid #000;
                width: 100%;
                margin-bottom: 20px;
                border-collapse: collapse;
            }

            th, td {
                padding: 10px;
                text-align: center;
                border: 1px solid #000;
            }

            th:nth-child(1), td:nth-child(1) {
                width: 15%;
            }

            th:nth-child(2), td:nth-child(2),
            th:nth-child(3), td:nth-child(3),
            th:nth-child(4), td:nth-child(4),
            th:nth-child(5), td:nth-child(5),
            th:nth-child(6), td:nth-child(6) {
                width: 10%; 
            }

            .inputs {
                display: flex; 
                gap: 200px;
                margin-top: 20px;
            }

            .inputs label {
                display: block;
                margin-bottom: 5px;
            }

            .inputs input {
                width: 80%;
                padding: 8px;
            }

            .image p {
                margin-bottom: 10px;
            }

            #more-info {
                display: none;
                margin-top: 20px;
            }

            .toggle-link {
                text-align: center;
                margin-top: 20px;
            }

        </style>
    </head>
    <body>
        <div class="image">
            <img src="foto.jpg" alt="" width="120" align="left" />
            <h1><strong> Гаффатуллина Лена</strong> </h1>
            <p><strong> Адрес: </strong> Челябинск </p> 
            <p><strong> Опыт работы: </strong> Нет </p> 
            <p><strong> Телефон: </strong> +7-961-357-05-60 </p>
        </div>

        <div class="text">
            <h2><strong> Знание языков: </strong></h2>
        </div>

        <table>
            <tr>
                <th>&nbsp;</th>
                <th>Java</th>
                <th>JavaScript</th>
                <th>C++</th>
                <th>C#</th>
                <th>Swift</th>
            </tr>
            <tr>
                <td>Отлиное владение</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
            </tr>
            <tr>
                <td>Хорошее владение</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
            </tr>
            <tr>
                <td>Среднее владение</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
            </tr>
            <tr>
                <td>Плохое владение</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
                <td>нет</td>
            </tr>   
        </table>

        <div class="inputs">
            <div class="input-field">
                <label for="name-input">Имя:</label>
                <input type="text" id="name-input" placeholder="Введите имя" required>
            </div>
            <div class="input-field">
                <label for="phone-input">Телефон:</label>
                <input type="tel" id="phone-input" placeholder="+7 (900) 000-01-01" pattern="\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}" required>
            </div>
        </div>
        <h1 class="toggle-link" onclick="toggleInfo()">Кликните сюда, чтобы узнать меня подробнее</h1>
        <div id="more-info">
            <p><strong>Имя:</strong> Гаффатуллина Лена</p>
            <p><strong>Возраст:</strong> 18 лет</p>
            <p><strong>Образование:</strong> Студентка 2-го курса направления "ПМИ"</p>
            <p><strong>Увлечения:</strong> Программирование, музыка, сон</p>
            <p><strong>Навыки:</strong> Не отладывать дела на потом и забывать, что задание было сделано, а потом удивляться </p>
        </div>

        <script>
            function toggleInfo() {
                var info = document.getElementById("more-info");
                if (info.style.display === "none" || info.style.display === "") {
                    info.style.display = "block";
                    window.scrollTo(0, document.body.scrollHeight);
                } else {
                    info.style.display = "none";
                }
            }
        </script>
    </body>
</html>
