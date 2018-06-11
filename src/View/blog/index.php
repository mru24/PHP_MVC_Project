<div class="col mt-5">
  <button type="button" class="btn btn-primary" name="button">Add Post</button>
  <?php foreach ($viewmodel as $item) { ?>
  <div class="card my-4">
    <div class="card-header bg-<?php echo $item['color']; ?>">
      <h4><?php echo $item['title']; ?></h4>
    </div>
    <div class="card-body">
      <p class="card-text">
        <?php echo $item['body']; ?>
      </p>
    </div>
    <div class="card-footer">
      <p class="text-right">
        <?php echo $item['date']; ?>
      </p>
    </div>
  </div>
  <?php } ?>
</div>
