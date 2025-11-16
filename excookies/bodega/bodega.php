<?php
if(isset($_POST['submit'])){
    $majoredat = $_POST['majoredat'];
    $idioma = $_POST['idioma'];
    $moneda = $_POST['moneda'];

    setcookie('majoredat', $majoredat, time()+3600*24*30); 
    setcookie('idioma', $idioma, time()+3600*24*30);
    setcookie('moneda', $moneda, time()+3600*24*30);

    header('Location: info_bodega.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Bodega - Selecció</title>
</head>
<body>
    <h1>Benvingut a la Bodega</h1>
    <form method="POST">
        <p>Ets major d'edat?</p>
        <input type="radio" name="majoredat" value="si" required> Sí
        <input type="radio" name="majoredat" value="no" required> No

        <p>Idioma:</p>
        <select name="idioma" required>
            <option value="cat">Català</option>
            <option value="esp">Español</option>
            <option value="eng">English</option>
        </select>

        <p>Moneda:</p>
        <select name="moneda" required>
            <option value="EUR">Euros (€)</option>
            <option value="GBP">Lliures (£)</option>
            <option value="USD">Dòlars ($)</option>
        </select>

        <br><br>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>
