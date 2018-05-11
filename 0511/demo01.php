<?php
header('Content-Type:text/html; charset=utf-8');
// here doc
$str = <<<EOT
aaaaaaaa
bbbbbb
ccccccc
Hello Here doc
EOT;
echo $str . '<br>';

// new doc
$str1 = <<<'EOT'
<h3>Newdoc</h3>
<h3>Newdoc</h3>
<h3>Newdoc</h3>
EOT;
echo $str1;
?>
