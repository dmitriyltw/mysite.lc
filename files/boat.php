    <?php
$adult = 1;
$child = 0.5;
$left_coast = [$adult, $adult, $child, $child, $child];
$boat = [];
$right_coast = [];
$i = 0;

do {
    shuffle($left_coast);
    $i++;
    if ($left_coast[0] == $adult && $left_coast[1] == $child && $left_coast[2] == $child) {
        array_push($boat, $left_coast[0], $left_coast[1], $left_coast[2]);
        unset($left_coast[0], $left_coast[1], $left_coast[2]);
    } elseif ($left_coast[0] == $adult && $left_coast[1] == $child) {
        array_push($boat, $left_coast[0], $left_coast[1]);
        unset($left_coast[0], $left_coast[1]);
    }
} while (!isset($boat[0]));
echo 'Количество попыток погрузки: ' . $i . "<br/>";
echo 'На левом берегу остались:' . "<br/>";
foreach ($left_coast as $value) {
    $msg = ($value == $adult) ? 'Взрослый' : 'Ребенок';
    echo '-> ' . $msg . "<br>";
}
echo 'В лодку сели:' . "<br/>";
foreach ($boat as $passengers) {
    $msg = ($passengers == $adult) ? 'Взрослый' : 'Ребенок';
    echo '-> ' . $msg . "<br>";
}
echo ' ' . "<br/>";
echo 'На другой берег пока что переехали:' . "<br/>";
if (isset($boat[0]) && isset($boat[1]) && isset($boat[2])) {
    array_push($right_coast, $boat[0], $boat[1], $boat[2]);
    unset($boat[0], $boat[1], $boat[2]);
} elseif (isset($boat[0]) && isset($boat[1])) {
    array_push($right_coast, $boat[0], $boat[1]);
    unset($boat[0], $boat[1]);
}
foreach ($right_coast as $value1) {
    $msg = ($value1 == $adult) ? 'Взрослый' : 'Ребенок';
    echo '-> ' . $msg . "<br>";
}
if (!isset($boat[0])) {
    echo 'Лодка пустая.' . "<br/>";
}

echo ' ' . "<br/>";
echo 'Второй заплыв:' . "<br/>";
if (isset($left_coast[2]) && isset($left_coast[3]) && isset($left_coast[4])) {
    array_push($boat, $left_coast[2], $left_coast[3], $left_coast[4]);
    unset($left_coast[2], $left_coast[3], $left_coast[4]);
    echo 'На берегу оставалось 3 человека.' . "<br/>";
} elseif (isset($left_coast[3]) && isset($left_coast[4])) {
    array_push($boat, $left_coast[3], $left_coast[4]);
    unset($left_coast[3], $left_coast[4]);
    echo 'На берегу оставалось 2 человека.' . "<br/>"."\r\n";
}

echo ' ' . "<br/>";
if (isset($boat[2]) && isset($boat[3]) && isset($boat[4])) {
    echo 'Происходит погрузка 3их->' . "<br/>";
    array_push($right_coast, $boat[2], $boat[3], $boat[4]);
    unset($boat[2], $boat[3], $boat[4]);
    echo 'На другой берег добрались еще 3 человека' . "<br/>";
} elseif (isset($boat[3]) && isset($boat[4])) {
    echo 'Происходит погрузка 2их->' . "<br/>";
    array_push($right_coast, $boat[3], $boat[4]);
    unset($boat[3], $boat[4]);
    echo 'На другой берег добрались еще 2 человека.' . "<br/>";
}

foreach ($right_coast as $value2) {
    $msg = ($value2 == $adult) ? 'Взрослый' : 'Ребенок';
    echo '-> ' . $msg . "<br>";
}
if (!isset($boat[4]) && !isset($left_coast[4])) {
    echo 'Лодка и левый берег пустые.' . "<br/>";
}