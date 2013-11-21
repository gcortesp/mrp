<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $product_line_product->getId() ?></td>
    </tr>
    <tr>
      <th>Product:</th>
      <td><?php echo $product_line_product->getProductId() ?></td>
    </tr>
    <tr>
      <th>Production line:</th>
      <td><?php echo $product_line_product->getProductionLineId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $product_line_product->getName() ?></td>
    </tr>
    <tr>
      <th>Operational rate:</th>
      <td><?php echo $product_line_product->getOperationalRate() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('productLineProduct/edit?id='.$product_line_product->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('productLineProduct/index') ?>">List</a>
