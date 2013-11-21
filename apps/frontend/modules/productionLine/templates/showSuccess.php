<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $production_line->getId() ?></td>
    </tr>
    <tr>
      <th>Operator:</th>
      <td><?php echo $production_line->getOperatorId() ?></td>
    </tr>
    <tr>
      <th>Company:</th>
      <td><?php echo $production_line->getCompanyId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $production_line->getName() ?></td>
    </tr>
    <tr>
      <th>Model:</th>
      <td><?php echo $production_line->getModel() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('productionLine/edit?id='.$production_line->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('productionLine/index') ?>">List</a>
