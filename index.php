<?php

$template = file_get_contents("temp.html");
$template2 = file_get_contents("prototype.html");

$hotels = array(
    array(
        "url" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/8a/e0/b9/bellagio-las-vegas.jpg?w=700&h=-1&s=1",
        "name" => "The Bellagio",
        "description" => "https://bellagio.mgmresorts.com/en.html"
    ),
    array(
        "url" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/f1/41/a6/welcome-to-caesars-palace.jpg?w=700&h=-1&s=1",
        "name" => "Caesars Palace",
        "description" => "https://www.caesars.com/caesars-palace"
    ),
    array(
        "url" => "https://cf.bstatic.com/xdata/images/hotel/max1024x768/283163011.jpg?k=e9cebad3117f66b1fd1c000d709fa000af255b178dcb0e25fe510fe2c546da02&o=&hp=1",
        "name" => "The Venetian",
        "description" => "https://www.venetianlasvegas.com/"
    )
);

$a = array();

foreach ($hotels as $hotel) {

    $erg = str_replace('##hotelIMG##', $hotel['url'], $template);
    $erg = str_replace('##hotelName##', $hotel['name'], $erg);
    $description_with_link = '<a href="' . $hotel['description'] . '">' . $hotel['description'] . '</a>';
    $erg = str_replace('##hotelDes##', $description_with_link, $erg);
    $a[] = $erg;
}


$erg2 = str_replace('##hotelOUT##', implode(' ', $a), $template2);

echo $erg2;
?>
