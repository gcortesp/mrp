<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $production_order->getId() ?></td>
    </tr>
    <tr>
      <th>Product line product:</th>
      <td><?php echo $production_order->getProductLineProductId() ?></td>
    </tr>
    <tr>
      <th>State:</th>
      <td><?php echo $production_order->getStateId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $production_order->getName() ?></td>
    </tr>
    <tr>
      <th>Code:</th>
      <td><?php echo $production_order->getCode() ?></td>
    </tr>
    <tr>
      <th>Quantity:</th>
      <td><?php echo $production_order->getQuantity() ?></td>
    </tr>
    <tr>
      <th>Start date:</th>
      <td><?php echo $production_order->getStartDate() ?></td>
    </tr>
    <tr>
      <th>Start time:</th>
      <td><?php echo $production_order->getStartTime() ?></td>
    </tr>
    <tr>
      <th>End date:</th>
      <td><?php echo $production_order->getEndDate() ?></td>
    </tr>
    <tr>
      <th>End time:</th>
      <td><?php echo $production_order->getEndTime() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('productionOrder/edit?id='.$production_order->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('productionOrder/index') ?>">List</a>
