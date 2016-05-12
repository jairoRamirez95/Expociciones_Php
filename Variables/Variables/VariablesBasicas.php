<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>

<?php
  setcookie("MiCookie[edad]", '18', time()+3600);
  setcookie("MiCookie[nombre]", 'Fabian', time()+3600);
?>

<form action="" method="post">
    Nombre:  <input type="text" name="personal[nombre]" /><br />
    Email:   <input type="text" name="personal[email]" /><br />
    Cerveza: <br />
    <select multiple name="cerveza[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
    </select><br />
    <input type="submit" value="¡enviarme!" />
</form>