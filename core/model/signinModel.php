<?phh
    
    $username = $username;
    $password = sha1($password);
    
    $db = new PDOconnect;
    $query = $db -> queryList("select `ID`,`user_name`,`user_lastname`,`user_login`,`user_password`,`user_email`, `user_status` from avb_users where `user_login` like :user and `user_password` like :password LIMIT 1",array (':user' => $username, ':password' => $password));
    $result = $query->fetch(PDO::FETCH_OBJ);


?>