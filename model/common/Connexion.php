<?php
/* =================================================== **
**             SINGLETON IMPLEMENTATION                **
** =================================================== */
/* Author    : Thierry CHARPENTIER                      *
*  Date      : 29.10.2018                               *
*  Version   : V1R0                                     *
* ==================================================== */
namespace Common;
class Connexion {
    private static $instance = null;
   /* =============================================== **
    **      CALL THIS METHOD TO GET SINGLETON          **
    ** =============================================== */
    public static function getInstance() {
        if(self::$instance === null) self::$instance = new static();
        return self::$instance;
    }
    /* =============================================== **
    **          MAKE CONSTRUCTOR PRIVATE               **
    ** -> nobody can call "new Instance"               **
    ** =============================================== */
    private function __construct() {}
    /* =============================================== **
    **      MAKE CLONE MAGIC METHOD PRIVATE            **
    ** -> nobody can clone instance                    **
    ** =============================================== */
    private function __clone() {}
    /* =============================================== **
    **      MAKE SLEEP MAGIC METHOD PRIVATE            **
    ** -> nobody can serialize instance                **
    ** =============================================== */    
    private function __sleep() {}
    /* =============================================== **
    **      MAKE WAKEUP MAGIC METHOD PRIVATE           **
    ** -> nobody can unserialize instance              **
    ** =============================================== */
    private function __wakeup() {}
}