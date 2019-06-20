<?php
include_once "../header.php";
?>
<script src="<?=BASE_URL?>assets/js/Chart.min.js"></script>
<script src="<?=BASE_URL?>assets/js/utils.js"></script>
<div class="alert alert-primary" role="alert">
  <?= SITE_TITLE ?>
  <div class="gotobtn">
    <a href="<?= BASE_URL ?>" class="btn btn-primary btn-sm">صفحه نخست</a>
  </div>
</div>

<div class="col col-12 m-auto">
  <div class="bg-white table-responsive">
    <table class="table table-striped col-8 m-auto">
      <thead>
        <tr>
          <th scope="col">رنگ ها</th>
          <th scope="col">تعداد</th>
        </tr>
      </thead>
      <tbody>

        <div id="canvas-holder" class="col-8 m-auto">
          <h3 class="text-center"><?=COLORS_TITLE?></h3>
          <canvas id="colorsChart"></canvas>
        </div>
        <script>
        var colorsChart = {
            type: 'pie',
            data: {
              datasets: [{
                  label: "نظر سنجی قاره ها",
                  <?php
           echo "data: [";
          foreach(COLORS_LABEL as $color){
            echo countCIC($color).",";
          }
         echo "],"; 
     echo "backgroundColor: [";
          foreach(COLORS_CODE as $color_code){
            echo "'".$color_code."',";
          }
         echo "],}],labels: [";
         foreach(COLORS_LABEL as $color_label){
           echo "'".$color_label."',";
         }
        echo "],";
        ?>
                },
                options: {
                  responsive: true
                }
              };
              var ctx = document.getElementById('colorsChart').getContext('2d');
              window.myPie = new Chart(ctx, colorsChart);
        </script>
        <?php
  
  //Get File Lines In An Array
     $lines = file(COMMENT_DB);
     if (empty($lines)) {
      echo "<tr><td colspan='4' class='text-center'><?= 'داده ای جهت نمایش وجود ندارد' ?> </td>
        </tr>";
        }else{
        foreach(COLORS_LABEL as $color){
        echo "<tr>
          <td>".$color."</td>
          <td>".countCIC($color)."</td>
        </tr>";
        }
        }
        ?>
      </tbody>
    </table>

  </div>
</div>

<hr>

<div class="col col-12 m-auto">
  <div class="bg-white table-responsive">
    <table class="table table-striped col-8 m-auto">
      <thead>
        <tr>
          <th scope="col">قاره ها</th>
          <th scope="col">تعداد</th>
        </tr>
      </thead>
      <tbody>

        <div id="canvas-holder" class="col-8 m-auto">
          <h3 class="text-center"><?=CONTINENT_TITLE?></h3>
          <canvas id="continentChart"></canvas>
        </div>
        <script>
        var canvas = document.getElementById('continentChart');
        var data = {

          <?php echo "labels: [";
         foreach (CONTINENT_LABEL as $color_label) {
             echo "'".$color_label."',";
         }
         echo "],";
         ?>
          datasets: [{
            label: '',
            <?php echo "backgroundColor: [";
          foreach(COLORS_CODE as $color_code){
            echo "'".$color_code."',";
          }
         echo "],";?>
            <?php
           echo "data: [";
          foreach(CONTINENT_LABEL as $color){
            echo countCIC($color).",";
          }
          echo "]";
          ?>
          }]
        };
        var option = {
          scales: {
            yAxes: [{
              stacked: true,
            }],
          }
        };

        var myBarChart = Chart.Bar(canvas, {
          data: data,
          options: option
        });
        </script>
        <?php
  
  //Get File Lines In An Array
     $lines = file(COMMENT_DB);
     if (empty($lines)) {
      echo "<tr><td colspan='4' class='text-center'><?= 'داده ای جهت نمایش وجود ندارد' ?> </td>
        </tr>";
        }else{
        foreach(CONTINENT_LABEL as $continent){
        echo "<tr>
          <td>".$continent."</td>
          <td>".countCIC($continent)."</td>
        </tr>";
        }
        }
        ?>

      </tbody>
    </table>

  </div>
</div>
<?php include '../footer.php'; ?>