<?php
$submitted = 0;

$poem = array();
array_push($poem, "World Peace Society and its sponsor, Growth Network, are bringing to your attention a way to solve one of the most serious problems in the World. Everybody should read and study it. Growth Network is also soon to introduce several new businesses that will not only allow you to advance your own life and objectives, but to also help promote our vision for peace and a better World.");
array_push($poem, "");
array_push($poem, "This May Interest You...");
array_push($poem, "");
array_push($poem, "A POSSIBLE ANSWER TO THE SYRIAN CONFLICT");
array_push($poem, ""); 
array_push($poem, "To all who are seriously concerned about this problem including President Obama and other world leaders.");
array_push($poem, "");
array_push($poem, "This is a suggestion that we think all should be discussing and will serve as the basis for a constructive solution to the situation. The whole world is at risk of greater involvement and turmoil and, in our opinion, though this proposal will raise many questions, it still gives us the concept of our best solution. It is based on the World Peace Now and Forever Peace Plan developed by World Peace Society and presented to the whole world as a way of permanently minimizing war and violence.");
array_push($poem, ""); 
array_push($poem, "1. We suggest the United States propose and encourage the formation of a multi-nation peace keeping police force, called the Syrian Peace Corporation, that will eliminate the ability of any government, group, or individual persons from shipping to or bearing arms within Syria. This multi-nation peacekeeping force will not only prevent arms from coming into Syria but will also prevent Syria from being aggressive toward any other nation."); 
array_push($poem, ""); 
array_push($poem, "2. This Syrian Peace Corporation should be made up of several nations, preferably those in the neighborhood of Syria, such as Turkey, Israel, Egypt, Jordan, Lebanon, and even can include the Assad government and other groups currently fighting in Syria, but they have to commit to ending war-making and violent actions. We believe that any groups now in Syria should not hold more than 10% of this corporation. We also feel that Russia, China, England, France, and Saudi Arabia should be members. And even Iran can be invited to join."); 
array_push($poem, "");
array_push($poem, "3. The purpose of this corporation is to bring immediate peace to Syria and preserve civil rights and liberty to all Syrian inhabitants. All parties to this agreement have to pledge they will not exercise any war or violence in Syria except through the control and action of the Syrian Peace Corporation. The percentage ownership of each corporate member also sets the amount they are responsible to contribute to the corporation. The current value of all armaments surrendered to the corporation can serve as part of a member's contribution."); 
array_push($poem, ""); 
array_push($poem, "4. A second purpose of this corporation is to support free elections for the Syrian people to form a representative government. Political activity is permitted as long as no violence or violation of civil rights is involved."); 
array_push($poem, ""); 
array_push($poem, "Now, we recognize many critics will claim this plan can never be achieved. If countries with such diverse objectives could work together, it seems we would never have war. But the truth is history has shown us that many nations with many different interests have cooperated and fought together when they felt they had a serious common enemy. Witness the cooperation of Russia and the United States in the Second World War because they felt Hitler was such a formidable enemy. Our common enemy now is that many nations face world turmoil if we cannot solve the Syrian problem. Besides, if we cannot get Russia, China, and Iran involved, we have at least made foreign policy progress by inviting them to join.");
array_push($poem, ""); 
array_push($poem, "A corporation is not the only form that could tie this group together, but it is one of the most effective means of joining people in a common pursuit. We have many examples of multi-national corporations operating in many countries to show us that this form of union works effectively."); 
array_push($poem, ""); 
array_push($poem, "The details of this plan of action can vary somewhat, but we feel a version of this idea is very real and possible. We just have to be devoted to the concept of bringing it forward and endeavor to spend the energy to create it."); 
array_push($poem, "");
array_push($poem, "One observation should be recognized. Ire and distrust have affected more and more Americans who are outraged that we cannot enact measures to better ensure against the horrible mass shootings and human-directed violence attacks that have killed and injured so many of our people. These are horrible crimes, and we should find every means we can to prevent them. But let us remember, such crimes have murdered and injured only a few hundred people, and as bad as that is, war and violence outside the United States have killed and injured over hundreds of thousands of people and even, in addition, caused destruction of valuable property. Isn't it time the world becomes more serious about ending war and violence. And though believing peace is possible and working toward it on every level is important, we have to enable means of restricting war and violence now, and it must be able to be applied in our current environment and fit in with the way nations are presently structured. We think the World Peace Now and Forever Plan offers that opportunity. "); 
array_push($poem, ""); 
array_push($poem, "Most leaders talking about solutions in Syria are advocating sending arms and armaments to Syrian rebels, but no-one is quite sure who are the good rebels and who are the bad rebels. In such a situation, the last thing we should want to do is send more armaments into Syria. The real answer is to disarm all Syrian factions and show that the only force in Syria will be the Syrian Peace Corporation. If any groups want to use arms in Syria, they will have to do it under the control and maintenance of the Syrian Peace Corporation. In our opinion, that is the only way of maintaining lasting peace. The best way to peace throughout the world is to reduce war and violence, not to increase them."); 
array_push($poem, ""); 
array_push($poem, "Question not whether this can be done, but focus on why this will not work and what is a better alternative. ");
array_push($poem, ""); 
array_push($poem, ""); 
array_push($poem, "David Levene"); 
array_push($poem, "Founder and Managing Director of World Peace Society"); 
array_push($poem, "155 West 68th Street; New York, NY 10023");
array_push($poem, "Tel: 212-873-9277"); 
array_push($poem, ""); 
array_push($poem, "copyright Growth Network. All Rights Reserved");
array_push($poem, ""); 
array_push($poem, "WorldPeaceSociety.org and WayToPeace.org can be viewed at your leisure.");

if ($_REQUEST['action'] == "send") {
     $fname = trim($_REQUEST["fname"]);
     $lname = trim($_REQUEST["lname"]);
     $message = trim($_REQUEST["message"]);
     $fromemail = strtolower(trim($_REQUEST["fromemail"]));
     $toemail = strtolower(trim($_REQUEST["toemail"]));
     
     $body = join("\n", $poem);
     mail($toemail, "Thought this might interest you", $body, "From: ".$fromemail . "\r\nBcc: info@411xd.com\r\n"); 
     $submitted = 1;
}
?>
<html>
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
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/css/styles.css" type="text/css" media="all" title="Default">

</head>

<body link="#666666" alink="#660000" vlink="#333333">



<table width="720" border="0" cellspacing="0" align="center" cellpadding="0" bgcolor="#FFFFFF">

  <tr> 
    <td width="100" valign="top">
    <table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
	    <td width="100"><img src="images/blank.gif" width="1" height="85" border="0"></td>
	</tr>
	</table>
	</td>
    <td width="30"><img src="images/blank.gif" width="10" border="0"></td>
    <td width="720" valign="top" align="left">
<?php
if ($submitted) {
?>
<div style="color: #990033;"><b>Thank you for sending the transcript. Send it to another friend of contact</b></div>
<?php
}
?>
	<table width="100%" border="0" cellpsacing="0" cellpadding="0">
	<tr>


<img src="images/blank.gif" height="1" width="200" border="0">
<a href="http://www.syrianconflict.org"><img src="http://www.syrianconflict.org/images/syrianconflict_banner.jpg" title="Syrian Conflict" alt="Syrian Conflict" border="0"></a>
<br>
<br>
<font size="3"><font color="000000">

<br>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="990033"><b>Send this transcript to a friend or contact.</b></font>
<form METHOD="POST" ACTION="">
  <input type="hidden" name="action" value="send">
  <table border="0" cellpadding="0" cellspacing="0" width="750">
    <tr>
      <td width="15"></td>
      <td width="601" valign="top" class="ct">
<div align="center"><center>
      </center></div>
<table border="0" cellpadding="2" cellspacing="0" width="100%" class="ct">
        <tr>
          <td><img src="images/blank.gif" width="1" height="20"></td>
          <td><img src="images/blank.gif" width="160" height="1"></td>
          <td><img src="images/blank.gif" width="10" height="1"></td>
          <td><img src="images/blank.gif" width="400" height="1"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><table border="0" cellpadding="6" cellspacing="0" width="100%" class="ct">
            <tr>
              <td class="ctSmall"><font color="990033">*required</font></td>
            </tr>
          </table>
          </td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top">Message</td>
          <td></td>
          <td><input type="text" name="Subject" size="28" value="Thought this would interest you."></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top">Your First Name</td>
          <td></td>
          <td><input type="text" name="fname" size="35" value=""></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top">Your Last Name</td>
          <td></td>
          <td><input type="text" name="lname" size="35" value=""></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top"><font color="990033">*</font>Your Email</td>
          <td></td>
          <td><input type="text" name="fromemail" size="35" value=""></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top"><font color="990033">*</font>Your Contact's Email</td>
          <td></td>
          <td><input type="text" name="toemail" size="35"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td> </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top"></td>
          <td></td>
          <td><input type="submit" value="Send Transcript" name="rAction"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>Please click the button only once.</td>
        </tr>
        <tr>
          <td></td>
          <td colspan="3"><table cellspacing="0" cellpadding="0" border="1" width="100%" class="ctSmall">
          </table>
          </td>
        </tr>
      </table>
      <div align="center"><center><table border="1" cellpadding="8" cellspacing="0" width="96%">
      </table>
      </center></div></td>
      <td width="9"></td>
    </tr>
    <tr>
      <td width="15" height="15"></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</form>
	</tr>
	</table>
	</td>
	<td width="10"><img src="images/blank.gif" width="10" border="0"></td>
    <td valign="top" width="450" align="left"> 
      <p><br>
   </td>
  </tr>
</table>
<p align="center">
<span class="footer">




<center>
<br>
<font size="1">
&copy; Growth Network. All rights reserved.</font></span>
</center>
</p>
</body>
</html>