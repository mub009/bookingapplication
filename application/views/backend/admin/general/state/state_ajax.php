<option value=''>Select State</option>

<?php
if(!empty($ajax))
{
foreach($ajax as $row)
 {
?>
  <option value='<?=$row['stateId']?>'><?=$row['StateName']?></option>
<?php
  }

}

?>