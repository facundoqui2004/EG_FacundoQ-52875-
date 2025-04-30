
<?php
for ($i = 1; $i <= 10; $i++) {
print $i;
}
print "\n"; // Salto de línea SOLO al final del segundo while

for ($i = 1; ;$i++) {
if ($i > 10) {
break;
}
print $i;
}
print "\n"; // Salto de línea SOLO al final del segundo while

$i = 1;
for (;;) {
if ($i > 10) {
break;
}
print $i;
$i++;
}
print "\n"; // Salto de línea SOLO al final del segundo while

for ($i = 1; $i <= 10; print $i, $i++) ;
?>