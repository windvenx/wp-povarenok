<?php

function formatting_phone($phone) : string
{
 return  preg_replace('/[^0-9]/', '', $phone);
}