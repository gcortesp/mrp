<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $category_type->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $category_type->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('categoryType/edit?id='.$category_type->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('categoryType/index') ?>">List</a>
