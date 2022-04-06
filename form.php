<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?s">
    <title>Бжахов - 3 lab</title>
  </head>


  <body>

    <main>

<?php

if(isset($_POST['bio'])){

  if(isset($_POST['name'],$_POST['mail'], $_POST['date'], $_POST['gender'], $_POST['limb'], $_POST['superpowers'], $_POST['bio'])){

      require_once 'db.php';
    echo "<div class='list' id='upd'>Данные сохранены!</div>"; 

  }else{
    echo "<div class='list' id='upd'><pre>";
    if(!isset($_POST['name']))
      echo "\nЗаполните поле \"Имя\"";
    else if($_POST['name'] == "")
      echo "\nЗаполните поле \"Имя\"";
    if(!isset($_POST['mail']))
      echo "\nЗаполните поле \"Почта\"";
    else if($_POST['mail'] == "")
      echo "\nЗаполните поле \"Почта\"";
    if(!isset($_POST['date']))
      echo "\nЗаполните поле \"Дата рождения\"";
    else if($_POST['date'] == "")
      echo "\nЗаполните поле \"Дата рождения\"";
    if(!isset($_POST['gender']))
      echo "\nЗаполните поле \"Пол\"";
    if(!isset($_POST['limb']))
      echo "\nЗаполните поле \"Кол-во конечностей\"";
    if(!isset($_POST['superpowers']))
      echo "\nЗаполните поле \"Суперспособности\"";
    if(!isset($_POST['bio']))
      echo "\nЗаполните поле \"Биография\"";
    else if($_POST['bio'] == "")
      echo "\nЗаполните поле \"Биография\"";
    if(!isset($_POST['licenz']))
      echo "\nОзнакомтесь с контрактом";
    echo "</pre></div>";
  }
  echo "<script>
        setTimeout(function(){
          document.getElementById('upd').style.display = 'none';
        }, 8 * 1000);
        
      </script>";
}

?>
      <div class="form">
          <form action="/3?post" method="POST">
            <br>
                   
            <input <?php echo (isset($_POST['name']) ? " value='" . $_POST['name'] . "' " : "" ) ?> class="vv" %%% placeholder="Введите свое имя" name="name"/><br>
          
            <input <?php echo (isset($_POST['mail']) ? " value='" . $_POST['mail'] . "' " : "" ) ?> class="vv" %%% placeholder="Введите эл. почту" name="mail" type="email"/><br>

            <label>
              Дата рождения:
              <br> 
              <input <?php echo (isset($_POST['date']) ? " value='" . $_POST['date'] . "' " : "" ) ?> class="vv" %%% placeholder="Укажите дату рождения" name="date" type="date"/>
              </select>
            </label><br>
           

              Выберите свой пол:
              <br>
            <label>
              <input %%% type="radio" name="gender" value="male"> Муж
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
              <select name="superpowers[]" multiple="multiple">
                  <option value="Бессмертие" selected="selected">Бессмертие</option>
                  <option value="Прохождение сквозь стены">Прохождение сквозь стены</option>
                  <option value="Левитация">Левитация</option>
              </select>
            </label>
            <br>

            <label>
                Биография:<br>
                <textarea <?php echo (isset($_POST['bio']) ? " value='" . $_POST['bio'] . "' " : "" ) ?> style="font-size: 15px;" class="vv" name="bio" rows="5" cols="30"></textarea><br>
            </label>
         
        
            <div class="cont-sub">
              <div><input type="checkbox" %%% name="licenz">C контрактом ознакомлен(а)</div>
              <button class="submit" href="../form_action.html" value="Отправить">Отрпавить</button>
            </div>
            <br>
            <br>
        </form>
      </div>

    </main>
     
  </body>
</html>
 
