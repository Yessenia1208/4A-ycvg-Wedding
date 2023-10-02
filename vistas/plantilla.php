
<?php

session_start();

if (isset($_GET["wedding"])) {
    if ($_GET["wedding"] == "home") {
        include "paginas/home.php";
    } else {
        if ($_GET["wedding"] == "about") {
            include "paginas/about.php";
        } else {
            if ($_GET["wedding"] == "blog-single") {
                include "paginas/blog-single.php";
            } else {
                if ($_GET["wedding"] == "blog") {
                    include "paginas/blog.php";
                } else {
                    if ($_GET["wedding"] == "contact") {
                        include "paginas/contact.php";
                    } else {
                        if ($_GET["wedding"] == "event") {
                            include "paginas/event.php";
                        } else {
                            if ($_GET["wedding"] == "gallery") {
                                include "paginas/gallery.php";
                            } else {
                                if ($_GET["wedding"] == "service-single") {
                                    include "paginas/service-single.php";
                                } else {
                                    if ($_GET["wedding"] == "service") {
                                        include "paginas/service.php";
                                    } else {
                                        if ($_GET["wedding"] == "story") {
                                            include "paginas/story.php";
                                        } else {
                                            if ($_GET["wedding"] == "register") {
                                                include "paginas/register.php";
                                            } else {
                                                if ($_GET["wedding"] == "login") {
                                                    include "paginas/login.php";
                                                } else {
                                                    if ($_GET["wedding"] == "users") {
                                                        include "paginas/users.php";
                                                    } else {
                                                        if ($_GET["wedding"] == "editar") {
                                                            include "paginas/editar.php";
                                                        } else {
                                                            include "paginas/error.php";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
?>