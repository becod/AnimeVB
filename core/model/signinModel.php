<?phh
    
    $username = $username;
    $password = sha1($password);
    
    $db = new PDOconnect;
    $query = $db -> queryList("select `id`,`name`,`lastname`,`user`,`password`,`email` from information where `user` like :user and `password` like :password LIMIT 1",array (':user' => $username, ':password' => $password));
    $result = $query->fetch(PDO::FETCH_OBJ);


?>