<?php
require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'ap1',
    'useTLS'  => true
);
$pusher  = new Pusher\Pusher(
    '04ac9fe180086d993988',
    '811cece36d0f877b7bcc',
    '768798',
    $options
);

$data['message'] = 'hello world';
$pusher->trigger('my-channel', 'my-event', $data);
