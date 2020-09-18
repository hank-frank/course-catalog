
<?php
    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);

        echo "<script>console.log('Debug Message: " . $output . "' );</script>";
    } 
?>

<?php debug_to_console("test message"); ?>


<?php   
    include './classes/course-class.php';
    
    $course1 = new Course();
    $course1->title = "Algorigthms 100";

    debug_to_console($course1->get_title());
?>

<?php
    $courseTitle = "Algorithhms 100";
    $courseProjects = 6;
    $courseHours = 80;
    $courseDescription = "This course blah blah blah, some description up to 4-5 lines. This course blah blah blah, some description up to 4-5 lines. This course blah blah blah, some description up to 4-5 lines. This course blah blah blah, some description up to 4-5 lines. This course blah blah blah, some description up to 4-5 lines.";
    $courseObjective = "Objective needs to be up to 2 lines. Objective needs to be up to 2 lines.";
    $courseObjective2 = "Objective needs to  ";

    $courseColor = "red";
    $courseButtonText = "Start";
    
    $addHeadline = "Headline";
    $sddSubheadline = "Subheadline";
    $addColor = "blue";
    $cta = "CTA";
?>

<div class="center-horizontal">
    <div class="courses-container grid-container">
        <!-- There will need to be a for each here -->
        <?php include './cards/course-card.php'?>
        <?php include './cards/add-card.php'?>
        <?php include './cards/course-card2.php'?>
        <?php include './cards/add-card.php'?>
        <?php include './cards/course-card.php'?>
        <?php include './cards/course-card.php'?>
        <?php include './cards/course-card.php'?>
        <?php include './cards/course-card.php'?>
        <?php include './cards/course-card.php'?>
        <?php include './cards/add-card.php'?>
        <?php include './cards/add-card.php'?>
    </div>
</div>


