<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>jQuery Validate - ThienAnBlog.com</title>    
    <style type="text/css">


    label.error {
        display: inline-block;
        color:blue;
    }
    </style>
    <!-- Load Thư viện jQuery vào trước khi load jQuery Validate-->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
</head>
<body>
    <form method="get" accept-charset="utf-8" style="width:600px;margin: 0px auto;" id="formDemo">
        <fieldset>
            <legend>Demo jQuery Validate - ThienAnBlog.com</legend>
            <?php 
            $stt=1;
            for($i=1;$i<=2;$i++){
            	?>
            <div>
                <p>Họ</p>
                <input name='ho<?php echo $stt?>[]' type='text'  required>
            </div> 
            <?php
        }
            ?>
            <button type="submit">Gửi</button>
        </fieldset>
    </form>
    <script type="text/javascript">
 
    $(document).ready(function() {
 
        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $("#formDemo").validate({
                    rules: {
                        ho1[]: "required",
                        ten: "required",
                        
                    },
                    messages: {
                        ho1[]: "Vui lòng nhập họ",
                        ten: "Vui lòng nhập tên",
                        
                    }
                });
    });
    </script>
</body>
</html>