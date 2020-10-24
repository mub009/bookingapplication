<option value=''>Select Your Area</option>

<?php

if(!empty($ajax))
{
foreach($ajax as $row)
 {
?>

<option value='<?=$row['areaId']?>'><?=$row['areaName']?></option>

<?php
  }

}

?>