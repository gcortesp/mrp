<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $product->getId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $product->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $product->getName() ?></td>
    </tr>
    <tr>
      <th>Price:</th>
      <td><?php echo $product->getPrice() ?></td>
    </tr>
    <tr>
      <th>Active:</th>
      <td><?php echo $product->getActive() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('product/edit?id='.$product->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('product/index') ?>">List</a>
