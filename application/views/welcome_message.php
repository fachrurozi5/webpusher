<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Web Pusher</title>
	<link
    href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700'
    rel='stylesheet' type='text/css'>
		<link href="<?=base_url('assets/css/style.css')?>" type="text/css" rel='stylesheet' />
</head>
<body>
	<div class="body_container">

        <div id="header">
            <h1>Android Pusher Chat Application</h1>
            <p class='online_count'>
                <b>23</b> people online right now
            </p>
        </div>

        <div id="prompt_name_container" class="box_shadow">
            <p>Enter your name</p>
            <form id="form_submit" method="post">
                <input type="text" id="input_name" /> <input type="submit"
                    value="JOIN" id="btn_join">
            </form>
        </div>

        <div id="message_container" class="box_shadow">

            <ul id="messages">
            </ul>


            <div id="input_message_container">
                <form id="form_send_message" method="post" action="#">
                    <input type="text" id="input_message"
                        placeholder="Type your message here..." /> <input type="submit"
                        id="btn_send" onclick="send();" value="Send" />
                    <div class="clear"></div>
                </form>
            </div>
            <div>

                <input type="button" onclick="closeSocket();"
                    value="Leave Chat Room" id="btn_close" />
            </div>

        </div>

    </div>
</body>
</html>
