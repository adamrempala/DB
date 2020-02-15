<HTML>

<HEAD>
    <TITLE> Logout </TITLE>
</HEAD>

<BODY>
<h2> Logout successful </h2>

<?PHP

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

// Creating a cookie
session_start();
// Saving login and password
$_SESSION['LOGIN'] = $_POST['LOGN'];
$_SESSION['PASS'] = $_POST['PASW'];
///////////////////////////////////

// Connecting with Oracle
$conn = oci_connect($_POST['LOGN'],$_POST['PASW']);

if (!$conn) {
    echo "oci_connect failed\n";
    $e = oci_error();
    echo nl2br($e['message']."\n");
}
else {
    //dropAll($conn);
    commit($conn);
}
?>

<FORM ACTION="login.html" METHOD="POST"> 
      <INPUT TYPE="SUBMIT"   VALUE="Main Page">
</FORM>

</BODY>
</HTML>
