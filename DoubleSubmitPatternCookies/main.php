<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--styles-->
<link rel="stylesheet" href="libs/bootstrap-css/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/index.css">
<link rel="stylesheet" href="styles/style.css">

<!--Scripts-->
<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/bootstrap-css/js/bootstrap.min.js"></script>

<title>Apply</title>

<script type="text/javascript">
    function getCookie() {
        var name = "admin" + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }                     
    </script>
</head>

<body>
<div class="col-md-4 col-center-block" style="padding-top: 50px">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title" style="text-align: center;">Apply for a MSc</div>
        </div>
        <div style="padding: 10px">
            <form class="form" action="apply.php" method="post" name="document">
                <div class="form-group">
                    <label>Token</label>
                    <input class="form-control" 
                           type="text" 
                           name="token" id="token" 
                           readonly/>
                </div>
                <div class="form-group">
                    <label>Full name</label>
                    <input class="form-control" 
                           type="text" 
                           placeholder="Your full name" 
                           name="fullname" 
                           id="fullname" required>
                </div>
                <div class="form-group">
                    <label>Bachelor's degree title</label>
                    <input class="form-control" 
                           type="text" 
                           placeholder="Your bachelor's degree title" 
                           name="degreetitle" 
                           id="degreetitle" required>
                </div>
                <div class="form-group">
                    <label>University</label>
                    <input class="form-control" 
                           type="text" 
                           placeholder="University you obtained your BSc." 
                           name="university" 
                           id="university" required>
                </div>
                <div class="form-group">
                    <label>Program</label>
                    <input class="form-control" 
                           type="text" 
                           placeholder="Program you are applying for" 
                           name="program" 
                           id="program" required>
                </div>
                <div>
                    <button type="submit"  class="btn btn-primary" style="width:100%;">Apply</button>
                </div>
            </form>
        </div>    
    </div>
</div>

<script>
    window.onload=function() {
        var csrfToken=getCookie();
        var x=document.cookie;                 
        var val=  document.getElementById("token");
        val.value=csrfToken;
    } 
</script>

</body>
</html>