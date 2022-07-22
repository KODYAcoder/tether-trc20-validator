<?php

function isTRC20($address){
    return substr($address,0,1)=="T" and strlen($address)==34;
}
