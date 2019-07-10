<?php

$scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);
$repoDir = realpath($scriptDir . '/..');

chdir($repoDir);
$output = [];
exec("git pull origin master", $output);
echo implode("\n", $output);

