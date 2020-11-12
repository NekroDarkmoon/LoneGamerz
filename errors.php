<?php if (count($errors) > 0 ): ?>
  <div class="error">
    <?php foreach ($errors as $error): ?>
      <i class="fas fa-exclamation-triangle"></i>
      <p><?php echo $error; ?></p>
    <?php endforeach ?>
  </div>
<?php endif ?>
