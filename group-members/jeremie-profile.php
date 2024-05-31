<?php
$name = "Marie Jeremie Legrama";
$previewName = "MARIE JEREMIE LEGRAMA";
$bio = "Hi blog! Welcome to my guys!";
$address = "Brgy. Labas, City of Sta. Rosa Laguna";
$email = "jeremielegrama@gmail.com";
$contact = "09XX-XXX-XXXX";
$height = 157;
$weight = 50;
$birthdate = "July 04, 2003";
$currentDate = date("y-m-d");
$age = date_diff(date_create($birthdate), date_create($currentDate))->y;

$birthplace = "Biñan, Laguna";
$citizenship = "Filipino";
$religion = "Roman Catholic";
$educationalAttainment = [
  'gradeSchool' => 'St. Judiel Learning Center',
  'juniorHS' => 'Holy Rosary College',
  'seniorHS' => 'Holy Rosary College'
];
?>

<div class="preview legrama">
    <img src="images/Jeremie.png" class="img-fluid" alt="me">
    <div class="preview-details">
      <h4><?php echo $previewName; ?></h4>
      <p><em><?php echo $bio; ?></em></p>
      <p><em><u>Click to view details...</em></u></p>
    </div>  
</div>

<div class="detailed-info legrama hidden">
  <!-- ======= Portfolio Section ======= -->
  <section id="legrama_portfolio" class="legrama_portfolio">
    <div class="row">
      <div class="col-lg-6">
        <!-- Left Column -->
        <h3 class="portfolio-title">Personal Information</h3>
        <div class="portfolio-item pb-0">
        <img src="images/Jeremie.png" class="img-fluid" alt="me" style="width: 40%; height: 40%;">        

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
          <p><em>Barangay Kanluran, City of Santa Rosa, Laguna</em></p>
          <p></p>
        </div>
        <div class="portfolio-item">
          <h4><?php echo $educationalAttainment['juniorHS']; ?></h4>
          <h5></h5>
          <p><em>Barangay Tagapo, City of Santa Rosa, Laguna</em></p>
          <p></p>
        </div>
        <div class="portfolio-item">
          <h4><?php echo $educationalAttainment['seniorHS']; ?></h4>
          <h5></h5>
          <p><em>Barangay Tagapo, City of Biñan, Laguna</em></p>
          <p></p>
        </div>
      </div>
    </div>
  </section>

  <p class="hide-details-link legrama" onclick="toggleDetailsLegrama()">Click to hide details...</p>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        var legramaPreview = document.querySelector('.preview.legrama');
        var legramaDetails = document.querySelector('.detailed-info.legrama');

        legramaPreview.addEventListener('click', function () {
            legramaPreview.style.display = 'none';
            legramaDetails.style.display = 'block';
        });

        document.querySelector('.hide-details-link.legrama').addEventListener('click', function () {
            legramaDetails.style.display = 'none';
            legramaPreview.style.display = 'flex';
        });
    });
  </script>
</div>
