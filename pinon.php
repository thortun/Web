<?php
system("gpio -g mode 24 out"); /* Set mode of pin 24 to OUT" */
system("gpio -g write 24 1"); /* Set the value of pin 24 to 1 */
?>
