<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $company->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $company->getName() ?></td>
    </tr>
    <tr>
      <th>Rut:</th>
      <td><?php echo $company->getRut() ?></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><?php echo $company->getAddress() ?></td>
    </tr>
    <tr>
      <th>City:</th>
      <td><?php echo $company->getCity() ?></td>
    </tr>
    <tr>
      <th>Country:</th>
      <td><?php echo $company->getCountry() ?></td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td><?php echo $company->getPhone() ?></td>
    </tr>
    <tr>
      <th>Mail:</th>
      <td><?php echo $company->getMail() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('company/edit?id='.$company->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('company/index') ?>">List</a>
