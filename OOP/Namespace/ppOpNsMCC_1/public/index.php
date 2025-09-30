<?php
// Подключение нескольких классов командой use в ООП в PHP
namespace Projeck;

include_once('core/admin/Model.php');
include_once('core/users/storage/Data.php');

use \core\admin\Model;
use \core\users\storage\Data;

class Test {
    public $model;
    public $data;
    public function __construct() {
        $this->model = new Model;
        $this->data  = new Data;
    }
}
echo (new Test)->model;
echo '<br/>';
echo (new Test)->data;

?>
