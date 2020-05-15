<?php
require_once './selfphp/DbManager.php';

try {
    $db = getDb();
    $db->exec('MECHA KUCHA');
} catch (PODException $e) {
    print "エラーコード: {$e->getCode()} <br />";
    print "エラーメッセージ: {$e->getMessage()}";
}
