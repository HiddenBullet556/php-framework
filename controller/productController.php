<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'home':
        $sql = "SELECT *
                FROM product
                ORDER BY name";

        $result = $mysql->query($sql);

        while ($row = $result->fetch_assoc()) {
            print_r($row);
            exit;
        }

        include( APP_VIEW .'/product/productSubNav.php' );
        include( APP_VIEW .'/product/homeView.php' );
        break;

    default:
        include( APP_VIEW .'/product/productSubNav.php' );
        include( APP_VIEW .'/product/homeView.php' );
        break;
}


# Include html footer
include( APP_VIEW . '/footer.php' );
