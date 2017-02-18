<?php
   require_once "start.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xthml11/DTD/xthml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
       <title>Результаты поиска</title>
       <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
       <link rel="stylesheet" type="text/css" href="styles/main.css" />
   </head>
   <body>
       <table id="main">
          <tr>
              <?php 
                  require_once "blocks/top.php";
              ?>
              
           </tr>
           <tr>
               <td colspan="2">
                  <table cellpadding="0" cellspacing="0" id="content">
                      <tr>
                          <td>
                             <?php
                                 require_once "blocks/search_result.php"; 
                             ?>
                              
                          </td>
                          <td id="banners_240">
                             <?php
                                 require_once "blocks/banners_240.php"; 
                             ?> 
                              
                          </td>
                          
                      </tr>
                  </table>
                   
               </td>
           </tr>
           <?php
                                 require_once "blocks/footer.php"; 
                             ?>
       </table>
   </body>
    
</html>
