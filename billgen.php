<?php
/*
 * Created with <3 By Gautam Krishna R
 * www.github.com/gautamkrishnar
 */
header('Content-type: image/jpeg');
$name = filter_input(INPUT_GET, 'name');
$sex = filter_input(INPUT_GET, 'sex');

// Result array
$memlist=array("This is Bill.\n\n"
    . "Bill has an I-pad to take photos\n"
    . "He knows the the camera's crap\nand he doesn't want to look like a\n"
    . "complete knob\n\n"
    . "Be smart.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill is on the internet,\n"
    . "Bill sees something that offends him.\n"
    . "Bill moves on.\n\n"
    . "Bill is smart.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill likes to play games with his nephew\n"
    . "Bill lets him win almost everytime\n\n"
    . "Bill cares.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill loves his friends.\n"
    . "But he doesn't post selfies with them with 'XOXO'.\n"
    . "He shows them, he loves them by being nice\n"
    . "to them.\n\n"
    . "Bill is smart.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill wakes up and sees snowing outside\n"
    . "Bill doesn't feel the urge to post status\n"
    . "about it on Facebook because\n"
    . "he knows his friends also have windows\n\n"
    . "Bill is smart.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill smokes weed.\n"
    . "Bill doesnt't forget good manners \n"
    . "and education.\n\n"
    . "Bill is smart.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill proofreads his Facebook posts\n"
    . "before he sends them\n\n"
    . "Bill is awesome.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill meets Della\n"
    . "Bill loves Della\n"
    . "Della loves Bill\n"
    . "Bill and Della dumps social networks.\n\n"
    . "Bill and Della are happy.\n"
    . "Be like Bill and Della.",
    "This is Bill.\n\n"
    . "Bill isn't an online dating creep\n"
    . "Bill likes the romantic way\n"
    . "\n\nBill is gentleman.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill knows the difference between\n"
    . "they're, there and their.\n\n"
    . "Bill is smart.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill updated his Facebook profile picture\n"
    . "Bill didn't beg people to click like\n"
    . "so that he gets a lot of likes.\n\n"
    . "Bill is smart.\n"
    . "Be like Bill.",
    "This is Bill\n\n"
    . "Bill is having a funny conversation with\n"
    . "a friend on whatsapp\n"
    . "Depite this, Bill doesn't screenshot it\n"
    . "and post it on social media.\n\n"
    . "Bill keeps some things for himself.\n"
    . "Be like Bill.",
    "This is Bill.\n"
    . "Bill travels a lot.\n\n"
    . "Bill doesn't check in in every places\n"
    . "he goes because,\n"
    . "he likes to actually enjoy the places he visits.\n\n"
    . "Bill is smart.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill has a girlfriend\n"
    . "Bill has a smartphone too\n"
    . "Bill gives more time to his girlfriend\n"
    . "rather than his smartphone.\n\n"
    . "Bill is caring.\n"
    . "Be like Bill.",
    "This is  Bill.\n\n"
    . "Bill sees your profile picture has only\n"
    . "3 likes\n"
    . "Bill presses like.\n"
    . "Bill also comments with a compliment.\n\n"
    . "Bill is a good friend.\n"
    . "Be like Bill.",
    "This is Bill\n\n"
    . "Bill brought a new car, but Bill doesn't\n"
    . "post its picture tagging Bella and 49 others\n"
    . "because people get irritated by it.\n\n"
    . "Bill is wise.\n"
    . "Be like Bill.",
    "This is Bill\n\n"
    . "Bill knows tomorrow is Monday\n"
    . "Bill doesn't post about it, cause he knows\n"
    . "it happens every week\n\n"
    . "Bill deals with it.\n"
    . "Be like Bill.",
    "This is Bill\n\n"
    . "Bill can afford a Macbook but\n"
    . "he gets a PC instead because,\n"
    . "Bill is not a dumbass\n\n"
    . "Bill is smart.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill has always been kind with everyone.\n\n"
    . "Then he recovered.\n\n"
    . "Bill is smart.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill doesn't talk to a friend when that\n"
    . "friend just woke up.\n\n"
    . "Bill knows.\n"
    . "Be like Bill.",
    "This is Bill.\n\n"
    . "Bill knows it's saturday.\n\n"
    . "Bill calls his mother and tells her\n"
    . "he loves her.\n\n"
    . "Be like Bill.\n"
    . "Bill cares."
    );
// Randomizing results
$ran_mem=array_rand($memlist,1);
$text = $memlist[$ran_mem];

// if user inputs his name
if($name)
{
$name=ucfirst($name);
$text = preg_replace('/\bBill\b/', $name, $text);
$text = preg_replace('/\bbill\b/', $name, $text);
}

// if bill is female
if($sex=='f')
{
$text = preg_replace('/\bhis\b/', 'her', $text);
$text = preg_replace('/\bHis\b/', 'Her', $text);
$text = preg_replace('/\bhe\b/', 'she', $text);
$text = preg_replace('/\bHe\b/', 'She', $text);
$text = preg_replace('/\bhimself\b/', 'herself', $text);

}
      $img = imagecreatefromjpeg('bill-ovl.jpg');
      $clr = imagecolorallocate($img, 0, 0, 0);
      $font_path = 'arialbd.ttf';
      imagettftext($img, 18, 0, 30, 100, $clr,$font_path, $text);
      imagejpeg($img);
      imagedestroy($img);
?> 