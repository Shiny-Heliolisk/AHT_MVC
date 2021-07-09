<h1>Edit Character</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Character's Name</label>
        <input type="text" class="form-control" id="title" placeholder="Enter a name" name="name" value ="<?php if (isset($task["name"])) echo $task["name"];?>">
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a type" name="description" value ="<?php if (isset($task["type"])) echo $task["type"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>