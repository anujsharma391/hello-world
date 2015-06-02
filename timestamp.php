<?php
$days = 5;
$today = time();
echo date('Y-m-d',$today).'</br>';

$increase_timestamp = strtotime('+'.$days.' day', $today);
echo date('Y-m-d',$increase_timestamp).'</br>';
?>
<script>
var d = new Date(1428238970);

alert(d.getDay());
</script>