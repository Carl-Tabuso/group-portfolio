<?php

$name = "Blessed King Mendoza Redondo";
$previewName = "BLESSED KING MENDOZA REDONDO";
$bio = "......";
$address = "Brgy. Balibago, Santa Rosa Laguna";
$email = "hatdogguldo@gmail.com";
$contact = "0990 XXX  XXXX";
$height = 170.2;
$weight = 75;
$birthdate = "December 10, 1997";
$currentDate = date("Y-m-d");
$age = date_diff(date_create($birthdate), date_create($currentDate))->y;
$birthplace = "Santa Rosa, Laguna";
$citizenship = "Filipino";
$religion = "Born this way";
$educationalAttainment = [
    'gradeSchool' => 'Balibago Elementary School',
    'juniorHS' => 'Balibago Integrated High School',
    'seniorHS' => 'AITSA CABUYAO',
];
?>

<div class="preview redondo">
    <img src="images/Sed.png" class="img-fluid" alt="me">
    <div class="preview-details">
      <h4><?php echo $previewName; ?></h4>
      <p><em><?php echo $bio; ?></em></p>
      <p><em><u>Click to view details...</em></u></p>
    </div>  
</div>

<div class="detailed-info redondo hidden">
      <!-- ======= Portfolio Section ======= -->
<section id="redondo_portfolio" class="redondo_portfolio">
    <div class="row">
        <div class="col-lg-6">
            <!-- Left Column -->
            <h3 class="portfolio-title">Personal Information</h3>
            <div class="portfolio-item pb-0">
                <img src="images/Sed.png" class="img-fluid" alt="me" style="width: 40%; height: 40%;">        

            <h4><?php echo $name; ?></h4>
            <p><em><?php echo $bio; ?></em></p>
            <p>
                <ul>
                    <li><b>Address:</b> <?php echo $address; ?></li>
                    <li><b>Email:</b> <?php echo $email; ?></li>
                    <li><b>Contact:</b> <?php echo $contact; ?></li>
                    <li><b>Height:</b> <?php echo $height; ?> cm</li>
                    <li><b>Weight:</b> <?php echo $weight; ?> kg</li>
                    <li><b>Age:</b> <?php echo $age ?> years old</li>
                    <li><b>Birthplace:</b> <?php echo $birthplace; ?></li>
                    <li><b>Citizenship:</b> <?php echo $citizenship; ?></li>
                    <li><b>Religion:</b> <?php echo $religion ?></li>
                </ul>
            </p>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Right Column -->
            <h3 class="portfolio-title">Educational Attainment</h3>
            <div class="portfolio-item">
                <h4><?php echo $educationalAttainment['gradeSchool']; ?></h4>
                <h5></h5>
                <p><em>Barangay Balibago, City of Santa Rosa, Laguna</em></p>
                <p></p>
            </div>
            <div class="portfolio-item">
                <h4><?php echo $educationalAttainment['juniorHS']; ?></h4>
                <h5></h5>
                <p><em>Barangay Balibago, City of Santa Rosa, Laguna</em></p>
                <p></p>
            </div>
            <div class="portfolio-item">
                <h4><?php echo $educationalAttainment['seniorHS']; ?></h4>
                <h5></h5>
                <p><em>Poblacion Uno, Cabuyao, Laguna</em></p>
                <p></p>
            </div>
        </div>
    </div>
</section>

<p class="hide-details-link redondo" onclick="toggleDetailsRedondo()">Click to hide details...</p>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      var redondoPreview = document.querySelector('.preview.redondo');
      var redondoDetails = document.querySelector('.detailed-info.redondo');

      redondoPreview.addEventListener('click', function () {
          redondoPreview.style.display = 'none';
          redondoDetails.style.display = 'block';
      });

      document.querySelector('.hide-details-link.redondo').addEventListener('click', function () {
          redondoDetails.style.display = 'none';
          redondoPreview.style.display = 'flex';
      });
  });
</script>
</div>

