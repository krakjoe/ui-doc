<?php
use UI\Size;
use UI\Window;

$window = new Window("Title", new Size(200, 40));

$window->show();

$window->error("This is the \$title parameter", "The \$msg parameter goes here");

UI\run();
?>
