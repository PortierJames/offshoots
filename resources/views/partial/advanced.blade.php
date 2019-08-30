<div class="col-md-4 mb-4">
<div class="card shadow border-0 h-100">
  <div class="card-body">
    <h3>Advanced Search</h3>
    <form action="{{ route('advanced_search') }}" method="POST" role="search">
      {{ csrf_field() }}
      <div class="input-group">
        <label for="cn_comp_iot" class="labelBold">Search</label>
        <input type="text" class="form-control" name="q" placeholder="Search entities">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">Search</button>
          </span>
        <label for="adv-search" class="labelBold">Search</label>
        <input type="text" id="adv-search" class="form-control" name="q" placeholder="Search entities">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">Search</button>
          </span>
      </div>
    </form>
  </div>
</div>
</div>
