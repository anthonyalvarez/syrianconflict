<?php 
$submitted = 0;
$errmsg = "";
if ($_REQUEST['action'] == "add") {
       $first_name = trim($_REQUEST['first_name']);
       $last_name = "1000";
       $address_1 = trim($_REQUEST['address_1']);
       $essay1 = trim($_REQUEST['essay1']);
       $phone = trim($_REQUEST['phone']);
       $city = trim($_REQUEST['city']);
       $state = trim($_REQUEST['state']);
       $country = trim($_REQUEST['country']);
       $zip = trim($_REQUEST['zip']);
       $email = strtolower(trim($_REQUEST['email'])); //lower case email address - case insensitive

    //required field check
    if ($first_name == "") $errmsg .= "Please enter your name.\\n";
	if ($errmsg == "") {
		require_once '../php_inc/db.php';
		$dblink = mysql_connect($dbhost, $dbuser, $dbpass);
		mysql_select_db($dbname, $dblink);
		//insert subscription
		$sql = sprintf("INSERT INTO peace_petitions (" .
	            "first_name, " .
                            "last_name, " .
                            "address_1, " .
                            "essay1, " .
                            "phone, " .
                            "email, " .
                            "city, " .
                            "state, " .
                            "country, " .
                            "zip, " .
				"sign_date " .
				") VALUES (" .
				"'%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', now())",
                             mysql_real_escape_string($first_name),
                             mysql_real_escape_string($last_name),
                             mysql_real_escape_string($address_1),
                             mysql_real_escape_string($essay1),
                             mysql_real_escape_string($phone),
                             mysql_real_escape_string($email),
                             mysql_real_escape_string($city),
                             mysql_real_escape_string($state),
                             mysql_real_escape_string($country),
                             mysql_real_escape_string($zip)
                         );
		mysql_query($sql);
		$submitted = 1;
		mysql_close($dblink);
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en-US">
<head>
<title>Syrian Conflict</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="en-US">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="imagetoolbar" content="no">
<meta name="CATEGORY" content="document">
<meta name="COPYRIGHT" content="Copyright &#169; Growth Network. All rights reserved.">
<meta name="DESCRIPTION" content="Syrian Conflict">
<meta name="DISTRIBUTION" content="global">
<meta name="KEYWORDS" content="Syrian Conflict, Growth Network, World Peace Society, David Levene">
<meta name="OBJECTTYPE" content="Homepage">
<meta name="RATING" content="General">
<meta name="RESOURCE-TYPE" content="document">
<meta name="ROBOTS" content="index, follow">
<meta name="MSSmartTagsPreventParsing" content="TRUE">
<meta name="DC.language" content="en-US">
<meta name="DC.title" content="Growth Network">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/css/styles.css" type="text/css" media="all" title="Default">
<script type="text/javascript">
function validate(f) {
	if (f) {
		var emailfilter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (emailfilter.test(f.email.value)) return true;
	}
	alert("Please enter a valid e-mail address");
	return false;
}
</script>
</head>
<body link="#666666" alink="#660000" vlink="#333333" style="max-width: 1024px;">
<table align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="720">
<tr>
<td align="left" valign="top" width="720">

<img src="/images/blank.gif" alt="" border="0" width="800" height="1">
<center>
<a href="http://www.syrianconflict.org"><img src="http://www.syrianconflict.org/images/syrianconflict_banner.jpg" alt="Syrian Conflict" title="Syrian Conflict" border="0"></a>
<br>
<br>
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0"
 WIDTH=720 HEIGHT=400>
 <PARAM NAME=movie VALUE="http://www.syrianconflict.org/images/SyrianConflict.mp4"> <PARAM NAME=quality VALUE=high> <PARAM NAME=bgcolor VALUE=#FFFFFF> <EMBED src="http://www.syrianconflict.org/images/SyrianConflict.mp4" quality=high bgcolor=#FFFFFF  WIDTH=720 HEIGHT=400 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
</OBJECT>
<br>
<br>
<font size="3">
<strong>World Peace Society and its sponsor, Growth Network, are bringing to your attention a way to solve one of the most serious problems in the World. Everybody should read and study it. Growth Network is also soon to introduce several new businesses that will not only allow you to advance your own life and objectives, but to also help promote our vision for peace and a better World. 
</strong></center>
<br>
<br>
<i><u>This May Interest You…  </u></i>
<br>
<br>
<center><strong>A POSSIBLE ANSWER TO THE SYRIAN CONFLICT</strong>
<br>
<br>
To all who are seriously concerned about this problem including President Obama and other world leaders.
<br>
</center>
<br>
This is a suggestion that we think all should be discussing and will serve as the basis for a constructive solution to the situation.  The whole world is at risk of greater involvement and turmoil and, in our opinion, though this proposal will raise many questions, it still gives us the concept of our best solution.  It is based on the World Peace Now and Forever Peace Plan developed by World Peace Society and presented to the whole world as a way of permanently minimizing war and violence.
<br>

<ol>
<li>We suggest the United States propose and encourage the formation of a multi-nation peace keeping police force, called the Syrian Peace Corporation, that will eliminate the ability of any government, group, or individual persons from  shipping to or bearing arms within Syria.  This multi-nation peacekeeping force will not only prevent arms from coming into Syria but will also prevent Syria from being aggressive toward any other nation.   
</li>
<br>
<li>This Syrian Peace Corporation should be made up of several nations, preferably those in the neighborhood of Syria, such as Turkey, Israel, Egypt, Jordan, Lebanon, and even can include the Assad government and other groups currently fighting in Syria, but they have to commit to ending war-making and violent actions.  We believe that any groups now in Syria should not hold more than 10% of this corporation.  We also feel that Russia, China, England, France, and Saudi Arabia should be members.  And even Iran can be invited to join.
</li>
<br>
<li>The purpose of this corporation is to bring immediate peace to Syria and preserve civil rights and liberty to all Syrian inhabitants.  All parties to this agreement have to pledge they will not exercise any war or violence in Syria except through the control and action of the Syrian Peace Corporation.  The percentage ownership of each corporate member also sets the amount they are responsible to contribute to the corporation.  The current value of all armaments surrendered to the corporation can serve as part of a member’s contribution.  
</li>
<br>
<li>A second purpose of this corporation is to support free elections for the Syrian people to form a representative government.  Political activity is permitted as long as no violence or violation of civil rights is involved.  
</li>
</ol>
Now, we recognize many critics will claim this plan can never be achieved.   If countries with such diverse objectives could work together, it seems we would never have war. But the truth is history has shown us that many nations with many different interests have cooperated and fought together when they felt they had a serious common enemy.  Witness the cooperation of Russia and the United States in the Second World War because they felt Hitler was such a formidable enemy.  Our common enemy now is that many nations face world turmoil if we cannot solve the Syrian problem.  Besides, if we cannot get Russia, China, and Iran involved, we have at least made foreign policy progress by inviting them to join.
<br>
<br>
A corporation is not the only form that could tie this group together, but it is one of the most effective means of joining people in a common pursuit.  We have many examples of multi-national corporations operating in many countries to show us that this form of union works effectively.
<br>
<br>
The details of this plan of action can vary somewhat, but we feel a version of this idea is very real and possible.  We just have to be devoted to the concept of bringing it forward and endeavor to spend the energy to create it.
<br>
<br>
One observation should be recognized.  Ire and distrust have affected more and more Americans who are outraged that we cannot enact measures to better ensure against the horrible mass shootings and human-directed violence attacks that have killed and injured so many of our people.  These are horrible crimes, and we should find every means we can to prevent them.  But let us remember, such crimes have murdered and injured only a few hundred people, and as bad as that is, war and violence outside the United States have killed and injured over hundreds of thousands of people and even, in addition, caused destruction of valuable property.  Isn’t it time the world becomes more serious about ending war and violence.  And though believing peace is possible and working toward it on every level is important, we have to enable means of restricting war and violence now, and it must be able to be applied in our current environment and fit in with the way nations are presently structured.  We think the World Peace Now and Forever Plan offers that opportunity. 
<br>
<br>
Most leaders talking about solutions in Syria are advocating sending arms and armaments to Syrian rebels, but no-one is quite sure who are the good rebels and who are the bad rebels.  In such a situation, the last thing we should want to do is send more armaments into Syria.  The real answer is to disarm all Syrian factions and show that the only force in Syria will be the Syrian Peace Corporation.  If any groups want to use arms in Syria, they will have to do it under the control and maintenance of the Syrian Peace Corporation.  In our opinion, that is the only way of maintaining lasting peace.  The best way to peace throughout the world is to reduce war and violence, not to increase them. 
<br>
<br>
Question not whether this can be done, but focus on why this will not work and what is a better alternative.
<br>
<br>
<br>
David Levene
<br>
Founder and Managing Director of World Peace Society
<br>
155 West 68th Street; New York, NY 10023
<br>
Tel: 212-873-9277
<br>
<br>
</font>
<font size="2">&#169; Growth Network. All Rights Reserved.</span></font>
<br>
<br>
<font size=3"><a href="syrianconflict_transcript.php"><font size="3"><b>CLICK HERE</font></a> to email this transcript to a friend or contact.</b></font>
<br>
<font size="1"><b>
 This information is not collected</b></font><br>
<br>
<font size="2">
CLICK HERE to view <a href="http://www.worldpeacesociety.org.">WorldPeaceSociety.org</a> and <a href="http://www.waytopeace.org.">WayToPeace.org</a>
<br>
<br>
<br>
</font>
<br>
<font color="#000000" size="3"> <strong>Comment</strong></font>
<br>
<font size="1">
limit 500 words
<br>
Name & Comment will be shown</font>
<table><tr><td>
<form name="joinform" action="index.php" method="post" onSubmit="return validate(this);"><pre><input type="hidden" name="action" value="add">
&nbsp;<span style="text-align: left;">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="text-align: right;"><input type="text" name="first_name" size="20"></span>
&nbsp;<span style="text-align: left;">Comment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="text-align: right;"><input type="text" name="essay1" size="100"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit"></pre></form><br>
</td></tr></table>

</td>
</tr>
<tr>
<td>
<?php

$list = "";
require_once '../php_inc/db.php';

$dblink = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $dblink);
$sql = "SELECT " .
              "first_name, " .
              "last_name, " .
              "sign_date, " .
        "essay1 " .
		"FROM peace_petitions  where last_name='1000' " .
		"ORDER BY sign_date DESC";
		
$result = mysql_query($sql);		
if ($result) {
	while ($row = mysql_fetch_row($result)) {		
		$i = 0;
              $first_name = $row[$i++];
              $last_name = $row[$i++];
              $sign_date = $row[$i++];
		$essay1 = $row[$i++];
		$list .= $first_name."  <br> ".$sign_date." <br> ".$essay1."
        <br>___________________________________<br><br>" ;
              $list .= "\n";
	}
	mysql_free_result($result);
}
mysql_close($dblink);?>

<?= $list ?><br>
</td>
</tr>
</table>
<br>
<table>
<tr>
<td valign="top" width="200">
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="100"><img src="images/1by1.gif" alt="" border="0" width="1" height="5"></td>
</tr>
</table>
</td>
<td align="left" valign="top" width="600">
</td>
</tr>
</table>
<div align="center">
<table width="63%"><tr><td align="left">
<br>
</td></tr></table></div>
<p align="center">
<span class="footer">
<strong>
<br>
</strong>
</p>
<?php 
	//alert error message if any
	if ($errmsg != "") {
?>
<script type="text/javascript">
<!-- 
	alert("<?= $errmsg ?>");
// -->
</script>
<?php	} ?>
</body>
</html>
