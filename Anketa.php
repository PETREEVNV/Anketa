<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styles/style.css">
    <title>Anketa</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    </head>
        <body>
            <h2>Анкета Web-разработчика</h2>
            <form action="reg.php" method="POST">
                <table border="2" cellspacing='0' cellpadding='4' >
                    <tr>
                        <td class="green">Регистрационное имя: </td>
                        <td class="gray"><input type = "text" placeholder="Имя" name = "name"></td>
                    </tr>
                    <tr>
                        <td class="green">Пароль: </td>
                        <td class="gray"><input type = "password" placeholder="Пароль" name = "password"><br>
                            <input type = "password" placeholder="Подтвердить пароль" name = "passwordAcces">
                        </td>
                    </tr>
                    <tr>
                        <td class="green">Ваша специализация: </td>
                        <td class="gray">
                            <select>
                                <option value = 1>Web-мастер</option>
                                <option value = 2>Менеджер</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="green">
                            Пол:
                        </td>
                        <td class="gray">
                            <input type = "radio" name = "gender" value = "M">Мужской<br>
                            <input type = "radio" name = "gender" value = "Ж">Женский
                        </td>
                    </tr>
                    <tr>
                        <td class="green">
                            Ваши навыки
                        </td>
                        <td  class="gray">
                        <input type ="checkbox" name = "skils[]" value = "" >Знание HTML и CSS<br>
                        <input type ="checkbox" name = "skils[]" value = "">Знание Perl<br>
                        <input type ="checkbox" name = "skils[]" value = "">Знание ASP<br>
                        <input type ="checkbox" name = "skils[]" value = "">Знание Adobe Photpshop<br>
                        <input type ="checkbox" name = "skils[]" value = "">Знание Java<br>
                        <input type ="checkbox" name = "skils[]" value = "">Знание JavaScript<br>
                        <input type ="checkbox" name = "skils[]" value = "">Знание Flash
                    </td>
                    </tr>
                    <tr>
                        <td class="green">Дополнительные сведения о себе: </td>
                        <td class="gray"><textarea name = "text" placeholder="Введите текст" maxlength="150"></textarea></td>
                    </tr>
                </table>
                <p><button href=""type="submit" value="Зарегистрировать" >Зарегистрировать </button> 
                <button type="reset" value="Очистить форму">Очистить форму</button></p>
            </form>
        </body>
    </html>