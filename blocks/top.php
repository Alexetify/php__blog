<tr>
              
              <td colspan="2" id="header">
                 <h1>М о й   б л о г</h1>
                 <p>
                     <img src="images/me.jpg" alt="Шапка" />
                 </p>
                  
              </td>
          </tr>
          <tr>
              <td colspan="2">
                 <hr />
                  
              </td>
          </tr>
          <tr>
              <td colspan="2" id="search">
                 <form name="search" action="search.php" method="get">
                 <p>
                 <input type="text" name="words" value="Поиск..." onfocus="if (this.value=='Поиск...') this.value='';" onblur="if(this.value=='') this.value='Поиск...'" />
                 <input type="submit" name="button_search" value="Найти" />
                 </p>
                 </form>
              </td>
          </tr>
          <tr>
              <td colspan="2">
                 <hr />
                  
              </td>
          </tr>
           <tr>
               <td>
                   <table id="topmenu">
                      <tr>
                          <td>
                              <a href="index.php">Главная</a>
                          </td>
                          <td>
                              <a href="reg.php">Регистрация</a>
                          </td>
                          <td>
                              <a href="articles.php">Статьи</a>
                          </td>
                          <td>
                              <a href="guestbook.php">Гостевая книга</a>
                          </td>
                      </tr>
                       
                   </table>
               </td>
               <td class="right">
                  <?php 
                      if (checkUser($_SESSION["email"], $_SESSION["password"])) 
                          require_once "blocks/user_panel.php";
                      else require_once "blocks/auth_form.php";
                  ?>
                   
               </td>
           </tr>
           <tr>
               <td colspan="2">
                  <hr />
                   
               </td>
           </tr>