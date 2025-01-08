<?php
require_once "config.php";
require_once "handle.php";

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uriParts = explode('/', trim($requestUri, '/'));
$endpoint = end($uriParts); 



$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);


switch ($endpoint) {
    case 'users':
        handleUsers($method, $input, $pdo);
        break;
    case 'products':
        handleProducts($method, $input, $pdo);
        break;
    case 'category':
        handlecategory($method, $input, $pdo);
        break;
    case 'categoryProducts':
        handlecategoryproducts($method, $input, $pdo);
        break;
    case 'logout':
        handlelogout();
        break;
    case 'cart':
            handlecart($method, $input, $pdo);
            break;
    case 'order':
            handleOrder($method, $input, $pdo);
            break;
    case 'wishlist':
            handleWishList($method, $input, $pdo);
            break;
    default:
        http_response_code(404);
        echo json_encode(['error' => 'Endpoint not found']);
        break;
}
?>
