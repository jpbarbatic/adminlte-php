<div class="row">
  <div class="col">
    <div class="card mb-4">
      <div class="card-header border-0">
        <div class="d-flex justify-content-between">
            <h3 class="card-title"><?php echo $xml->channel->title ?></h3>
        </div>
      </div>
      <div class="card-body">
        <?php foreach($xml->channel->item as $item): ?>
        <div class="rss">
        <h3><?php echo $item->title ?></h3>
        <?php echo $item->description ?>
        <p><a href="<?php echo $item->link ?>">Más</a></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
