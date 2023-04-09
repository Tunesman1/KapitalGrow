<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];

?>


<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto  <?php

                                            if (strpos($url, "index.php")) {
                                                echo "active";
                                            } ?> " href="index.php">Home</a></li>

        <li><a class="nav-link scrollto  <?php

                                            if (strpos($url, "faqs.php")) {
                                                echo "active";
                                            } ?>  " href="faqs.php">FAQs</a></li>

        <li><a class="nav-link scrollto <?php

                                        if (strpos($url, "contact.php")) {
                                            echo "active";
                                        } ?>" href="contact.php">Contact</a></li>
        <li style="padding-left:90px ;"><a class="getstarted scrollto  <?php

                                                                        if (strpos($url, "download.php")) {
                                                                            echo "active";
                                                                        } ?> " href="download.php">Download</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->