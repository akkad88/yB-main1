<?php include __DIR__ . "/../layout/header.php"; ?>

<br />
<br />

<div class="panel panel-default">
 <div class="panel-heading">
   <h3 class="panel-title"><?php echo e($post['title']); ?></h3>
 </div>
 <div class="panel-body">
     <strong><?= date('Y-m-d',strtotime($post['created_at'])); ?></strong>
     <br />
     <?php echo nl2br(e($post['content'])); ?>

 </div>
</div>

<ul class="list-group">
    <div class="list-group-item disabled">  Comments :</div>
  <?php foreach($comments AS $comment): ?>
    <li class="list-group-item">
      <?php echo e($comment->content); ?>
        <?php if (isset($_SESSION['login'])) : ?>
            <a class="badge" href="deleteComment?id=<?php echo e($comment->id); ?>"> Delete Comment </a>
        <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>
<!--comment just for login-->
<?php if (isset($_SESSION['login'])) : ?>

    <form method="post" action="show?id=<?php echo e($post['id']); ?>">
        <textarea name="content" class="form-control"></textarea>
        <br />
        <input type="submit" value="Kommentar hinzufügen" class="btn btn-primary" />
    </form>
    <!--comment just for login-->
<?php endif; ?>


<br />
<br />
<br />

<?php include __DIR__ . "/../layout/footer.php"; ?>
