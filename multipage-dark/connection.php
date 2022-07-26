<?php
$conn = new mysqli('localhost', 'root', '', 'nora');
$general = $conn->query("SELECT * FROM general");
$message = $conn->query("SELECT * FROM user");
$slider = $conn->query("SELECT * FROM slider WHERE status='active'");
$service = $conn->query("SELECT * FROM service WHERE status='active'");
$blog = $conn->query("SELECT blog.*,blog_category.blog_category,blog_category.category_name FROM blog JOIN blog_category ON blog.blog_category_id=blog_category.id");
$project = $conn->query("SELECT projects.*,project_category.title as c_title,project_category.c_name,project_photo.photo as p_photo from projects JOIN project_category ON projects.category_id=project_category.id join project_photo on project_photo.project_id=projects.id where status='active' limit 4");
$team = $conn->query("SELECT team.*,department.department_name from team join department on team.department_id=department.id limit 6");
$project_1 = $conn->query("SELECT projects.*,project_category.title as c_title,project_category.c_name, project_category.short_details from projects join project_category on projects.category_id=project_category.id limit 4");
$project_photo = $conn->query("SELECT * FROM project_photo_view limit 5");
$p = $conn->query("SELECT * FROM project_photo limit 6");
$price = $conn->query("SELECT * FROM price");
$process = $conn->query("SELECT * FROM process");
