<?php

function isPalindrome(string $payload): bool
{
    return array_reverse(str_split($payload)) === str_split($payload);
}
