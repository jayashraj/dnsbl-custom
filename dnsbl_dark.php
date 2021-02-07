<!--
 dnsbl_index.php

 part of pfSense (https://www.pfsense.org)
 Copyright (c) 2015-2021 Rubicon Communications, LLC (Netgate)
 Copyright (c) 2015-2020 BBcan177@gmail.com
 All rights reserved.

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if ($ptype['type'] == '-'): ?>
	<meta http-equiv="refresh" content="1">
	<?php endif; ?>

	<title>Site blocked via DNSBL</title>
</head>
<style type="text/css">

h1{
        font-size: 4em;
        color:#e5383b;
    }

    body{
        display:flex;
        justify-content: center;
        align-items:center;
        background-color: #161a1d;
        height:98vh;
        }
    p{
        color:#f5f3f4;
    }
    .container{

        display:flex;
        align-items: center;
        flex-direction: column;
    }
    .info{
        font-size:20px;
    }
    .more-info, a, footer{
        color: #b1a7a6;

    }
    a{
        text-decoration: none;

    }
    footer{
        position:fixed;
        bottom:20px;
        font-size: 12px;

    }
</style>

<body>
	<div class="container">
		<h1>Blocked</h1>
		<div class="info"><p>This website <span style="color: #e5383b;font-weight: bold;"><?=$ptype['HTTP_HOST']?></span>  has been blocked by your network administrator.</p>    </div> 
		<div class="more-info">
		<b>Referer:</b> <?=$ptype['HTTP_REFERER'];?>, <b>Client:</b>: <?=$ptype['REMOTE_ADDR'];?>, <b>Type:</b>: <?=$ptype['type'];?>, <b>Group: </b>: <?=$ptype['group'];?>, <b>Evaluated Domain:</b> <?=$ptype['evald'];?>, <b>Feed:</b> <?=$ptype['feed'];?> </div>
			
	</div>
    <footer>Powered by <b><a href="https://www.patreon.com/pfBlockerNG">pfBlockerNG</a> DNSBL</b>  </footer>

</body>
</html>
