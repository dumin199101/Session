<?php
   ini_set('session.cookie_domain', 'abc.com');
   session_start();
   echo "Server1:" . session_id();
   $_SESSION['name'] = 'lieyan';
   
   
   
   