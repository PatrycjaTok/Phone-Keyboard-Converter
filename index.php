<?php

$result=null;

function repleaseStrToNumb($str)
{
    $arrStrToNumb=array(
    'a' => 2,
    'b' => 22,
    'c' => 222,
    'd' => 3,
    'e' => 33,
    'f' => 333,
    'g' => 4,
    'h' => 44,
    'i' => 444,
    'j' => 5,
    'k' => 55,
    'l' => 555,
    'm' => 6,
    'n' => 66,
    'o' => 666,
    'p' => 7,
    'q' => 77,
    'r' => 777,
    's' => 7777,
    't' => 8,
    'u' => 88,
    'v' => 888,
    'w' => 9,
    'x' => 99,
    'y' => 999,
    'z' => 9999,
    ' ' => 0
    );
    $GLOBALS['result']=$GLOBALS['result']."$arrStrToNumb[$str]";
};	

function repleaseNumbToStr($numb)
{
    $arrNumbToStr=array(
    2 => 'a',
    22 => 'b',
    222 => 'c',
    3 => 'd',
    33 => 'e',
    333 => 'f', 
    4 => 'g',
    44 => 'h',
    444 => 'i',
    5 => 'j',
    55 => 'k',
    555 => 'l',
    6 => 'm',
    66 => 'n',
    666 => 'o',
    7 => 'p',
    77 => 'q',
    777 => 'r',
    7777 => 's',
    8 => 't',
    88 => 'u',
    888 => 'v',
    9 => 'w',
    99 => 'x',
    999 =>'y',
    9999 => 'z',
    0 => ' '
    );

    $GLOBALS['result']=$GLOBALS['result']."$arrNumbToStr[$numb]";
};	

    class PhoneKeyboardConverter{
        public function convertToNumeric($strWord){
            for($i=0; $i<strlen($strWord); $i++){
                $strWordLower=strtolower($strWord[$i]);
                repleaseStrToNumb($strWordLower);
                if($i<strlen($strWord)-1){
                    $GLOBALS['result']=$GLOBALS['result'].',';
                };
            }
        }

        public function convertToString($numbWord){
            $textAfterExplode=explode(",", $numbWord);
            for($j=0; $j<count($textAfterExplode); $j++){
                repleaseNumbToStr($textAfterExplode[$j]);
            }
        }
    };

if((isset($_POST['inputText'])) && ($_POST['inputText']!=null)){
    $input=$_POST['inputText'];

    $czyLiczba=$input[0];
    if(is_numeric($czyLiczba)){
        $object=new PhoneKeyboardConverter();
        $object->convertToString($input);
        unset($_POST['inputText']);
    }else{
        $object=new PhoneKeyboardConverter();
        $object->convertToNumeric($input);
        unset($_POST['inputText']);
    }
}

  
?>

<!DOCTYPE HTML>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale-=1">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>PHONE KEYBOARD CONVERTER</title>
    </head>
    <body>
        <div id="container">
            <div>
                <form method="post">
                    <label for="inputText"> Wpisz słowo lub ciąg numeryczny</label><br>
                    <input type="text" name='inputText' id='inputText' class='inputs'>
                    <input type="submit" value="Konwertuj" class='buttons'>
                </form>
            </div>
            <div id='divAnswer'>
                <?php
                if(isset($result)){
                    echo $result;
                }
                ?>
            </div>

            <div id='divMessage'>
                Zapraszam również do mojej aplikacji webowej <br>
                <b>http://kranmar.pl/</b> <br>
                Pozdrawiam, Patrcja
            </div>

        </div>
        
    </body>


</html>
