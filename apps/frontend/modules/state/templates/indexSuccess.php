<h1>States List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($states as $state): ?>
    <tr>
      <td><a href="<?php echo url_for('state/show?id='.$state->getId()) ?>"><?php echo $state->getId() ?></a></td>
      <td><?php echo $state->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('state/new') ?>">New</a>
