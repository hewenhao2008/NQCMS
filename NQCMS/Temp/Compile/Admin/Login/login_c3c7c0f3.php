<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?>﻿<!DOCTYPE html>
<html>
<head runat="server">
<title>管理员登录</title>
<link href="http://localhost/11/1101/NQCMS/Admin/View/Login/css/main.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/11/1101/NQCMS/Admin/View/Login/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="login-panel">
    <table class="login-context">
        <tr>
            <td width="400" align="center">
            </td>
            <td align="center">
                <table>
                    <tr>
                        <td height="40" align="center"><img src ="http://localhost/11/1101/NQCMS/Admin/View/Login/images/login_tit.png" alt="logo"/></td>
                    </tr>
                </table>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td width="80" height="35" align="right">帐 号：</td>
                            <td align="left"><input type="text" id="txtAccount" class="txt" name="username"></td>
                        </tr>
                        <tr>
                            <td width="80" height="35" align="right">密 码：</td>
                            <td align="left"><input type="password" id="txtLoginPwd" class="txt" name=password></td>
                        </tr>
                        <tr>
                            <td width="80" height="35" align="right">验证码：</td>
                            <td align="left">
                                <table>
                                    <tr>
                                        <td width="100" align="left">
                                            <input type="text" id="txtVerifyInput" maxlength="4" class="verify-input" runat="server" name="code">
                                        </td>
                                        <td align="left" valign="middle">
                                            <a href="javascript:void(0);" onclick="window.refresh_verify_code()">
                                            
                                                <img id="imgVerifyCode" src="<?php echo U('Admin/Login/code');?>" alt="验证码" width="60" height="25" title="验证码不区分大小写，点击刷新" onclick='this.src="<?php echo U('Admin/Login/code');?>&_"+Math.random()'/>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="80" height="35" align="right"></td>
                            <td align="left"><input type="submit" value="登 录" class="btn-login"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</div>

</body>
</html>