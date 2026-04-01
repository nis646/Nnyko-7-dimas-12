<?php

$hero_power_pick = false;
$hero_power_ban = false;

if (!$hero_power_pick && !$hero_power_ban) {
    echo "pick Haya, kemungkinan besar menang\n";
}


$late_race = true;
$rushed = true;

if ($late_race && $rushed) {
    echo "kemungkinan kecil menang HJVZ\n";
}


$mode = "have fun";

if ($mode === "have fun") {
    echo "pick Heino\n";
} elseif ($mode === "iseng") {
    echo "pick Nuwa\n";
} elseif ($mode === "troll") {
    echo "pick Haji Liang\n";
} elseif ($mode === "sedikit serius") {
    echo "pick Daji\n";
} elseif ($mode === "serius") {
    echo "pick Haya\n";
}


$teman_pick = "allesio";
$tipe_hero = "MM DPS";

if ($teman_pick === "allesio") {
    echo "teman jadi beban\n";
} else {
    if ($tipe_hero === "MM Burst") {
        echo "gendong early-mid\n";
    } elseif ($tipe_hero === "MM DPS") {
        echo "gendong mid-late\n";
    }
}


$kondisi = "sehat";
$stamina = true;

if ($kondisi === "sehat" && $stamina) {
    echo "bisa petualangan\n";
} else {
    echo "tidak bisa petualangan\n";
}


$jarak = "medium";

if ($jarak === "medium") {
    echo "pakai Agnes Tachyon / Symboli Rudolf\n";
} elseif ($jarak === "long") {
    echo "pakai Manhattan Cafe / Gold Ship\n";
}
