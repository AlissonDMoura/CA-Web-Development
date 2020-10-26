<?php include('include/header.php');?>
<!--apply my head -->
<h1>PHP Form Manipulation</h1>


<div class="col-sm-4">
<h3>You are HERE</h3>
      <ul class="nav nav-pills nav-stacked">
        <li><a href= "Index.php" > Home</a></li>
        <li><a href= "ArrayTable.php" >Array table page</a></li>
        <li class="active"><a href="PhpForms.php">Php Forms</a></li>
        </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
<!-- This works like a menu and inform the user in what page he/she is in the moment -->

    <?php

    $countries = array( " "=>" ","Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
    
  // Associative array with countries and capitals

    ?>

    <h3> Write one country or Capital name</h3>

    <form method="POST" action="">
        <input name="text" type="text" />
        <input type="submit" name="submit" value="Check!"/>
        
<!-- Initialize form outside the PHP code, in order not to interfeer with the code -->
    <?php 

    $onlyCountry = array_keys($countries);
    $onlyCapital = array_values($countries);
    // Assiciative array splited into key and values respectivelly

        if(isset($_POST['submit'])){
          //Loop to avoid error when there was no submittion into the box.

  $checker = $_POST['text'];
  // Store the entered text into a variable
  $capitalPosition = array_search($checker, $countries);
 //Store the country equivalent to the $checker into a variable

  echo "<br> you entered $checker <br>";
  //inform the user a text was entered
  
    if(array_search($checker, $onlyCountry) && array_search($checker, $onlyCapital)){
      echo "$checker is A Country and also a Capital!";}
      //Loop verify wheter the text entered is a country and a capital at the same time.
      
          elseif(array_search($checker, $onlyCountry)){
          echo "$checker is a Country and Its Capital is ".$countries[$checker];}
            //Loop verify if the text entered is a Country and write It's capital

          elseif(array_search($checker, $onlyCapital)){
            echo "$checker is a Capital and Its Country is " .$capitalPosition;}
            //Loop verify if the text entered is a Capital and write it's Country

          else {
            echo "Please enter a valid Country or capital. please remember the form is case sensitive";}
            //Inform the user the text entered isn't in the database $countries.
          }
          //Loop for no submition closes.
    
    ?>

<?php include('include/footer.php');?>
<!--apply my footer -->