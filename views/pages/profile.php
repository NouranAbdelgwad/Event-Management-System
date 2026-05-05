<!DOCTYPE html>
<html lang="ar" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Event - Profile</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>

    <div class="container">
        <?php
        $navType = "profile-icon";
        include "../components/navbar.php" ?>

        <main class="profile-section">
            <?php
            include("../../config/db_connection.php");
            include("../../controllers/ProfileController.php");
            $user_id = $_SESSION['user']['id'];
            $sql = "SELECT * FROM user WHERE id = $user_id";
            $result = mysqli_query($connection, $sql);
            $user = mysqli_fetch_assoc($result);
            ?>
            <section class="info-card">
                <h2>My Information</h2>
                <form class="inputs-grid" action="../../controllers/ProfileController.php" method="POST">
                    <div class="input-group">
                        <input type="text" name="full_name" value="<?php echo $user['name']; ?>">
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" value="<?php echo $user['email']; ?>">
                    </div>
                    <button class="edit-btn" type="submit" name="update_profile">Update Profile</button>
                </form>
                <br>
                <a href="../../controllers/logoutController.php">Log Out</a>
            </section>
            <section class="workshops-list">
                <h2>My Workshops</h2>
                <?php if (mysqli_num_rows($workshops_result) > 0): ?>
                    <?php while ($workshop = mysqli_fetch_assoc($workshops_result)): ?>
                        <div class="workshop-item">
                            <div class="workshop-img">
                                <?php
                                $imageData = base64_encode($workshop['img']);
                                echo '<img src="data:image/jpeg;base64,' . $imageData . '" alt="Workshop">';
                                ?>
                            </div>
                            <div class="workshop-details">
                                <h3><?php echo $workshop['name']; ?></h3>
                                <p>Speaker ID: <?php echo $workshop['speaker_id']; ?></p>
                                <span>🕒 <?php echo $workshop['start_time']; ?> - <?php echo $workshop['end_time']; ?></span>
                            </div>
                            <div class="workshop-actions">
                                <button class="details-btn" onclick="location.href='workshops_details.php?id=<?php echo $workshop['id']; ?>'">
                                    Details
                                </button>
                                <form action="../../controllers/CancelWorkshopController.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="workshop_id" value="<?php echo $workshop['id']; ?>">
                                    <button type="submit" name="cancel_event" class="cancel-btn" onclick="return confirm('Are you sure you want to cancel this workshop?')">
                                        Cancel
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>You haven't joined any workshops yet.</p>
                <?php endif; ?>
            </section>
        </main>
        <footer class="footer">
            <p>© 2026 AI Event Platform. All rights reserved.</p>
        </footer>
    </div>

</body>

</html>