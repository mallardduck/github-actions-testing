<?php

include __DIR__ . '/src/run.php';

pathCheck('.');
pathCheck('\\localhost\');
pathCheck('\\\localhost\');
pathCheck('\\localhost\c$');
pathCheck('\\\localhost\c$');
pathCheck('\\localhost\c$\');
pathCheck('\\\localhost\c$\');
