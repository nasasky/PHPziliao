<?php
    function ExceptionHandle($exception){
       echo "<b>异常信息：</b>".$exception->getMessage();
    }
    set_exception_handler("ExceptionHandle");
    throw new Exception("你没有捕获的异常来了");
?>
