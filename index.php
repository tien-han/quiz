<?php
/**
 * 328/quiz/index.php
 * Simple MVC using the Fat-Free framework for the Quiz.
 * @author Tien Han
 * @date 5/2/2024
 * @version 1.0
 */

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Require the autoload file
    require_once('vendor/autoload.php');

    //Instantiate the F3 Base class (Fat-Free)
    $f3 = Base::instance();

    //Define a default route
    $f3-> route('GET /', function() {
        //Render a view page
        $view = new Template();
        echo $view->render('views/homepage.html');
    });

    $f3-> route('GET /midterm-survey', function() {
        //Render a view page
        $view = new Template();
        echo $view->render('views/survey.html');
    });

    //Run Fat-Free
    $f3->run();
?>