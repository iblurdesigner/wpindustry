<?php 
if (in_category('5')) { include (TEMPLATEPATH . '/single-carnivery.php');
}
elseif(in_category('6')) { include (TEMPLATEPATH . '/single-industry.php');
}
else { include (TEMPLATEPATH . '/single-original.php');
}
 ?>