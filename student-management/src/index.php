<?php 
include 'view/form_member_view.php';
include 'view/list_member_view.php';
?>

<html>
    <body>
        <?php
            $memberObj = new MemberView();
            $memberObj->showListMember();
        ?>
    </body>
</html>