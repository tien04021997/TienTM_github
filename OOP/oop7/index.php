<?php

/**
 * Nạp 2 file chứa class category vào
 * Namespace áp dụng để giải quyết vấn đề trùng tên class hay trung tên hàm
 */

include "app/backend/category.php";
include "app/frontend/category.php";

/**
 * Cách số 1 khi khởi tạo thì phải khởi tạo class có đầy đủ namespace
 */

$category1 = new Frontend\Category();

$category2 = new Backend\Category();