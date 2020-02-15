<HTML>

<HEAD>
    <TITLE> Query V </TITLE>
</HEAD>

<BODY>
<h2> Which pairs of people reply each other most often? </h2>

<?PHP


// function copied from Internet
function transliterateString($txt) {
    $transliterationTable = array('á' => 'a', 'Á' => 'A', 'à' => 'a', 'À' => 'A', 'ă' => 'a', 'Ă' => 'A', 'â' => 'a', 'Â' => 'A', 'å' => 'a', 'Å' => 'A', 'ã' => 'a', 'Ã' => 'A', 'ą' => 'a', 'Ą' => 'A', 'ā' => 'a', 'Ā' => 'A', 'ä' => 'ae', 'Ä' => 'AE', 'æ' => 'ae', 'Æ' => 'AE', 'ḃ' => 'b', 'Ḃ' => 'B', 'ć' => 'c', 'Ć' => 'C', 'ĉ' => 'c', 'Ĉ' => 'C', 'č' => 'c', 'Č' => 'C', 'ċ' => 'c', 'Ċ' => 'C', 'ç' => 'c', 'Ç' => 'C', 'ď' => 'd', 'Ď' => 'D', 'ḋ' => 'd', 'Ḋ' => 'D', 'đ' => 'd', 'Đ' => 'D', 'ð' => 'dh', 'Ð' => 'Dh', 'é' => 'e', 'É' => 'E', 'è' => 'e', 'È' => 'E', 'ĕ' => 'e', 'Ĕ' => 'E', 'ê' => 'e', 'Ê' => 'E', 'ě' => 'e', 'Ě' => 'E', 'ë' => 'e', 'Ë' => 'E', 'ė' => 'e', 'Ė' => 'E', 'ę' => 'e', 'Ę' => 'E', 'ē' => 'e', 'Ē' => 'E', 'ḟ' => 'f', 'Ḟ' => 'F', 'ƒ' => 'f', 'Ƒ' => 'F', 'ğ' => 'g', 'Ğ' => 'G', 'ĝ' => 'g', 'Ĝ' => 'G', 'ġ' => 'g', 'Ġ' => 'G', 'ģ' => 'g', 'Ģ' => 'G', 'ĥ' => 'h', 'Ĥ' => 'H', 'ħ' => 'h', 'Ħ' => 'H', 'í' => 'i', 'Í' => 'I', 'ì' => 'i', 'Ì' => 'I', 'î' => 'i', 'Î' => 'I', 'ï' => 'i', 'Ï' => 'I', 'ĩ' => 'i', 'Ĩ' => 'I', 'į' => 'i', 'Į' => 'I', 'ī' => 'i', 'Ī' => 'I', 'ĵ' => 'j', 'Ĵ' => 'J', 'ķ' => 'k', 'Ķ' => 'K', 'ĺ' => 'l', 'Ĺ' => 'L', 'ľ' => 'l', 'Ľ' => 'L', 'ļ' => 'l', 'Ļ' => 'L', 'ł' => 'l', 'Ł' => 'L', 'ṁ' => 'm', 'Ṁ' => 'M', 'ń' => 'n', 'Ń' => 'N', 'ň' => 'n', 'Ň' => 'N', 'ñ' => 'n', 'Ñ' => 'N', 'ņ' => 'n', 'Ņ' => 'N', 'ó' => 'o', 'Ó' => 'O', 'ò' => 'o', 'Ò' => 'O', 'ô' => 'o', 'Ô' => 'O', 'ő' => 'o', 'Ő' => 'O', 'õ' => 'o', 'Õ' => 'O', 'ø' => 'oe', 'Ø' => 'OE', 'ō' => 'o', 'Ō' => 'O', 'ơ' => 'o', 'Ơ' => 'O', 'ö' => 'oe', 'Ö' => 'OE', 'ṗ' => 'p', 'Ṗ' => 'P', 'ŕ' => 'r', 'Ŕ' => 'R', 'ř' => 'r', 'Ř' => 'R', 'ŗ' => 'r', 'Ŗ' => 'R', 'ś' => 's', 'Ś' => 'S', 'ŝ' => 's', 'Ŝ' => 'S', 'š' => 's', 'Š' => 'S', 'ṡ' => 's', 'Ṡ' => 'S', 'ş' => 's', 'Ş' => 'S', 'ș' => 's', 'Ș' => 'S', 'ß' => 'SS', 'ť' => 't', 'Ť' => 'T', 'ṫ' => 't', 'Ṫ' => 'T', 'ţ' => 't', 'Ţ' => 'T', 'ț' => 't', 'Ț' => 'T', 'ŧ' => 't', 'Ŧ' => 'T', 'ú' => 'u', 'Ú' => 'U', 'ù' => 'u', 'Ù' => 'U', 'ŭ' => 'u', 'Ŭ' => 'U', 'û' => 'u', 'Û' => 'U', 'ů' => 'u', 'Ů' => 'U', 'ű' => 'u', 'Ű' => 'U', 'ũ' => 'u', 'Ũ' => 'U', 'ų' => 'u', 'Ų' => 'U', 'ū' => 'u', 'Ū' => 'U', 'ư' => 'u', 'Ư' => 'U', 'ü' => 'ue', 'Ü' => 'UE', 'ẃ' => 'w', 'Ẃ' => 'W', 'ẁ' => 'w', 'Ẁ' => 'W', 'ŵ' => 'w', 'Ŵ' => 'W', 'ẅ' => 'w', 'Ẅ' => 'W', 'ý' => 'y', 'Ý' => 'Y', 'ỳ' => 'y', 'Ỳ' => 'Y', 'ŷ' => 'y', 'Ŷ' => 'Y', 'ÿ' => 'y', 'Ÿ' => 'Y', 'ź' => 'z', 'Ź' => 'Z', 'ž' => 'z', 'Ž' => 'Z', 'ż' => 'z', 'Ż' => 'Z', 'þ' => 'th', 'Þ' => 'Th', 'µ' => 'u', 'а' => 'a', 'А' => 'a', 'б' => 'b', 'Б' => 'b', 'в' => 'v', 'В' => 'v', 'г' => 'g', 'Г' => 'g', 'д' => 'd', 'Д' => 'd', 'е' => 'e', 'Е' => 'E', 'ё' => 'e', 'Ё' => 'E', 'ж' => 'zh', 'Ж' => 'zh', 'з' => 'z', 'З' => 'z', 'и' => 'i', 'И' => 'i', 'й' => 'j', 'Й' => 'j', 'к' => 'k', 'К' => 'k', 'л' => 'l', 'Л' => 'l', 'м' => 'm', 'М' => 'm', 'н' => 'n', 'Н' => 'n', 'о' => 'o', 'О' => 'o', 'п' => 'p', 'П' => 'p', 'р' => 'r', 'Р' => 'r', 'с' => 's', 'С' => 's', 'т' => 't', 'Т' => 't', 'у' => 'u', 'У' => 'u', 'ф' => 'f', 'Ф' => 'f', 'х' => 'h', 'Х' => 'h', 'ц' => 'c', 'Ц' => 'c', 'ч' => 'ch', 'Ч' => 'ch', 'ш' => 'sh', 'Ш' => 'sh', 'щ' => 'sch', 'Щ' => 'sch', 'ъ' => '', 'Ъ' => '', 'ы' => 'y', 'Ы' => 'y', 'ь' => '', 'Ь' => '', 'э' => 'e', 'Э' => 'e', 'ю' => 'ju', 'Ю' => 'ju', 'я' => 'ja', 'Я' => 'ja', '\'' => ' ');
    return str_replace(array_keys($transliterationTable), array_values($transliterationTable), $txt);
}

// function sending an instruction to Oracle (and returning errors)
function sendOracle($conn, $message, $errMess)
{
    $stmt = ociparse($conn, $message);
    $resultOp = ociexecute($stmt);
    
    if ($resultOp === false)
    {
        $e = oci_error($stmt);
        echo nl2br($errMess.': '.$e["message"]."\n");
    }
}

// function checking if there is a record fulfilling "select" query
function searchOracle($conn, $message, $errMess)
{
    $stmt = ociparse($conn, $message);
    $resultOp = ociexecute($stmt);
    
    if ($resultOp === false)
    {
        $e = oci_error($stmt);
        echo nl2br($errMess.': '.$e["message"]."\n");
    }
    
    if (ocifetch($stmt))
    {
        return true;
    }
    
    return false;
    
}

function commit($conn)
{   
    if (!ocicommit($conn))
    echo 'BŁĄD COMMITU!';
    
}

function rollback($conn)
{   
    if (!ocirollback($conn))
    echo 'BŁĄD ROLLBACKA!';
}



// functions copied from the Internet
function SetServerOutput($c, $p)
{
    if ($p)
      $s = "BEGIN DBMS_OUTPUT.ENABLE(NULL); END;";
    else
      $s = "BEGIN DBMS_OUTPUT.DISABLE(); END;";
    $s = oci_parse($c, $s);
    $r = oci_execute($s);
    oci_free_statement($s);
    return $r;
} 


function GetDbmsOutput($c)
{
    $res = false;
    $s = oci_parse($c, "BEGIN DBMS_OUTPUT.GET_LINE(:LN, :ST); END;");
    if (oci_bind_by_name($s, ":LN", $ln, 255) &&
    oci_bind_by_name($s, ":ST", $st)) {
    $res = array();
    while (($succ = oci_execute($s)) && !$st)
      $res[] = $ln;
        if (!$succ)
         $res = false;
        }
    oci_free_statement($s);
    return $res;
} 



// Creating a cookie
session_start();
// Saving login and password
$_SESSION['LOGIN'] = $_POST['LOGN'];
$_SESSION['PASS'] = $_POST['PASW'];
$_SESSION['FROMFROM'] = $_POST['FRMM'];
$_SESSION['TOTOTOTO'] = $_POST['TTOO'];
$_SESSION['EXPECTED'] = $_POST['REXP'];
///////////////////////////////////

// Connecting with Oracle
$conn = oci_connect($_POST['LOGN'],$_POST['PASW']);

if (!$conn) {
    echo "oci_connect failed\n";
    $e = oci_error();
    echo nl2br($e['message']."\n");
}
else {
    $b = transliterateString($_POST['FRMM']);
    $c = transliterateString($_POST['TTOO']);
    $d = $_POST['REXP'];
    
    echo 'Results for data:<br>From: '.$b.'<br>To: '.$c.'<br> Number of results: '.$d.'<br><br>';
    
    SetServerOutput($conn, true);
    
    sendOracle($conn, "BEGIN zapytanie_5('$b', '$c', $d); END;", "Query failed");
    
    $output = GetDbmsOutput($conn);
    foreach ($output as $line)
        echo "$line<br>";
    
}
?>

<FORM ACTION="queries.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/>
      <INPUT TYPE="SUBMIT"   VALUE="Back">
</FORM>

<FORM ACTION="logout.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/>
      <INPUT TYPE="SUBMIT"   VALUE="Logout">
</FORM>



</BODY>
</HTML>
