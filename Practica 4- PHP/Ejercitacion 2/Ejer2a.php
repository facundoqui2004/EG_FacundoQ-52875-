<?php
$i = 1;
while ($i <= 10) {
    print $i++;
}
print "\n"; // Salto de línea SOLO al final del primer while

$j = 1;
while ($j <= 10):
    print $j;
    $j++;
endwhile;
print "\n"; // Salto de línea SOLO al final del segundo while

$k = 0;
do {
    print ++$k;
} while ($k < 10);
print "\n"; // Salto de línea SOLO al final del do-while
?>