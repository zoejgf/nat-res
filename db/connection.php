<?php
/**
 * Provides a PDO style connection to the Database
 *
 * PHP Version 7
 *
 * @author Jacob Laqua <jlaqua@mail.greenriver.edu>
 * @author     Dmitriy Drkhipchuk <Darkhipchuk@mail.greenriver.edu> //This needs to reflect naturalresourcesjobs.greenrivertech.net
 * @author     Angelo Blanchard <ablanchard3@mail.greenriver.edu> //This needs to reflect naturalresourcesjobs.greenrivertech.net
 * @version 1.0
 */

/**
 * Establish a connection with the database
 *
 * @access public
 * @param string $dsn The name of the local db.
 * @param string $username The username of the db user
 * @param string $password The password for the user on the db
 */
function getConnection()
{
    $dsn = 'mysql:host=localhost;dbname=zfortinc_grcc';
    $username = 'zfortinc_sdev355';
    $password = 'C3Nkuwzd!';

    try {
        $connection = new PDO($dsn, $username, $password);

        //Throw and exception if pdo has trouble connecting
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $ex) {
        echo 'Exception connecting to DB: ' . $ex->getMessage();
        exit();
    }
}
?>
