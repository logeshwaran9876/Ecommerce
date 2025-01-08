<?php


session_start();


function handleUsers($method, $input, $pdo) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    switch ($method) {
        case 'GET':
          
                if (isset($_GET['type']) && $_GET['type'] === 'address') {
                
                    if (isset($_SESSION['user_id'])) {
                        $id = intval($_SESSION['user_id']);
                        $stmt = $pdo->prepare(" SELECT 
                    
                        c.*,
                        ca.*,
                            s.*
                        FROM 
                            customers c
                        JOIN 
                            customer_addresses ca ON c.customer_id = ca.customer_id
                        JOIN 
                            states s ON ca.customer_address_state_id = s.state_id
                        WHERE 
                            c.customer_id =?
                        ");
                        $stmt->execute([$id]);
                        $user = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($user) {
                            echo json_encode($user);
                        } else {
                            http_response_code(404);
                            echo json_encode(['error' => 'User addresses not found']);
                        }
                    } else {
                        http_response_code(403);
                        echo json_encode(['error' => 'User not logged in']);
                    }
                    exit;
                }
                if (isset($_GET['type']) && $_GET['type'] == 'profile'){

                    if (isset($_SESSION['user_id']))
                        {
                            $id = intval($_SESSION['user_id']);
                            $stmt = $pdo->prepare(" SELECT * from customers where customer_id= ?");
                            
                            $stmt->execute([$id]);
                            $user = $stmt->fetch(PDO::FETCH_ASSOC);
                            if ($user) {
                                echo json_encode($user);
                            } else {
                                http_response_code(404);
                                echo json_encode(['error' => 'User addresses not found']);
                            }
                        } else {
                            http_response_code(403);
                            echo json_encode(['error' => 'User not logged in']);
                        }
                        exit;
                }
                if (isset($_GET['id'])) 
                {
                    $id = intval($_GET['id']);
                    $stmt = $pdo->prepare("SELECT * FROM customers WHERE customer_id = ?");
                    $stmt->execute([$id]);
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($user) {
                        echo json_encode($user);
                    } else {
                        http_response_code(404);
                        echo json_encode(['error' => 'User not found']);
                    }
                    exit;
                }
                break;

        case 'POST':
                if ($_GET['type'] && $_GET['type'] == 'editaddress')
                {
                            $customer_id=$_SESSION['user_id'];
                            $firstName=$_POST['firstName'];
                            $lastname=$_POST['lastName'];
                            $fullname=$_POST['fullName'];
                            $addressLine1=$_POST['addressLine1'];
                            $addressLine2=$_POST['addressLine2'];
                            $city=$_POST['city'];
                            $remarks=$_POST["remarks"];
                            
                            
                            $query = 'UPDATE customers SET 
                            customer_first_name= ?,
                            customer_last_name= ?
                            WHERE customer_id = ?';
                            $stmt = $pdo->prepare($query);

                            $query2 = 'UPDATE customer_addresses SET 
                            customer_address_full_name=?,
                            customer_address_city=?,
                            customer_address_postal_code=?,
                            customer_address_line1= ?,
                            customer_address_line2= ?
                            WHERE customer_id = ?'
                            ;

                            $stmt2 = $pdo->prepare($query2);
                            if ($stmt2->execute([$fullname,$city, $remarks, $addressLine1, $addressLine2, $customer_id]) && 
                            $stmt->execute([$firstName, $lastname, $customer_id])) {
                            echo json_encode(['message' => 'Success']);
                            } else {
                                echo json_encode(['message' => 'Failed to update customer address']);
                            }
                        
                            break;
                }
                if ($_GET['type'] && $_GET['type'] == 'editprofile') {
                    try {
                      
                        $pdo->beginTransaction();
                
                        $input = file_get_contents('php://input');
                        
                        $data = json_decode($input, true);
                
                        if (isset($data['customer_first_name'], $data['customer_last_name'], $data['customer_email'], $data['customer_mobile'], $data['customer_dob'], $data['customer_gender'])) {
                            $customer_id = $_SESSION['user_id']; 
                            $firstName = $data['customer_first_name'];
                            $lastName = $data['customer_last_name'];
                            $email = $data['customer_email'];
                            $mobile = $data['customer_mobile'];
                            $dob = $data['customer_dob'];
                            $gender = $data['customer_gender'];
                
                       
                            $dobDate = DateTime::createFromFormat('Y-m-d', $dob);
                            if (!$dobDate || $dobDate->format('Y-m-d') !== $dob) {
                                throw new Exception('Invalid date format. Use yyyy-mm-dd.');
                            }
                
                        
                            $query = 'UPDATE customers SET 
                                        customer_first_name = ?, 
                                        customer_last_name = ?, 
                                        customer_email = ?, 
                                        customer_mobile = ?, 
                                        customer_dob = ?, 
                                        customer_gender = ? 
                                        WHERE customer_id = ?';
                
                         
                            $stmt = $pdo->prepare($query);
                
                            if ($stmt->execute([$firstName, $lastName, $email, $mobile, $dob, $gender, $customer_id])) {
                                
                                $pdo->commit();
                                echo json_encode(['message' => 'Profile updated successfully']);
                            } else {
                                throw new Exception('Failed to execute the update query.');
                            }
                        } else {
                            throw new Exception('Missing required fields.');
                        }
                    } catch (Exception $e) {
                       
                        $pdo->rollBack();
                        echo json_encode(['message' => 'Error: ' . $e->getMessage()]);
                    }
                    break;
                }
                if (isset($_GET['type']) && $_GET['type'] === 'passupdate') {
                    $input = file_get_contents('php://input'); 
                    $data = json_decode($input, true);       
                    $user=$_SESSION["user_id"];
                    if (isset($data['password'])) {
                        $newPassword = $data['password'];
                        $pass=trim($newPassword);
                       

                        $sql="UPDATE customers SET customer_password= ? where customer_id= ?";

                        $st=$pdo->prepare($sql);

                        if ($st->execute([$pass, $user])) {
                            echo json_encode(['message' => 'Updated Success ']);
                        }
                        else{
                            echo json_encode(['error' => 'Excusion Error']);
                        }

                      
                    } else {
                        
                        echo json_encode(['error' => 'Password field is missing.']);
                        http_response_code(400); 
                    }
                    } else {
                    
                    echo json_encode(['error' => 'Invalid type parameter.']);
                    http_response_code(400);
                }
                break;
                
        case 'DELETE':
            echo json_encode(['message' => 'DELETE method not implemented yet']);
            break;

        default:
            http_response_code(405); 
            echo json_encode(['error' => 'Method Not Allowed']);
            break;
    }
}


function handleProducts($method, $input, $pdo) {
    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $stmt = $pdo->prepare("SELECT 
                    products.*,
                    product_images.product_image 
                FROM 
                    products
                LEFT JOIN 
                    product_images ON products.product_id = product_images.product_id
                WHERE 
                    products.product_id=?;  ");
                $stmt->execute([$id]);
                $product = $stmt->fetch();
                if ($product) {
                    echo json_encode($product);
                } else {
                    http_response_code(404);
                    echo json_encode(['error' => 'Product not found']);
                }
            } 
            elseif (isset($_GET['limit']) && isset($_GET['offset'])) {
                $limit = intval($_GET['limit']);
                $offset = intval($_GET['offset']);
            
                $query = 
                "SELECT products.*, categories.category_name, product_images.product_image
                    FROM products
                    LEFT JOIN categories ON products.category_id = categories.category_id
                    LEFT JOIN product_images ON products.product_id = product_images.product_id
                        LIMIT :limit OFFSET :offset";
                $stmt = $pdo->prepare($query);
            
                

                $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
                $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
            
                $stmt->execute();
                $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
                if ($categories) {
                    echo json_encode($categories);
                } else {
                    http_response_code(404);
                    echo json_encode(['error' => 'No categories found']);
                }
            }
            break;
        default:
            http_response_code(405);
            echo json_encode(['error' => 'Method Not Allowed']);
            break;
    }
}

function handlecategory($method, $input, $pdo) {
    switch ($method) {
        case 'GET':
            if (isset($_GET['id']))
             {
             
                $id = intval($_GET['id']);
                $stmt = $pdo->prepare("SELECT * FROM categories WHERE category_id = ?");
                $stmt->execute([$id]);
                $category = $stmt->fetch();
                if ($category) {
                    echo json_encode($category);
                } else {
                    http_response_code(404);
                    echo json_encode(['error' => 'Category not found']);
                }
            } elseif (isset($_GET['limit'])) {
               
                $limit = intval($_GET['limit']);

                        
                $query = "SELECT * FROM categories LIMIT :limit";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
                $stmt->execute();
                $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);


                if ($categories) {
                    echo json_encode($categories);
                } else {
                    http_response_code(404);
                    echo json_encode(['error' => 'No categories found']);
                }
            } 

            break;

        default:
            http_response_code(405);
            echo json_encode(['error' => 'Method Not Allowed']);
            break;
    }
}


function handlecategoryproducts($method, $input, $pdo){
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            
            
            $query = "
                SELECT products.*, categories.category_name, product_images.product_image
                FROM products
                LEFT JOIN categories ON products.category_id = categories.category_id
                LEFT JOIN product_images ON products.product_id = product_images.product_id
                WHERE products.category_id = :id
            ";
        
            $stmt = $pdo->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            if ($products) {
                echo json_encode($products);
            } else {
                http_response_code(404);
                echo json_encode(['error' => 'No products found for this category']);
                
            }
        }    
        else {
            http_response_code(400);
            echo json_encode(['error' => 'Category ID or limit is required']);
        }
        
        } else {
            http_response_code(405);
            echo json_encode(['error' => 'Method not allowed']);
        }
    }




function  handlelogout(){
 
    session_start();
    
  
    session_unset();
    
    
    session_destroy();
    
   
    header("Location: http://localhost/mark1/login.php");
  
    
}


function handlecart($method, $input, $pdo)
{
    $ano = $_SESSION['anonymous_user_id'] ?? random_int(100, 999);
    $_SESSION['anonymous_user_id'] = $ano;

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && !isset($_SESSION['user_id'])) {
        try {
            $sql = "
            SELECT ci.*, p.*, pi.* 
            FROM cart_items ci
            LEFT JOIN products p ON ci.product_id = p.product_id
            LEFT JOIN product_images pi ON p.product_id = pi.product_id
            WHERE ci.anonymous_user_id = :ano;
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":ano", $ano, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo json_encode($result ?: ["error" => "No products found in the cart"]);
        } catch (PDOException $e) {
            echo json_encode(["error" => "Database error: " . $e->getMessage()]);
        }
        exit;
    }

   
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_SESSION['user_id'])) {
        $product_id = $_GET['id'] ?? null;
        $quantity = $_POST['quantity'] ?? 1;
        $type = $_POST['cart_item_user_type'] ?? 1;

        if (empty($product_id) || !is_numeric($quantity) || $quantity <= 0) {
            echo json_encode(["error" => "Invalid input data"]);
            exit;
        }

        try {
            $sql = "
            INSERT INTO cart_items (product_id, cart_item_quantity, customer_id, 
            cart_item_add_time, cart_item_user_type, anonymous_user_id, cart_item_update_time)
            VALUES (:product_id, :quantity, 0, NOW(), :type, :ano, NOW())
            ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":product_id", $product_id);
            $stmt->bindParam(":quantity", $quantity);
            $stmt->bindParam(":type", $type);
            $stmt->bindParam(":ano", $ano);

            if ($stmt->execute()) {
                echo json_encode(["success" => "Product added to cart"]);
            } else {
                echo json_encode(["error" => "Failed to add product to cart"]);
            }
        } catch (PDOException $e) {
            echo json_encode(["error" => "Database error: " . $e->getMessage()]);
        }
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && !isset($_SESSION['user_id'])) {
        parse_str(file_get_contents("php://input"), $_DELETE);

        $product_id = $_DELETE['product_id'] ?? null;
        $cart_item_id = $_DELETE['cart_id'] ?? null;

        if (!$product_id || !$cart_item_id) {
            echo json_encode(["error" => "Missing product_id or cart_item_id"]);
            exit;
        }

        try {
            $sql = "
            DELETE FROM cart_items 
            WHERE anonymous_user_id = :ano AND product_id = :product_id AND cart_item_id = :cart_item_id
            ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":ano", $ano, PDO::PARAM_INT);
            $stmt->bindParam(":product_id", $product_id, PDO::PARAM_INT);
            $stmt->bindParam(":cart_item_id", $cart_item_id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo json_encode(["success" => "Product removed from cart"]);
            } else {
                echo json_encode(["error" => "Failed to remove product from cart"]);
            }
        } catch (PDOException $e) {
            echo json_encode(["error" => "Database error: " . $e->getMessage()]);
        }
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SESSION['user_id'])) {
        $customer_id = $_SESSION['user_id'];

        try {
            $sql = "
            SELECT ci.*, c.*, p.*, pi.* 
            FROM cart_items ci
            LEFT JOIN customers c ON ci.customer_id = c.customer_id
            LEFT JOIN products p ON ci.product_id = p.product_id
            LEFT JOIN product_images pi ON p.product_id = pi.product_id
            WHERE ci.customer_id = :customer_id;
            ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":customer_id", $customer_id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo json_encode($result ?: ["error" => "No products found in the cart"]);
        } catch (PDOException $e) {
            echo json_encode(["error" => "Database error: " . $e->getMessage()]);
        }
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
        $customer_id = $_SESSION['user_id'];
        $product_id = $_GET['id'] ?? null;
        $quantity = $_POST['quantity'] ?? 1;
        $type = $_POST['cart_item_user_type'] ?? 1;

        if (empty($product_id) || !is_numeric($quantity) || $quantity <= 0) {
            echo json_encode(["error" => "Invalid input data"]);
            exit;
        }

        try {
            $sql = "
            INSERT INTO cart_items (product_id, cart_item_quantity, customer_id, 
            cart_item_add_time, cart_item_user_type, anonymous_user_id, cart_item_update_time)
            VALUES (:product_id, :quantity, :customer_id, NOW(), :type, 0, NOW())
            ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":product_id", $product_id);
            $stmt->bindParam(":quantity", $quantity);
            $stmt->bindParam(":customer_id", $customer_id);
            $stmt->bindParam(":type", $type);

            if ($stmt->execute()) {
                echo json_encode(["success" => "Product added to cart"]);
            } else {
                echo json_encode(["error" => "Failed to add product to cart"]);
            }
        } catch (PDOException $e) {
            echo json_encode(["error" => "Database error: " . $e->getMessage()]);
        }
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_SESSION['user_id'])) {
        parse_str(file_get_contents("php://input"), $_DELETE);

        $customer_id = $_SESSION['user_id'];
        $product_id = $_DELETE['product_id'] ?? null;
        $cart_item_id = $_DELETE['cart_id'] ?? null;

        if (!$product_id || !$cart_item_id) {
            echo json_encode(["error" => "Missing product_id or cart_item_id"]);
            exit;
        }

        try {
            $sql = "
            DELETE FROM cart_items 
            WHERE customer_id = :customer_id AND product_id = :product_id AND cart_item_id = :cart_item_id
            ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":customer_id", $customer_id, PDO::PARAM_INT);
            $stmt->bindParam(":product_id", $product_id, PDO::PARAM_INT);
            $stmt->bindParam(":cart_item_id", $cart_item_id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo json_encode(["success" => "Product removed from cart"]);
            } else {
                echo json_encode(["error" => "Failed to remove product from cart"]);
            }
        } catch (PDOException $e) {
            echo json_encode(["error" => "Database error: " . $e->getMessage()]);
        }
        exit;
    }

    echo json_encode(["error" => "Invalid request method"]);
    exit;
}




function handleOrder($method, $input, $pdo)
{

    if ($method === 'GET') {
        $customerId = $_SESSION['user_id'];
    
        $sql = "
            SELECT
                p.product_name,
                pi.product_image,
                p.product_description,
                p.product_id
            FROM
                customers AS c
            JOIN order_groups AS og ON c.customer_id = og.customer_id
            JOIN orders AS o ON og.order_group_id = o.order_group_id
            JOIN order_items AS oi ON o.order_id = oi.order_id
            JOIN products AS p ON oi.product_variant_id = p.product_id
            JOIN product_images AS pi ON pi.product_id = p.product_id
            WHERE c.customer_id = ?
            ORDER BY c.customer_id, o.order_id;
        ";
    
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$customerId]);
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        if ($details) {
            echo json_encode($details);
        } else {
            echo json_encode(["error" => "No products found in the order for this customer"]);
        }
    }
    


    if ($method === 'POST') {
        $customerId = $_SESSION['user_id'];
        $input = json_decode(file_get_contents("php://input"), true);
        $productIds = $input['product_ids'] ?? [];
    
        
        if (!isset($customerId) || !is_array($productIds) || count($productIds) === 0) {
            echo json_encode(["success" => false, "message" => "Invalid inputs."]);
            exit();
        }
    
        try {
          
            $pdo->beginTransaction();
    
          
            $stmt1 = $pdo->prepare("SELECT c.*, ca.* FROM customers c JOIN customer_addresses ca ON c.customer_id = ca.customer_id WHERE c.customer_id = ?");
            $stmt1->execute([$customerId]);
            $customerDetails = $stmt1->fetch(PDO::FETCH_ASSOC);
    
            if (!$customerDetails) {
                throw new Exception("Customer not found.");
            }
    
          
            $stmt2 = $pdo->prepare("
                INSERT INTO order_groups (customer_id, order_group_payment_mode, order_group_bill_address_id, order_group_add_time, order_group_update_time)
                VALUES (?, 1, ?, NOW(), NOW())
            ");
            $stmt2->execute([$customerId, $customerDetails['customer_address_id']]);
            $orderGroupId = $pdo->lastInsertId();
    
           
            $totalAmount = 0;
            foreach ($productIds as $productId) {
                $stmt3 = $pdo->prepare("SELECT * FROM products WHERE product_id = ?");
                $stmt3->execute([$productId]);
                $product = $stmt3->fetch(PDO::FETCH_ASSOC);
                if (!$product) {
                    throw new Exception("Product ID $productId not found.");
                }
                $totalAmount += $product['product_price'];
            }
    
           
            $stmt4 = $pdo->prepare("INSERT INTO orders (order_total_amount, order_group_id) VALUES (?, ?)");
            $stmt4->execute([$totalAmount, $orderGroupId]);
            $orderId = $pdo->lastInsertId();
    
         
            $stmt5 = $pdo->prepare("INSERT INTO order_items (order_id, product_variant_id) VALUES (?, ?)");
            foreach ($productIds as $productId) {
                $stmt5->execute([$orderId, $productId]);
            }
    
          
            $stmt6 = $pdo->prepare("
                INSERT INTO order_statuses (order_status, order_status_remarks, order_status_update_time, order_id)
                VALUES (1, 'confirmed', NOW(), ?)
            ");
            $stmt6->execute([$orderId]);
    
          
            $pdo->commit();
    
            echo json_encode(["success" => true, "message" => "Order placed successfully!"]);
        } catch (Exception $e) {
            $pdo->rollBack();
            echo json_encode(["success" => false, "message" => "Error: " . $e->getMessage()]);
        }
    }
    
}



function handleWishlist($method, $input, $pdo) 
{
   

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["error" => "You must be logged in to add items to the wishlist."]);
    exit();
}



if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $customer_id = intval($_GET['id']);

    // Query to fetch product details for the specified customer ID
    $sql = "SELECT
                wi.*, 
                c.*,   
                p.*, 
                pi.*
            FROM
                wishlist_items wi
            LEFT JOIN
                customers c ON wi.customer_id = c.customer_id
            LEFT JOIN
                products p ON wi.product_variant_id = p.product_id
            LEFT JOIN
                product_images pi ON p.product_id = pi.product_id
            WHERE
                wi.customer_id = :customer_id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['customer_id' => $customer_id]);

    $details = $stmt->fetchAll();
    if ($details) {
        echo json_encode($details);
    } else {
        echo json_encode(["error" => "No products found in the wishlist for this customer"]);
    }
}


elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_id = $_SESSION['user_id'];
    $product_id = isset($_GET['id']) ? intval($_GET['id']) : null;

    // Validate input
    if (!$customer_id || !$product_id) {
        echo json_encode(["error" => "Missing customer_id or product_id"]);
        exit();
    }

    // Check if the product is already in the wishlist
    $check_sql = "SELECT * FROM wishlist_items WHERE customer_id = :customer_id AND product_variant_id = :product_id";
    $check_stmt = $pdo->prepare($check_sql);
    $check_stmt->execute(['customer_id' => $customer_id, 'product_id' => $product_id]);

    if ($check_stmt->rowCount() > 0) {
        echo json_encode(["error" => "Product is already in the wishlist"]);
    } else {
        // Insert new product into the wishlist
        $insert_sql = "INSERT INTO wishlist_items (customer_id, product_variant_id, wishlist_item_add_time) VALUES (:customer_id, :product_id, NOW())";
        $insert_stmt = $pdo->prepare($insert_sql);
        if ($insert_stmt->execute(['customer_id' => $customer_id, 'product_id' => $product_id])) {
            echo json_encode(["success" => "Product added to wishlist"]);
        } else {
            echo json_encode(["error" => "Failed to add product to wishlist"]);
        }
    }
}

elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
  

    $customer_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : null;
    $product_id = isset($_GET['id']) ? intval($_GET['id']) : null;

    // Validate input
    if (!$customer_id || !$product_id) {
        echo json_encode(["error" => "Missing customer_id or product_id"]);
        exit();
    }

    // Delete product from the wishlist
    $delete_sql = "DELETE FROM wishlist_items WHERE customer_id = :customer_id AND product_variant_id = :product_id";
    $delete_stmt = $pdo->prepare($delete_sql);

    if ($delete_stmt->execute(['customer_id' => $customer_id, 'product_id' => $product_id])) {
        echo json_encode(["success" => "Product removed from wishlist"]);
    } else {
        echo json_encode(["error" => "Failed to remove product from wishlist"]);
    }
}

else {
    echo json_encode(["error" => "Invalid request"]);
}


}






?>
