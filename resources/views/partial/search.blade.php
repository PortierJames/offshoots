<div class="col-md-4 mb-4">
<div class="card shadow border-0 h-100">
  <div class="card-body">
    <h3>Search</h3>
    <form action="{{ route('search') }}" method="POST" role="search">
      {{ csrf_field() }}
      <div class="input-group">
      <input type="text" class="form-control" name="q" placeholder="Search entities">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-primary">Search</button>
        </span>
      </div>
    </form>
  </div>
</div>
</div>
