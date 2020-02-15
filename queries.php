<HTML>

<HEAD>
    <TITLE> Queries </TITLE>
</HEAD>

<BODY>
<h2> Queries </h2>

<?PHP

// Creating a cookie
session_start();
// Saving login and password
$_SESSION['LOGIN'] = $_POST['LOGN'];
$_SESSION['PASS'] = $_POST['PASW'];
///////////////////////////////////
?>

<FORM ACTION="logout.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/>
      <INPUT TYPE="SUBMIT"   VALUE="Logout">
</FORM>

<h3>Which user had most retweets to his tweets in the given period?</h3>

<FORM ACTION="zapytanie1.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      Results expected: <INPUT TYPE="NUMBER" NAME="REXP" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>

<h3>How popular was given hashtag during phases of a day in the given period?</h3>

<FORM ACTION="zapytanie2.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      Hashtag: <INPUT TYPE="TEXT" NAME="HSTG" VALUE=""><BR><BR>
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>

<h3>How big is average number of retweets, favourites, hashtags and mentions for Tweets created at period by people registrated in another period?</h3>

<FORM ACTION="zapytanie3.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      Registration from: <INPUT TYPE="DATE" NAME="RGFM" VALUE=""><BR><BR>
      Registration to: <INPUT TYPE="DATE" NAME="RGTO" VALUE=""><BR><BR>
      Tweets from: <INPUT TYPE="DATE" NAME="TWFM" VALUE=""><BR><BR>
      Tweets to: <INPUT TYPE="DATE" NAME="TWTO" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>

<h3>How many Tweets in given period were sent from every used source from given location?</h3>

<FORM ACTION="zapytanie4.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      Location: <INPUT TYPE="TEXT" NAME="LOCA" VALUE=""><BR><BR>
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>

<h3>Which pairs of people reply each other most often?</h3>

<FORM ACTION="zapytanie5.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/>
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      Results expected: <INPUT TYPE="NUMBER" NAME="REXP" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>


<h3>Who is mentioned most often in tweets containing given phrase?</h3>

<FORM ACTION="zapytanie6.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      Searched phrase: <INPUT TYPE="TEXT" NAME="SPHR" VALUE=""><BR><BR>
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      Results expected: <INPUT TYPE="NUMBER" NAME="REXP" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>

<h3>What was the most popular person mentioned and hashtag accompaning given hashtag each day from given period?</h3>

<FORM ACTION="zapytanie7.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      Hashtag: <INPUT TYPE="TEXT" NAME="SPHR" VALUE=""><BR><BR>
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>

<h3>How much Tweets from given period and containing given phrase were sent from each voivodeship city of Poland?</h3>

<FORM ACTION="zapytanie8.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      Searched phrase: <INPUT TYPE="TEXT" NAME="SPHR" VALUE=""><BR><BR>
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>

<h3>Who has got the biggest followers/following quotient?</h3>

<FORM ACTION="zapytanie9.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      Results expected: <INPUT TYPE="NUMBER" NAME="REXP" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>


<h3>Who from given location wrote most posts in given language?</h3>

<FORM ACTION="zapytanie10.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      Location: <INPUT TYPE="TEXT" NAME="LOCA" VALUE=""><BR><BR>
      Language (abbrev): <INPUT TYPE="TEXT" NAME="LING" VALUE=""><BR><BR>
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      Results expected: <INPUT TYPE="NUMBER" NAME="REXP" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>

<h3>How many users from given location writing during given period have descriptions? What is their average length?</h3>

<FORM ACTION="zapytanie11.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      Location: <INPUT TYPE="TEXT" NAME="LOCA" VALUE=""><BR><BR>
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>

<h3>Which words appear most often in usernames writing in a given period?</h3>

<FORM ACTION="zapytanie12.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      From: <INPUT TYPE="DATE" NAME="FRMM" VALUE=""><BR><BR>
      To: <INPUT TYPE="DATE" NAME="TTOO" VALUE=""><BR><BR>
      Results expected: <INPUT TYPE="NUMBER" NAME="REXP" VALUE=""><BR><BR>
      <INPUT TYPE="SUBMIT"   VALUE="Check">
</FORM>

</BODY>
</HTML>
