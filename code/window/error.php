<?php
use UI\Size;
use UI\Window;

$window = new Window("Title", new Size(200, 40));

$window->show();

$window->error("Title", "Message");

UI\run();
?>
