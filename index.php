<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="info.css">
    <title>Beosztás</title>
</head>
<body>
<div class="jel">
<h3>Műszak jelentkezés</h3>
<form method="post" action="checklist.php">
<input type="text" name="nev" placeholder="Teljes név">
<table>
<tr>
<td>Hétfő</td>
<td>
<select name="hetfo" size=”1”>
      <option value="hde">Délelőtt</option>
      <option value="hdu">Délután</option>
      <option value="hej">Éjszaka</option>
      <option value="hnull" selected>Nincs kiválasztva</option>
</select>
</td>
</tr>

<tr>
<td>Kedd</td>
<td>
<select name="kedd" size=”1”>
      <option value="kde">Délelőtt</option>
      <option value="kdu">Délután</option>
      <option value="kej">Éjszaka</option>
      <option value="knull" selected>Nincs kiválasztva</option>
</select>
</td>
</tr>

<tr>
<td>Szerda</td>
<td>
<select name="szerda" size=”1”>
      <option value="szde">Délelőtt</option>
      <option value="szdu">Délután</option>
      <option value="szej">Éjszaka</option>
      <option value="sznull" selected>Nincs kiválasztva</option>
</select>
</td>
</tr>

<tr>
<td>Csütörtök</td>
<td>
<select name="csutortok" size=”1”>
      <option value="csde">Délelőtt</option>
      <option value="csdu">Délután</option>
      <option value="csej">Éjszaka</option>
      <option value="csnull" selected>Nincs kiválasztva</option>
</select>
</td>
</tr>

<tr>
<td>Péntek</td>
<td>
<select name="pentek" size=”1”>
      <option value="pde">Délelőtt</option>
      <option value="pdu">Délután</option>
      <option value="pej">Éjszaka</option>
      <option value="pnull" selected>Nincs kiválasztva</option>
</select>
</td>
</tr>

<tr>
<td>Szombat</td>
<td>
<select name="szombat" size=”1”>
      <option value="szode">Délelőtt</option>
      <option value="szodu">Délután</option>
      <option value="szoej">Éjszaka</option>
      <option value="szonull" selected>Nincs kiválasztva</option>
</select>
</td>
</tr>

<tr>
<td>Vasárnap</td>
<td>
<select name="vasarnap" size=”1”>
      <option value="vde">Délelőtt</option>
      <option value="vdu">Délután</option>
      <option value="vej">Éjszaka</option>
      <option value="vnull" selected>Nincs kiválasztva</option>
</select>
</td>
</tr>

</table>
<input class="submit" type="submit" name="kuldes" value="Küldés">
</form>

</div>


</body>
</html>
