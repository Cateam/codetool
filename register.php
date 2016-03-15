
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <title>Đăng ký</title>
            <link href="css/style.css" rel="stylesheet"/>
            <script src="http://code.jquery.com/jquery.js"></script>
    </head>
    <body>
        <div class="tong2">
            <div id="logo"></div>
            <div id="hi"></div>
            <div class="cont">
                <div id="main" class="l_cont">
                    <div id="box">
                        <h1 class="title">Đăng ký</h1>
                        <form id="login" action="" method="post" novalidate="novalidate">
                        <div id="errorcont">
                            <p>Sai tên Đăng nhập/ Mật khẩu</p>
                        </div>
                        <input type="text" class="ipt" id="ips_username" name="ips_username" placeholder="Tài khoản" autocomplete="off" aria-required="true" aria-invalid="false" class="valid">
                        <input type="password" class="ipt" id="ips_password" name="ips_password" placeholder="Mật khẩu" autocomplete="off">
                        <input type="repassword" class="ipt" id="ips_repassword" name="ips_repassword" placeholder="Nhập lại mật khẩu" autocomplete="off">
                        <input type="text" class="ipt" id="ips_email" name="ips_email" placeholder="Email" autocomplete="off">
                        <div style="margin: 0 auto; width: 304px;"></div> 
                        <button type="submit" id="lbtn" class="lsubmit">Đăng ký</button>
                        <div class="cbox" style="margin: 0px auto; width: 304px;text-align: center;">
                            <a href="#" id="forgotten">Đăng ký</a> | <a href="" id="forgotten">Đăng nhập</a>
                        </div>
                        </form>

                    </div>
                    <div id="blur"></div>
                </div>
            </div>
        </div>
    </body>
</html>