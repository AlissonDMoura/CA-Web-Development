<?php include('include/header.php');?>
<!--apply my head -->

<h1>Associative Array</h1>

<div class="col-sm-4">
      <h3>You are HERE</h3>
      <ul class="nav nav-pills nav-stacked">
        <li><a href= "Index.php" > Home</a></li>
        <li  class="active"><a href= "ArrayTable.php" >Array table page</a></li>
        <li><a href="PhpForms.php">Php Forms</a></li>
        </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
      </div><!-- This works like a menu and inform the user in what page he/she is in the moment -->


<div class="container">

    <div class="row">
            
      <?php

    $countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"); ?>

<!-- Associative Array created before the creation of the table -->

    <table class="table">
    
    
    <tr>
      <th scope="col"> </th>
      <th scope="col">Country</th>
      <th scope="col">Capital</th>
      </tr>
    
    <!-- The approach for this table will be using a foreach loop. for that, the only part I don't want to repeat is this part -->

    <?php foreach($countries as $name=>$capital):?>
    <!-- From here, everything written will be repeated until the line 45, when the loop closes -->
    <tr>
        <th scope="row"></th>
        <td> <?php echo ($name); ?> </td>
        <td> <?php echo ($capital); ?> </td>
    </tr>
    <!-- Basically, for each element in the array, Labels and values will be written into the possitions specified. -->
    <?php endforeach; ?>
    <!-- loop ends -->

    
      </table>
      <!-- table closes -->

 
  </div>
</div>

<?php include('include/footer.php');?>
<!--apply my footer -->

</body>
</html>