<?php
$routes = array(

    "/" => "views/employee_login.php",
    "/pass-change" => "views/passChange.php",
    "/user-login" => "views/user_login.php",

    "/Add-event-Category" => "views/admin/add_event_category.php",
    "/Add-User" => "views/admin/user_add.php",
    "/Edit-event" => "views/admin/event_edit.php",
    "/event-list" => "views/admin/event_list.php",
    "/User-list" => "views/admin/user_list.php",
    "/Category-list" => "views/admin/category_list.php",
    "/Validity-list" => "views/admin/validity_list.php",
    "/University-list" => "views/admin/university_list.php",
    "/Profile" => "views/admin/profile.php",

    "/api/event" => "controllers/event.controller.php",
    "/api/validity" => "controllers/validity.controller.php",
    "/api/user" => "controllers/user.controller.php",
    "/api/login" => "controllers/login.controller.php",
    "/api/university" => "controllers/university.controller.php",
    "/index" => "views/index.php",

);
