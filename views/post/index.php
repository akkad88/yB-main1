<?php include __DIR__ . "/../layout/header.php"; ?>

<br />
<br />

<ul  class="list-group ">
  <?php foreach ($posts AS $post): ?>
    <li  class="list-group-item "  >

      <a href="show?id=<?php echo e($post->id); ?>">
        <?php echo e($post->title); ?>
      </a>
    <?php if (isset($_SESSION['login'])) : ?>
        <a class="badge " href="edit?id=<?php echo e($post->id); ?>"> Edit Post </a>
        <a class="badge " href="delete?id=<?php echo e($post->id); ?>"> Delete Post </a>
        <p class="w-50"><?= substr(e($post->content),0,300); ?></p>

    <?php endif; ?>

    </li>
  <?php endforeach; ?>
</ul>

<?php include __DIR__ . "/../layout/footer.php"; ?>
