<?php include "../../controllers/HomeController.php"; ?>

<div class="workshops-container">

<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:30px;">
<h2>Workshops</h2>

<a href="../pages/workshops.php"
style="text-decoration:none;color:#472480;font-weight:bold;">
See All
</a>
</div>


<div class="workshops-grid">

<?php while($row=mysqli_fetch_assoc($results)): ?>

<div class="workshop-card">

<?php
$imageData=base64_encode($row['img']);
echo '<img src="data:image/jpeg;base64,'.$imageData.'" alt="Workshop">';
?>

<div class="card-body">

<h3><?php echo $row['name']; ?></h3>

<div class="instructor-name">
<?php echo $row['speaker_name']; ?>
</div>

<div class="time">
<?php echo date("g:i A",strtotime($row['start_time'])); ?>
-
<?php echo date("g:i A",strtotime($row['end_time'])); ?>
</div>

<div class="bottom-row">
<button onclick="location.href='../pages/workshops_details.php?id=<?php echo $row['id']; ?>'">
Details
</button>
</div>

</div>
</div>

<?php endwhile; ?>

</div>
</div>
