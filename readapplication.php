<?php
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'test');

if(!empty($_POST["keyword"])) {
$query ="SELECT applicationId FROM student_dbs WHERE applicationId like '" . $_POST["keyword"] . "%' ";
$result = mysqli_query($link, $query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $application) {
?>
<li onClick="selectCountry('<?php echo $application["applicationId"]; ?>');"><?php echo $application["applicationId"]; ?></li>
<?php } ?>
</ul>
<?php } } 

    ?>