<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDev Group Portfolio</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="header">
        <h1>GROUP PORTFOLIO</h1>
        <p>Web Development</p>
    </div>

    <?php

    //retrieves all php files under the directory named 'group-members' indicated by '*'
    //assigns the retrieved php files to $project variable
    $projects = glob('group-members/*.php');

    //loops through every php files stored in $projects variable
    //assigns each file to a new variable called $members
    foreach ($projects as $index => $members) {
        $accordionClass = 'member-accordion-' . ($index + 1);
        $dividerClass = 'member-divider-' . ($index + 1);
        echo '<section class="accordion ' . $accordionClass . '">';
        
        //include statement is used to display every fetched php files for each iteration
        include $members;
        echo '<hr class="divider ' . $dividerClass . '">';
        echo '</section>';
    }
    ?>       

    <footer>    
        <p>&copy; 2024 Group Portfolio</p>
    </footer>
    <script>        
        document.addEventListener('DOMContentLoaded', function () {
            var accordions = document.querySelectorAll('.accordion');
            var footer = document.querySelector('footer');

            accordions.forEach(function (accordion) {
                accordion.addEventListener('click', function () {
                    var detailedInfo = this.querySelector('.detailed-info');
                    detailedInfo.classList.toggle('hidden');
                });
            });

            //yawascript para sa footer position
            window.addEventListener('scroll', function () {
                var scrolledToBottom = window.innerHeight + window.scrollY >= document.body.offsetHeight;

                if (scrolledToBottom) {
                    footer.style.display = 'block';
                } else {
                    footer.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>