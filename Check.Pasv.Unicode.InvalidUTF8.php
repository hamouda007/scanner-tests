<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Unicode invalid UTF8</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Check.Pasv.Unicode.InvalidUTF8.cs</h1>
<p>1 UTF-8 issue with 7 alerts.</p>
<p>1 null byte issue with 1 alert</p>

<ol>
<li><strong>Invalid UTF-8 byte stream </strong> An ill-formed UTF-8 byte stream was detected</li>
</ol>
<br />

<h2>The following texts each contain illformed utf8 byte sequence</h2>
<p>Embedded  Null</p>
<p>Illformed �utf8 1</p>
<p>Illformed �utf8 2</p>
<p>Illformed ð�utf8 3</p>
<p>Illformed �utf8 4</p>
<p>Illformed ��utf8 5</p>



</body>
</html>�