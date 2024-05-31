<?php

$name = "Rhey Yuri Beato Dator";
$previewName = "RHEY YURI BEATO DATOR";
$bio = ".........";
$address = "Aplaya, Santa Rosa Laguna";
$email = "datorrheyyuri01@gmail.com.com";
$contact = "0961 XXX  XXXX";
$height = 162;
$weight = 47;
$birthdate = "Jan 01, 2003";
$currentDate = date("Y-m-d");
$age = date_diff(date_create($birthdate), date_create($currentDate))->y;
$birthplace = "Aplaya, Santa Rosa Laguna";
$citizenship = "Filipino";
$religion = "Bible Baptist";
$educationalAttainment = [
    'gradeSchool' => 'Sinalhan Elementary School',
    'juniorHS' => 'Aplaya National High School',
    'seniorHS' => 'Aplaya Senior High School',
];

$educAttainmentYear = [
    'gradeSchool' => '2008 - 2015',
    'juniorHS' => '2015 - 2019',
    'seniorHS' => '2019 - 2021'
];
?>

<div class="preview dator">
    <img src="images/Yuri.png" class="img-fluid" alt="me">
    <div class="preview-details">
      <h4><?php echo $previewName; ?></h4>
      <p><em><?php echo $bio; ?></em></p>
      <p><em><u>Click to view details...</em></u></p>
    </div>  
</div>

<div class="detailed-info dator hidden">
    <!-- ======= Portfolio Section ======= -->
<section id="dator_portfolio" class="dator_portfolio">
    <div class="row">
        <div class="col-lg-6">
            <!-- Left Column -->
            <h3 class="portfolio-title">Personal Information</h3>
            <div class="portfolio-item pb-0">
                <img src="images/Yuri.png" class="img-fluid" alt="me" style="width: 40%; height: 40%;">        

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
                <h5><?php echo $educAttainmentYear['gradeSchool']; ?></h5>
                <p><em>Barangay Sinalhan, City of Santa Rosa, Laguna</em></p>
                <p></p>
            </div>
            <div class="portfolio-item">
                <h4><?php echo $educationalAttainment['juniorHS']; ?></h4>
                <h5><?php echo $educAttainmentYear['juniorHS']; ?></h5>
                <p><em>Barangay Aplaya, City of Santa Rosa, Laguna</em></p>
                <p></p>
            </div>
            <div class="portfolio-item">
                <h4><?php echo $educationalAttainment['seniorHS']; ?></h4>
                <h5><?php echo $educAttainmentYear['seniorHS']; ?></h5>
                <p><em>Barangay Aplaya, City of Santa Rosa, Laguna</em></p>
                <p></p>
            </div>
        </div>
    </div>
</section>

<p class="hide-details-link dator" onclick="toggleDetailsDator()">Click to hide details...</p>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      var datorPreview = document.querySelector('.preview.dator');
      var datorDetails = document.querySelector('.detailed-info.dator');

      datorPreview.addEventListener('click', function () {
          datorPreview.style.display = 'none';
          datorDetails.style.display = 'block';
      });

      document.querySelector('.hide-details-link.dator').addEventListener('click', function () {
          datorDetails.style.display = 'none';
          datorPreview.style.display = 'flex';
      });
  });
</script>
</div>