<div class="col-md-4 mb-4">
@isset($entities)
<div class="card shadow border-0 h-100">
  <div class="card-body">
    <h3>Results</h3>
    <ul class="list-group list-group-flush">
      @foreach ($entities as $entity)
        <li class="list-group-item">
          <a href="entity/<?php echo $entity['id'];?>">
          <?php echo $entity['name']; ?>
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</div>
@endisset
</div>
