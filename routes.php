<?php
$controllers = array(
  'chat' => ['chat', 'error']
); // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.

// Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
// thì trang báo lỗi sẽ được gọi ra.
// if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
//   $controller = 'pages';
//   $action = 'error';
// }
// Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
$include_file = 'controllers/chat_controller.php';
include_once($include_file);

// Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.
 $klass = str_replace('_', '', ucwords('chat_')) . 'Controller';
//  $controller = new $klass;
$controller = new ChatController();
 // $controller->$action();

  $controller->home();