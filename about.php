<?php
@(include('config.php')) or header('Location:setup.php');
require_once 'layout-headermd.php';
require_once('version.php');
?>
<?php
require_once('lib-core.php');
if (isset($_SESSION['role']) && $_SESSION['role'] == "adm") {
    echo "
    <h1>About Lynk</h1>
    <br>
    <dl>Build Information
        <dt>Version: $version
        <dt>Release date: $reldate
        <dt>App Build : $wsn by $wsa  on $wsb        <dt>
    </dl>You are seeing the information above because you are logged in as an Administrator.<br />";
}

?>
<br><p>Lynk is one of the hundreds of URL shortening services that you've probably used before. We're focused on maintaining and improving a secure URL shortening service that is elegant, easy to use, and provides detailed statistics for zeroing in on how to better serve your audience.</p><br>
<p><?php echo $wsn;?> is a fork of Polr, an open source, minimalist link shortening platform. Check out <a href='https://github.com/Cydrobolt/polr'>its Github page</a> or its <a href="//project.polr.me">project site</a>.
    <br>Polr is licensed under the GNU GPL License.</p>
<div style="font-size: 70%; padding-top: 40px">
    The GNU General Public License v3
    <br>
    Copyright (C) 2013-2015 Chaoyi Zha, the Polr Project
    <br />
    This program is free software: you can redistribute it and/or modify<br />
    it under the terms of the GNU General Public License as published by<br />
    the Free Software Foundation, either version 3 of the License, or<br />
    (at your option) any later version.<br />
    <br />
    This program is distributed in the hope that it will be useful,<br />
    but WITHOUT ANY WARRANTY; without even the implied warranty of<br />
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the<br />
    GNU General Public License for more details.<br />
    <br />
    You should have received a copy of the GNU General Public License<br />
    along with this program.  If not, see <a href='http://www.gnu.org/copyleft/gpl.html'>http://www.gnu.org/copyleft/gpl.html</a>.
</div>
<?php
require_once 'layout-footermd.php';
?>
