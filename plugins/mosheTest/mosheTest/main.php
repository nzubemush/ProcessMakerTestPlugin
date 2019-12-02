<?php
$G_MAIN_MENU            = 'processmaker';
$G_ID_MENU_SELECTED     = 'ID_MOSHETEST_MNU_01';
$G_PUBLISH = new Publisher;
$G_PUBLISH->AddContent('view', 'mosheTest/mainLoad');
G::RenderPage('publish');
?>