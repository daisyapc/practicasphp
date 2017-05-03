<?PHP
  var_dump($_POST);
  if ($_POST){
    if (empty($_POST["name"])){
      $errorNombre= "*Debes ingresar nombre";
    }
    if (empty($_POST["email"])) {
      $errorEmail= "*Debes Ingresar email";
    }
    if (empty($_POST["username"])) {
      $errorUsername= "*Importante ingresar nombre de usuario";
    }
    if ($_POST["password"] != $_POST["cpassword"]) {
      $errorPassword= "Contraseña no coincide, volver a ingresar";
    }
    if (empty($errorNombre) && empty($errorEmail) && empty($errorUsername) && empty($errorPassword)) {
      header("Location:felicitaciones.html");exit;
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>


                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?php echo $_POST["name"] ?>' maxlength="50"/><br/>
                    <h5 style="color:red"><span id='register_name_errorloc' class='error'><?= $errorNombre?></span></h5>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?php echo $_POST["email"] ?>' maxlength="50"/>
                     <br/>
                    <h5 style="color:red"><span id='register_email_errorloc' class='error'><?= $errorEmail?></span></h5>

                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?= $_POST["username"]?>'
                      maxlength="50" />
                      <br/>
                    <h5 style="color:red"><span id='register_username_errorloc' class='error'><?=$errorUsername?></span></h5>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Confirmar Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='cpassword' id='cpassword' maxlength="50" />
                    <h5 style="color:red"><div id='register_cpassword_errorloc' class='error' style='clear:both'><?= $errorPassword?></div></h5>
                </div>
                <div class="container" style='heigth:80px;'>
                  <label for="country">Selecciona Pais</label>
                  <select class="country" name="country">
                    <?php
                    $country = array('Argentina','Chile','Uruguay','Venezuela','Panama','Mexico','Colombia','Paraguay','Peru','Ecuador');
                      foreach ($country as $value) {
                      echo "<option value='". $value ."'";
                      if ($_POST['country'] == $value) {
                        echo "selected";
                      }
                      echo ">" . $value ."</option>";
                    }
                     ?>
                  </select>
                  </div>

                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>
    </body>
</html>
