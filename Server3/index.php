<?php
   ini_set('session.cookie_domain', 'abc.com');
   session_start();
   echo "Server3:" . session_id();
   echo '<br/>';
   echo $_SESSION['name'];
   
   
   