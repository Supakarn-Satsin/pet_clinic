<?php
include "app/config.php";
include "app/helpers.php";
checkLogin();
include "templates/navbar.php";
?>

<div class="dashboard-card card" style="text-align:center; margin-top:50px; padding:40px;">
    <h1>ยินดีต้อนรับสู่ระบบคลินิกสัตว์</h1>
    <p style="margin-bottom:30px; color:#555;">คุณสามารถจองคิวหมอสำหรับสัตว์เลี้ยงของคุณได้ที่นี่</p>
    
    <a href="appointments_add.php" class="btn btn-primary" style="font-size:20px; padding:15px 40px; border-radius:12px; box-shadow:0 6px 15px rgba(0,0,0,0.1);">
        🩺 จองคิวหมอ
    </a>
</div>

<?php include "templates/footer.php"; ?>
