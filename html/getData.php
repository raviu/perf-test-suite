<?php
include('data.php');
header('Content-Type: application/json');
$w = $_GET['wrk'];
$c = $_GET['conc'];
$ser = $_GET['server'];
$samp = array(1, 2, 3);
$data = array();

foreach ($samp as $s) {
//  echo "Collating data from results/$ser/$w-workers/AB-".$c."C-$s.txt";
  $df = new DataFile($ser, "results/$ser/$w-workers/AB-".$c."C-$s.txt");
  if ($df->getTPS() != null) {
    array_push($data, $df);
  }
}

echo json_encode($data);

?>
