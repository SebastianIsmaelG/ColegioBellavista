<?php
echo "<div class='container'>
  <div class='row'>
    <div div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 custom-actividad'>
      <div class='container-fluid'>
        <div class='box_container border-activity text-center font-weight-bold'>
          <p>$setnombre</p>
        </div>
      </div>
    </div>
    <div div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 custom-actividad'>
      <div class='container-fluid'>
        <div class='box_container border-activity text-center font-weight-bold'>
          <p>"; echo strftime("%d de %B del %Y", strtotime($setfecha)); echo"</p>
        </div>
      </div>
    </div>
  </div>
</div>";
 ?>
