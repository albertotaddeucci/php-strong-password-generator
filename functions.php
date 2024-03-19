<?php

function chrRandom()
{
    $chrRandom = chr(64 + rand(1, 26));
    return $chrRandom;
};
function chrRandomMin()
{
    $chrRandomMin = strtolower(chr(64 + rand(1, 26)));
    return $chrRandomMin;
}
function numRandom()
{
    $numRandom = rand(0, 9);
    return $numRandom;
}
function chrRandomSpec()
{
    $chrRandomSpec = chr(32 + rand(1, 15));
    return $chrRandomSpec;
};
