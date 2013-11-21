<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $state->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $state->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('state/edit?id='.$state->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('state/index') ?>">List</a>
