<div class="course-card grid-item">
            <div class="course-card__header center-vertical bgrd-<?php echo $courseColor?>">
                <div class="course-card__header-content">
                    <p class="course_card__header-text"><?php echo $courseProjects?> Projects</p>
                    <p class="course_card__header-text"><i class="fas fa-stopwatch">&nbsp;&nbsp;</i><?php echo $courseHours?> Hours</p>
                </div>
            </div>
            <!-- <div class="badge-placeholder"></div> -->
            <div class="badge-container"><img class="badge" src="./data/ALG100-course.png" /></div>
            <div class="card-body">
                <div class="card-body__contents">
                    <div class="card-text">
                        <h3 class="course-title font-bold"><?php echo $courseTitle?></h3>
                        <p class="course-description font-light"><?php echo $courseDescription?></p>
                        <h6 class="learn-how-to font-bold">You will learn how to:</h6>
                        <div class="list-height">
                            <ul class="course-objectives fa-ul">
                                <li class="course-objective font-light"><span class="fa-li"><i class="fas fa-check green"></i></span><?php echo $courseObjective?></li>
                                <li class="course-objective font-light"><span class="fa-li"><i class="fas fa-check green"></i></span><?php echo $courseObjective2?></li>
                                <li class="course-objective font-light"><span class="fa-li"><i class="fas fa-check green"></i></span><?php echo $courseObjective?></li>

                            </ul>
                        </div>
                    </div>
                    <div class="center-horizontal course-pin-bottom">
                        <buttton class="course-button uppercase pointer bgrd-<?php echo $courseColor?> hover-<?php echo $courseColor?> border-<?php echo $courseColor?>"><?php echo $courseButtonText?>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>