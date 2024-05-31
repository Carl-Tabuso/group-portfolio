<?php
$name = "Abegaile Rebancos Vicuña";
$previewName = "ABEGAILE REBANCOS VICUÑA";
$bio = "A third year student, taking the Bachelor of Science in Information Technology program at the Polytechnic University of the Philippines Santa Rosa Branch.";
$address = "Lakeville 2 subd., Blk 7 Lot 33, Brgy. Sinalhan City of Sta. Rosa Laguna";
$email = "abegailevicuna@gmail.com";
$contact = "09XX-XXX-XXXX";
$height = 164;
$weight = 48;
$birthdate = "November 14, 2003";
$currentDate = date("y-m-d");
$age = date_diff(date_create($birthdate), date_create($currentDate))->y;

$birthplace = "San Pablo, Laguna";
$citizenship = "Filipino";
$religion = "Roman Catholic";
$educationalAttainment = [
  'gradeSchool' => 'Caingin Elementary School',
  'juniorHS' => 'Aplaya National High School - Annex',
  'seniorHS' => 'University of Perpetual Help System Laguna'
];

$educAttainmentYear = [
  'gradeSchool' => '2008 - 2015',
  'juniorHS' => '2015 - 2019',
  'seniorHS' => '2019 - 2021'
];
?>

<div class="preview abegaile">
    <img src="images/Abegaile.png" class="img-fluid" alt="me">
    <div class="preview-details">
      <h4><?php echo $previewName; ?></h4>
      <p><em><?php echo $bio; ?></em></p>
      <p><em><u>Click to view details...</em></u></p>
    </div>   
</div>

<div class="detailed-info abegaile hidden">
  <!-- ======= Portfolio Section ======= -->
  <section id="vicuna_portfolio" class="vicuna_portfolio">
    <div class="row">
        <div class="col-lg-6">
            <!-- Left Column -->
            <h3 class="portfolio-title">Personal Information</h3>
            <div class="portfolio-item pb-0">
                <img src="images/Abegaile.png" class="img-fluid" alt="me" style="width: 40%; height: 40%;">        

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
                <p><em>Barangay Caingin, City of Santa Rosa, Laguna</em></p>
                <p>Graduated as the 1st Honorable mention.</p>
            </div>
            <div class="portfolio-item">
                <h4><?php echo $educationalAttainment['juniorHS']; ?></h4>
                <h5><?php echo $educAttainmentYear['juniorHS']; ?></h5>
                <p><em>Barangay Market Area, City of Santa Rosa, Laguna</em></p>
                <p>Moved up with high honors.</p>
            </div>
            <div class="portfolio-item">
                <h4><?php echo $educationalAttainment['seniorHS']; ?></h4>
                <h5><?php echo $educAttainmentYear['seniorHS']; ?></h5>
                <p><em>Barangay Santo Niño, City of Biñan, Laguna</em></p>
                <p>Graduated with high honors.</p>
            </div>
        </div>
    </div>
  </section>

  <p class="hide-details-link abegaile" onclick="toggleDetailsAbegaile()">Click to hide details...</p>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        var abegailePreview = document.querySelector('.preview.abegaile');
        var abegaileDetails = document.querySelector('.detailed-info.abegaile');

        abegailePreview.addEventListener('click', function () {
            abegailePreview.style.display = 'none';
            abegaileDetails.style.display = 'block';
        });

        document.querySelector('.hide-details-link.abegaile').addEventListener('click', function () {
            abegaileDetails.style.display = 'none';
            abegailePreview.style.display = 'flex';
        });
    });
  </script>

</div>
