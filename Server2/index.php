<?php
   ini_set('session.cookie_domain', 'abc.com');
   session_start();
   echo "Server2:" . session_id();
   echo '<br/>';
   echo $_SESSION['name'];
   
   
   
   