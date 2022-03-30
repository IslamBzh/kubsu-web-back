<?php

if(isset($_POST)){

  if(isset($_POST['name'],$_POST['mail'], $_POST['date'], $_POST['gender'], $_POST['limb'], $_POST['superpower'], $_POST['bio'])){

      require_once 'db.php';
    echo "Data all checked!";
    //var_dump($_POST); 

  }
}
    //exit();

?>





<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Бжахов - 3 lab</title>
  </head>


  <body>

    <main>
      <div class="form">
          <form action="/3" method="POST">
            <br>
                   
            <input class="vv" required="" placeholder="Введите свое имя" name="name"/><br>
          
            <input class="vv" required="" placeholder="Введите эл. почту" name="mail" type="email"/><br>

            <label>
              Дата рождения:
              <br> 
              <input class="vv" required="" placeholder="Укажите дату рождения" name="date" type="date"/>
              </select>
            </label><br>
           

              Выберите свой пол:
              <br>
            <label>
              <input required="" type="radio" name="gender" value="male"> Муж
            </label>
            <label>
              <input type="radio" name="gender" value="female"> Жен
            </label><br>
              
           <br>
            <label>
              Выберите количество конечностей:<br>
              <input type="radio" name="limb" value="1">1
              <input type="radio" name="limb" value="2">2
              <input type="radio" name="limb" value="3">3
              <input type="radio" name="limb" value="4">4
              <input type="radio" name="limb" value="5">5
            </label>
            
        
            <br><br>
            <label>
              Выберите свою сверхспособность:
              <br>
              <select class="vv" name="superpower[]"> 
                <option value="1">Бессмертие</option>
                <option value="2">Прохождение сквозь стены</option>
                <option value="3">Левитация</option>
              </select>
            </label>
            <br>

            <label>
                Биография:<br>
                <textarea style="font-size: 15px;" class="vv" name="bio" rows="5" cols="30"></textarea><br>
            </label>
         
        
            <div class="cont-sub">
              <div><input type="checkbox" required=""  name="check-1">C контрактом ознакомлен(а)</div>
              <button class="submit" href="../form_action.html" value="Отправить">Отрпавить</button>
            </div>
            <br>
            <br>
        </form>
      </div>

    </main>
     
  </body>
</html>
 
