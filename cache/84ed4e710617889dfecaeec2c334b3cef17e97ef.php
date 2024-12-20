<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('content'); ?>
  <p>Hay <?php echo e(count($users)); ?> usuarios</p>
  <?php if(count($users)): ?>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($user['id']); ?></td>
        <td><?php echo e($user['name']); ?></td>
        <td><?php echo e($user['surname']); ?></td>
        <td><a href="/user/<?php echo e($user['id']); ?>">Editar</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <?php else: ?>
    <h2>No hay usuarios</h2>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>