<table>
  <tbody>
    <?php foreach ($gb_updates as $gb_update): ?>
    <tr>
      <td><?php echo $gb_update->getContent() ?></td>
     </tr>
     <tr>
      <td>Posted at <?php echo $gb_update->getCreatedAt() ?> by <?php echo $gb_update->getUser()->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>