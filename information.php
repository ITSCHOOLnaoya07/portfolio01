<?php
 $test_name = filter_input(INPUT_POST,'name');
 $test_email = filter_input(INPUT_POST,'email');
 $test_example1= filter_input(INPUT_POST,'example1');
?>

<p> 氏名:<?php echo $test_name ?></p>
<p> アドレス:<?php echo $test_email ?></p>
<p>感想:<?php echo $test_example1 ?></p>