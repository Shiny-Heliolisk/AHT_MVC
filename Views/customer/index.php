<h1>Customer</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/AHT_MVC/customer/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new customer</a>
        <tr>
            <th>ID</th>
            <th>Customer's name</th>
            <th>Address</th>
            <th>Phone number</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        // echo 'view/index<br>';
        // var_dump($customers);
        foreach ($customers as $customer)
        {
            echo '<tr>';
            echo "<td>" . $customer->id . "</td>";
            echo "<td>" . $customer->customer_name . "</td>";
            echo "<td>" . $customer->customer_address . "</td>";
            echo "<td>" . $customer->customer_tel . "</td>";
            echo "<td class='text-center'>
            <a class='btn btn-info btn-xs' href='/AHT_MVC/customer/edit/" . $customer->id . "' >
                <span class='glyphicon glyphicon-edit'></span> Edit
            </a> 
            <a href='/AHT_MVC/customer/delete/" . $customer->id . "' class='btn btn-danger btn-xs'>
                <span class='glyphicon glyphicon-remove'></span> Del
            </a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>