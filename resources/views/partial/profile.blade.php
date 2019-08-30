<?php function yesNo(&$value){
    $value = $value == true ? 'Yes' : 'No';
    echo $value;
}?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:history.back()">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile</li>
  </ol>
</nav>
<div class="row">
  <div class="col">
    <div class="card shadow border-0 w-100 h-100">
      <div class="card-header">
        <h3>{{ $selected->name }} Profile</h3>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><p><b>Name: </b></p>{{ $selected->name }}</li>
          <li class="list-group-item"><p><b>Type: </b></p>{{ $selected->type }}</li>
          <li class="list-group-item"><p><b>Last Name: </b></p>{{ $selected->last_name }}</li>
          <li class="list-group-item"><p><b>First Name: </b></p>{{ $selected->first_name }}</li>
          <li class="list-group-item"><p><b>Location: </b></p>{{ $selected->residences }}</li>
          <li class="list-group-item"><p><b>Title: </b></p>{{ $selected->title }}</li>
          <li class="list-group-item"><p><b>Date of Birth: </b></p>{{ $selected->date_of_birth }}</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow border-0 w-100 h-100">
      <div class="card-header">
        <h3>{{ $selected->name }} Details</h3>
      </div>
      <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><p><b>Category: </b></p>{{ $selected->category }}</li>
                <li class="list-group-item"><p><b>Subcategory: </b></p>{{ $selected->subcategory }}</li>
                <li class="list-group-item"><p><b>PEP: </b></p><?php yesNo($selected->PEP); ?></li>
                <li class="list-group-item"><p><b>Sanctioned: </b></p><?php yesNo($selected->SAN); ?></li>
                <li class="list-group-item"><p><b>Watchlists: </b></p>{{ $selected->lists }}</li>
                <li class="list-group-item"><p><b>Sources: </b></p><a href="{{ $selected->sources }}">{{ $selected->sources }}</a></li>
              </ul>
      </div>
    </div>
  </div>
</div>
