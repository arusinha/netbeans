<?php
$test = "this is a test";
if ($test) {
    // nested if
    if (nested()) {
?>
           <p><?php echo "This is a test" ?></p>
        <p><?php echo "This is a test" ?></p>
        <?php
// nested if
} elseif (nested2()) {
        ?>
        <p><?php echo "This is a test" ?></p>
            <p><?php echo "This is a test" ?></p>
        <?php
// nested if
} else {
        ?>
        <p><?php echo "This is a test" ?></p>
           <p><?php echo "This is a test" ?></p>
    <?php
    }
}
    ?>
