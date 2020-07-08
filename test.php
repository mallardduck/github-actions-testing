<?php

include __DIR__ . '/src/run.php';

pathCheck('.');
echo '\\localhost\';
pathCheck('\\localhost\');
echo '\\\localhost\';
pathCheck('\\\localhost\');
