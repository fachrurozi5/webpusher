<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Read Excel</title>
  </head>
  <body>
    excel....

    <table border="1">
      <?php foreach ($header as $item):?>
        <th>
          <?= $item['A'] ?>
        </th>
        <th>
          <?= $item['B'] ?>
        </th>
        <th>
          <?= $item['C'] ?>
        </th>
      <?php endforeach;?>

      <?php foreach ($values as $item):?>
        <tr>
          <td>
            <?= $item['A'] ?>
          </td>
          <td>
            <?= $item['B'] ?>
          </td>
          <td>
            <?= $item['C'] ?>
          </td>
        </tr>
      <?php endforeach;?>
    </table>
  </body>
</html>
