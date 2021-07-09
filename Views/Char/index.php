<h1>Character</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/Char/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new character</a>
        <tr>
            <th>ID</th>
            <th>Character's Name</th>
            <th>Type</th>
            <th>Damage</th>
            <th>HP</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        // echo 'view/index<br>';
        // var_dump($character);die;
        foreach ($character as $char)
        {

            echo '<tr>';
            echo "<td>" . $char->id . "</td>";
            echo "<td>" . $char->name . "</td>";
            echo "<td>" . $char->type . "</td>";
            echo "<td class='text-center'>
            <a class='btn btn-info btn-xs' href='/mvc/character/edit/" . $char->id . "' >
                <span class='glyphicon glyphicon-edit'></span> Edit
            </a> 
            <a href='/mvc/character/delete/" . $char->id . "' class='btn btn-danger btn-xs'>
                <span class='glyphicon glyphicon-remove'></span> Del
            </a>
            </td>";
            echo "</tr>";
        
        }
        ?>
    </table>
</div>