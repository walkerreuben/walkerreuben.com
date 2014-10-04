<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Person" lang="en-au">
	<head>
		<title>Contact Me - Reuben Walker</title>
		<meta name='description' content="The easiest way to contact me, unless you know my details."/>
        <?php include 'header.php' ?>
        <div class="body">
            <h1 id="logo"></h1>
            <h3>Thank you for contacting me. I'll be in touch with you soon.</h3>
            <p>Looking to get in touch, but don't have my details? Simply fill out the form and hit submit.
                <br/>
                <form name="contactform" method="post" action="php/email.php">
                <table width="450px">
                    <tr>
                        <td valign="top">
                            <label for="first_name">First Name *</label>
                        </td>
                        <td>
                            <input type="text" name="first_name" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="last_name">Last Name *</label>
                        </td>
                        <td valign="top">
                            <input type="text" name="last_name" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="last_name">Email Address *</label>
                        </td>
                        <td valign="top">
                            <input type="text" name="email" maxlength="80" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="last_name">Telephone Number</label>
                        </td>
                        <td valign="top">
                            <input type="text" name="telephone" maxlength="30" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="last_name">Comments *</label>
                        </td>
                        <td valign="top">
                            <input type="text" name="comments" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
                </form>
                <br/>
                <br/>
            </p>
            <script><!--
                google_ad_client = "ca-pub-2120752570687804";
                /* 728 x 90 */
                google_ad_slot = "7406164202";
                google_ad_width = 728;
                google_ad_height = 90;
            //-->
            </script>
            <script src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
            <p>
                <br/>
            </p>
<?php include 'footer.php' ?>