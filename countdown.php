<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Person" lang="en-au">
	<head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
		<title>Camp Countdown - Reuben Walker</title>
		<meta name='description' content='This page should not be showing up in search results.'/>
        <script>
            //April 2015
            var getaway = 1428213600000;
            //September 2015
            //var getaway = 1442728800000;
            //April 2016
            //var getaway = 1460268000000;
            //September 2016
            //var getaway = 1474783200000;
            var d = new Date();
            var time = d.getTime();
            var countdown = Math.floor((getaway - time)/1000);
            countdown = countdown.toLocaleString();
            alert("The next camp is " + countdown + " seconds away.");
            close();
        </script>
        <?php include 'header.php' ?>
        
        <script>
            setTimeout("window.close()", 50);
        </script>
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