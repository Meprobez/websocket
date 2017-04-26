<?php
    require 'D:/Victor/wamp64/www/jelix/websocket/vendor/autoload.php';
    use \ZMQContext;
    use \ZMQ;
    // post.php ???
    // This all was here before  ;)
    $entryData = array(
        'id' => $_POST['id']
      , 'password'    => $_POST['password']
      , 'inputtext'  => $_POST['inputtext']
      , 'open'  => $_POST['open']
      , 'when'     => time()
    );

  /*  $pdo->prepare("INSERT INTO blogs (title, article, category, published) VALUES (?, ?, ?, ?)") - DataBase Operation
        ->execute($entryData['title'], $entryData['article'], $entryData['category'], $entryData['when']); */

    // This is our new stuff
    $context = new ZMQContext();
    $socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
    $socket->connect("tcp://localhost:5555");

    $socket->send(json_encode($entryData));

?>