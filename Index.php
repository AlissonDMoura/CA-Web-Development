<?php include('include/header.php');?>
<!--apply my head -->

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>Objective</h2>
            <p>This CA was developed based in a Bootstrap code<br>
               Used in class in order to introduce the students<br>
               some features like implementation of pages into<br>
               other php pages by using  the 'include' feature<br>
               and implementation of arrays in php and forms to<br>
               Use it's functions properly.<br>
               Please feel free to navigate and explore my Website</p>
      <!-- short explanation of the CA and some other information to fill the page.-->
               <h3>You are on the active link</h3>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href= "Index.php" > Home</a></li>
        <li><a href= "ArrayTable.php" >Array table page</a></li>
        <li><a href="PhpForms.php">Php Forms</a></li>
        </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>

    <!-- This works like a menu and inform the user in what page he/she is in the moment -->


        
    <div class="col-sm-8">
      <h2>General information about Alisson</h2>

      <table class="table">
  <thead>
    <tr>
      <th scope="col"> </th>
      <th scope="col">Name</th>
      <th scope="col">Student Number</th>
      <th scope="col">Course</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>Alisson Moura</td>
      <td>2019142</td>
      <td>BSc in IT - Web Development</td>
    </tr>
      </tbody>
</table>
      <h3>More information about the Student</h3>
      <div class="container">
      
           <p>
              I have studied many different courses to enhance my different skills <br>
              Business, Web Design, Mechatronic Engeneering and now I Study IT <br>
              My objective is to use all my developed skills in a single work environment<br>
              Where my single set of knowledge can be used at maximun efficiency.
          </p>

      </div>
      
      <br>
      <h2>Should I Show you a Image?</h2>
      <h5> It's easy, you just have to refer it a link inside or outside you host, and place it down here</h5>
      <div class="fakeimg"> Here I'd show a image, but I decided not to. As I've done it in other assessments. </div>
      
    </div>
  </div>
</div>

<?php include('include/footer.php');?>
<!--apply my footer -->
</body>
</html>