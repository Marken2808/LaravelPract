<?php 
include 'view/form_member_view.php';
include 'view/list_member_view.php';
    $memberObj = new MemberView();
    $memberObj->showListMember();
?>