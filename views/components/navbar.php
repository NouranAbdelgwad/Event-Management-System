<div class="navbar">
    <a href="home.php">
    <h1 class="nav-logo" >AI EVENT.</h1>
    </a>
    <?php if($navType == "home"):?>
        <a href="register.php">
        <button class="navbar-btn" >Join Event</button>
    </a>
    <?php elseif($navType == "profile-icon"): ?>
        <a href="profile.php"><img src="../../assets/images/person-circle.png" alt="profile icon" class="profile-icon"></a>
    <?php elseif($navType == "admin-dashboard"):?>
        <ul>
            <li><a href="admin_workshops.php" class="workshops-tab">Workshops</a></li>
            <li><a href="admin_visitors.php" class="visitors-tab">Visitors</a></li>
        </ul>
    <?php endif; ?>
</div>