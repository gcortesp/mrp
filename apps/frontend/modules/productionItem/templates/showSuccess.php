<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $production_item->getId() ?></td>
    </tr>
    <tr>
      <th>Production order:</th>
      <td><?php echo $production_item->getProductionOrderId() ?></td>
    </tr>
    <tr>
      <th>Quantity:</th>
      <td><?php echo $production_item->getQuantity() ?></td>
    </tr>
    <tr>
      <th>Produced:</th>
      <td><?php echo $production_item->getProduced() ?></td>
    </tr>
    <tr>
      <th>Lost:</th>
      <td><?php echo $production_item->getLost() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('productionItem/edit?id='.$production_item->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('productionItem/index') ?>">List</a>
