<?php include "../../controllers/HomeController.php"; ?>

<style>
.workshops-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
}

.workshop-card{
background:#fff;
border-radius:15px;
overflow:hidden;
box-shadow:0 4px 12px rgba(0,0,0,.08);
}

.workshop-card img{
width:100%;
height:180px;
object-fit:cover;
}

.card-body{
padding:18px;
}

.bottom-row{
margin-top:15px;
}

.bottom-row button{
background:#472480;
color:white;
border:none;
padding:8px 20px;
border-radius:18px;
}
</style>

<div class="workshops-container">


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
