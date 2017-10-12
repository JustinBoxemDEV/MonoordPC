<?php

$title1 = "test123";
$json = '{
    "result1": {
        "title": "'.$title1.'",
        "posts": [
            {
                "title": "How to Create an RSS Feed with PHP and MySQL",
                "img": "http://www.bewebdeveloper.com/images/uploads/how-to-create-an-rss-feed-with-php-and-mysql.jpg",
                "link": "http://www.bewebdeveloper.com/tutorial-about-how-to-create-an-rss-feed-with-php-and-mysql"
            },
            {
                "title": "Crop photo using PHP and jQuery",
                "img": "http://www.bewebdeveloper.com/images/uploads/crop-photo-using-php-and-jquery.jpg",
                "link": "http://www.bewebdeveloper.com/tutorial-about-crop-photo-using-php-and-jquery"
            },
            {
                "title": "Using Ajax with PHP/MySQL",
                "img": "http://www.bewebdeveloper.com/images/uploads/using-ajax-with-php-mysql.jpg",
                "link": "http://www.bewebdeveloper.com/tutorial-about-using-ajax-with-phpmysql"
            },
            {
                "title": "Using Ajax with native JavaScript",
                "img": "http://www.bewebdeveloper.com/images/uploads/using-ajax-with-native-javascript.jpg",
                "link": "http://www.bewebdeveloper.com/tutorial-about-using-ajax-with-native-javascript"
            }
        ]
    },
	
	"result2": {
        "title": "meep",
        "posts": [
            {
                "title": "Howdy",
                "img": "http://www.bewebdeveloper.com/images/uploads/how-to-create-an-rss-feed-with-php-and-mysql.jpg",
                "link": "http://www.bewebdeveloper.com/tutorial-about-how-to-create-an-rss-feed-with-php-and-mysql"
            },
            {
                "title": "Crop photo using PHP and jQuery",
                "img": "http://www.bewebdeveloper.com/images/uploads/crop-photo-using-php-and-jquery.jpg",
                "link": "http://www.bewebdeveloper.com/tutorial-about-crop-photo-using-php-and-jquery"
            },
            {
                "title": "Using Ajax with PHP/MySQL",
                "img": "http://www.bewebdeveloper.com/images/uploads/using-ajax-with-php-mysql.jpg",
                "link": "http://www.bewebdeveloper.com/tutorial-about-using-ajax-with-phpmysql"
            },
            {
                "title": "Using Ajax with native JavaScript",
                "img": "http://www.bewebdeveloper.com/images/uploads/using-ajax-with-native-javascript.jpg",
                "link": "http://www.bewebdeveloper.com/tutorial-about-using-ajax-with-native-javascript"
            }
        ]
    }
}';

$var = json_decode($json);
echo $var;
?>