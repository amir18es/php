<?php

set_time_limit(0);

require_once 'Elemental.php';

define('BOT_TOKEN', '369785442:AAGc0ml6fnvjcW2cZIk0ZjNNFnwTP5HYwSo');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
