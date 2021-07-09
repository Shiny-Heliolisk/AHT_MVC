<h1>Edit Customer</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="customer_name" placeholder="Enter a name" name="customer_name" value ="<?php if (isset($customers["customer_name"])) echo $customers["customer_name"];?>">
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="customer_address" placeholder="Enter a address" name="customer_address" value ="<?php if (isset($customers["customer_address"])) echo $customers["customer_address"];?>">
    </div>

    <div class="form-group">
        <label for="address">Phone number</label>
        <input type="text" class="form-control" id="customer_tel" placeholder="Enter a Phone number" name="customer_tel" value ="<?php if (isset($customers["customer_tel"])) echo $customers["customer_tel"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>