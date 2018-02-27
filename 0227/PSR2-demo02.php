<?php
// if、 elseif和 else

if($expr1) {
   // if body
} elseif ($expr2) {

} else {
    // else body
}

// switch

swtich ($expr) {
   case 0:
       echo 'first case, with a break';
       break;
   case 1:
       echo 'second case , which falls through';
        // no break

}