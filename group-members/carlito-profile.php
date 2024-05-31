<?php
$name = "Carl Francisco Tabuso";
$previewName = "CARL FRANCISCO TABUSO";
$bio = "我有自己的原則，我不想一輩子被踩到，”剪輯中的動畫角色說。 你以為我係個嘅街頭小販？ 我有等三年，只係為咗一個機會。 我必須證明自己，而唔係炫耀，奪回屬於我嘅嘢。
";
$address = "Yeager's House, Wall Maria Street, Shiganshina District";
$email = "carlito69@gmail.com";
$contact = "09XX-XXX-XXXX";
$height = 170;
$weight = 59;
$birthdate = "February 31, 2003";
$currentDate = date("Y-m-d");
$age = date_diff(date_create($birthdate), date_create($currentDate))->y;

$birthplace = "Sta. Cruz, Manila";
$citizenship = "Filipino";
$religion = "Saksi ni Java";
$educationalAttainment = [
    'gradeSchool' => 'Malitlit Elementary School',
    'juniorHS' => 'Pulong Santa Cruz National High School',
    'seniorHS' => 'Green Fields Integrated School of Laguna, Inc.',
];

$educAttainmentYear = [
  'gradeSchool' => '2015 - 2008',
  'juniorHS' => '2019 - 2015',
  'seniorHS' => '2021-  2019'
];
?>

<div class="preview tabuso">
    <img src="images/Carl.png" class="img-fluid" alt="me">
    <div class="preview-details">
      <h4><?php echo $previewName; ?></h4>
      <p><em><?php echo $bio; ?></em></p>
      <p><em><u>Click to view details...</em></u></p>
    </div>  
</div>

<div class="detailed-info tabuso hidden">
    <!-- ======= Portfolio Section ======= -->
    <section id="tabuso_portfolio" class="tabuso_portfolio">
        <div class="row">
            <div class="col-lg-6">
                <!-- Left Column -->
                <h3 class="portfolio-title">Personal Information</h3>
                <div class="portfolio-item pb-0">
                    <img src="images/Carl.png" class="img-fluid tabuso" alt="me" style="width: 40%; height: 40%;">        

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
                    <p><em>Malitlit, City of Santa Rosa, Laguna</em></p>
                    <p></p>
                </div>
                <div class="portfolio-item">
                    <h4><?php echo $educationalAttainment['juniorHS']; ?></h4>
                    <h5><?php echo $educAttainmentYear['juniorHS']; ?></h5>
                    <p><em>Barangay Pulong Santa Cruz, City of Santa Rosa, Laguna</em></p>
                    <p></p>
                </div>
                <div class="portfolio-item">
                    <h4><?php echo $educationalAttainment['seniorHS']; ?></h4>
                    <h5><?php echo $educAttainmentYear['seniorHS']; ?></h5>
                    <p><em>Barangay Dita, City of Santa Rosa, Laguna</em></p>
                    <p></p>
                </div>
            </div>  
        </div>
    </section>

    <p class="hide-details-link tabuso" onclick="toggleDetailsTabuso()">Click to hide details...</p>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var tabusoPreview = document.querySelector('.preview.tabuso');
        var tabusoDetails = document.querySelector('.detailed-info.tabuso');

        tabusoPreview.addEventListener('click', function () {
            tabusoPreview.style.display = 'none';
            tabusoDetails.style.display = 'block';
        });

        document.querySelector('.hide-details-link.tabuso').addEventListener('click', function () {
            tabusoDetails.style.display = 'none';
            tabusoPreview.style.display = 'flex';
        });
    });
  </script>

</div>