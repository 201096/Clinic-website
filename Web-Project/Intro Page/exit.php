<?php
    setcookie('patients', $user['name'], time() - 3600, "/");
    $new_url = 'http://localhost:63342/Clinic-website/Web-Project%20(4)/Web-Project/Intro%20Page/Intro.html?_ijt=el4k6nn63ip4589of8tsu1pu57';
    header('Location: '.$new_url);
?>
