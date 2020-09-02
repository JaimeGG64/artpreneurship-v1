<?php

$style = "";
$classes = "";
$eventCount = 0;

$repeater = $p['upcoming_events_container'];

$sorted = array();

function formatTimeStamp($CMSDateAndTime) {
    $getDate = substr($CMSDateAndTime, 0, 10);
    $unixDateStamp = strtotime($getDate);
    $formatDate = date("M j, Y", $unixDateStamp);

    $getTime = substr($CMSDateAndTime, 10);
    $unixTimeStamp = strtotime($getTime);
	$formatTime = date("h:ia", $unixTimeStamp);
	
    return '<span class="event-info__timestamp-date">' . $formatDate . '</span>' .
            '<span class="event-info__timestamp-time">' . $formatTime . '</span>'; 
}

foreach ($repeater as $i => $sortBy) {
    $sorted[$i] = $sortBy['event_timestamp'];
}
array_multisort($sorted, SORT_REGULAR, $repeater);
?>

<section id="upcoming-events-li" class="upcoming-event">
    <h2 class="upcoming-event__heading">Upcoming Activities, Events, and Courses</h2>
    <?php if ($repeater) : ?>
        <dl class="event-wrapper__event-list">
            <?php foreach ($repeater as $i => $display) : ?>
                <?php if (date('Y-m-d') <= $display['event_timestamp']) : ?>
                    <div class="event-info">
                        <dt class="event-info__name"><?php echo $display['event_name']; ?></dt>
                        <dd class="event-info__description"><?php echo $display['event_description']; ?></dd>
                        <div class="event-info__timestamp"><?php echo formatTimeStamp($display['event_timestamp']); ?></div>
                        <a class="event-info__button" href="<?php echo $display['event_link']; ?>">Sign up</a>
                    </div>
                <?php endif; ?> 
            <?php endforeach; ?>
        </dl>
    <?php endif; ?> 

</section>