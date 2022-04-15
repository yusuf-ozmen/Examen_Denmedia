<!DOCTYPE html>
<html>
<head>
<style>
#menus {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 60px;
  margin-bottom: 60px;
}

#menus td, #menus th {
  border: 1px solid #ddd;
  padding: 8px;
}

#menus tr:nth-child(even){background-color: #f2f2f2;}

#menus tr:hover {background-color: #ddd;}

#menus th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0096FF	;
  color: white;
}
</style>
</head>
<body>
<?php
include_once('header.php');
?>

<table id="menus">
  <tr>
    <th>Naam gerecht</th>
    <th>Prijs</th>
    <th>Beschrijving</th>
  </tr>
  <tr>
    <td>TZATZIKI</td>
    <td>€ 3</td>
    <td>frisse dip met yoghurt, knoflook en komkommer</td>
  </tr>
  <tr>
    <td>ELLINIKI SALATA</td>
    <td>€ 5.50</td>
    <td>griekse salade met olijven en fetakaas</td>
  </tr>
  <tr>
    <td>INKTVISRINGEN</td>
    <td>€ 6.50</td>
    <td>inktvisringen met onze eigen knoflooksaus</td>
  </tr>
  <tr>
    <td>COURGETTEBALLETJES</td>
    <td>€ 6.50</td>
    <td>huisgemaakte courgetteballetjes met feta</td>
  </tr>
  <tr>
    <td>PITA KIP</td>
    <td>€ 5.50</td>
    <td>geroosterd pitabrood met kipfilet en knoflooksaus</td>
  </tr>
  <tr>
    <td>PITA BIFTEKI</td>
    <td>€ 7</td>
    <td>geroosterd pitabrood met rundergehakt en tzatziki</td>
  </tr>
  <tr>
    <td>PITABROOD</td>
    <td>€ 1.50</td>
    <td>los per stuk</td>
  </tr>
  <tr>
    <td>OLIJVEN EN FETA</td>
    <td>€ 3</td>
    <td>portie olijven met feta</td>
  </tr>
  <tr>
    <td>BIJ DE FRIETJES</td>
    <td>€ 0.50</td>
    <td>extra mayonaise en ketchup</td>
  </tr>
  <tr>
    <td>PITA VEGETARISCH</td>
    <td>€ 5.50</td>
    <td>geroosterd pitabrood met feta, tomaten en ui</td>
  </tr>
  <tr>
    <td>PITA HALLOUMI</td>
    <td>€ 6</td>
    <td>geroosterd pitabrood met gegrilde cypriotische geitenkaas halloumi</td>
  </tr>
  <tr>
    <td>DOLMADES</td>
    <td>€ 6.50</td>
    <td>wijnbladeren gevuld met risotto</td>
  </tr>
  <tr>
    <td>PITA SOUVLAKI</td>
    <td>€ 6.50</td>
    <td>geroosterd pitabrood met gegrilde varkenshaasspies en tzatziki</td>
  </tr>
  <tr>
    <td>PITA GYROS VEGAN</td>
    <td>€ 7</td>
    <td>geroosterd pitabrood met vegan gyros, champignons, tomaten, ui en frietjes</td>
  </tr>
  <tr>
    <td>RODOS PITA GYROS</td>
    <td>€ 7.50</td>
    <td>geroosterd pitabrood met gyros van kipstukjes en tzatziki</td>
  </tr>
</table>
<?php
include_once('footer.php');
?>
</body>
</html>
