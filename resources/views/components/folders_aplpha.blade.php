<div>
    <form action="/createFolder" method="post" class="form-group py-3">
        @csrf
        @method("POST")
        <input type="text" name='folder_name' placeholder="enter folder name" class="form-control mb-3">
        <button type="submit" class="btn btn-primary">Create folder</button>
    </form>

    
    <form action="/updatefolderLink"></form>
</div>