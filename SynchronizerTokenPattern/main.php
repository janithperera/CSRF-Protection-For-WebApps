<?php session_start();?>
<!DOCTYPE html lang="en">
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login.css">
<title>Apply</title>
<!--styles-->
<link rel="stylesheet" href="libs/bootstrap-css/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/index.css">
<link rel="stylesheet" href="styles/style.css">
<!--Scripts-->
<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/bootstrap-css/js/bootstrap.min.js"></script>

<script type="text/javascript">
    window.onload=function(){
        $.ajax({
            url:'pageload.php',
            cache:false,
            success:function(data){
                var val=  document.getElementById("token");
                val.value=data;
            }
        });
    };
</script>
</head>
<body>
<div class="col-md-4 col-center-block" style="padding-top: 50px">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title" style="text-align: center;">Apply for a MSc</div>
        </div>
        <div style="padding: 10px">
            <form action="apply.php" method="post" name="document">
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
                    <button type="submit" class="btn btn-primary" style="width:100%">Apply</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>