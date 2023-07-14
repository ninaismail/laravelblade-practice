<!-- search-form.blade.php -->
<form action="{{ route('search-posts') }}" method="GET" class="mb-3">
  <div class="input-group">
    <input type="text" id="searchInput" name="search" class="form-control" placeholder="Search by title" value="{{ $search }}" required>
    <div class="input-group-append">
      <button class="btn btn-primary" type="submit">Search</button>
    </div>
  </div>
</form>
