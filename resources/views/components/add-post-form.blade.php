<!-- add-post-form.blade.php -->
<div class="mt-4">
    <h4>Add Post:</h4>
    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('store-form') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
