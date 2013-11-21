<h1>Category types List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($category_types as $category_type): ?>
    <tr>
      <td><a href="<?php echo url_for('categoryType/show?id='.$category_type->getId()) ?>"><?php echo $category_type->getId() ?></a></td>
      <td><?php echo $category_type->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('categoryType/new') ?>">New</a>
