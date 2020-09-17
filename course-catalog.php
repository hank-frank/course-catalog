<?php
    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);

        echo "<script>console.log('Debug Message: " . $output . "' );</script>";
    } 
?>

<?php debug_to_console("test message"); ?>

<div class="course-card">
    <div class="course-card__header"> 

    </div>
    
</div>