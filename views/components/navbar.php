<div class="navbar">
    <h1 class="logo" >AI EVENT.</h1>
    <?php if($navType == "home"):?>
        <a href="register.php">
        <button class="navbar-btn" >Join Event</button>
    </a>
    <?php elseif($navType == "profile-icon"): ?>
        <img src="assets/images/person-circle.png" alt="profile icon" class="profile-icon">
    <?php elseif($navType == "admin-dashboard"):?>
        <ul>
            <li><a href="#" class="workshops-tab">Workshops</a></li>
            <li><a href="#" class="visitors-tab">Visitors</a></li>
        </ul>
    <?php endif; ?>
</div>