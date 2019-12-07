<?php
include_once(ROOT.'/models/Storage.php');

class StorageController {
    public function get_products_list()
    {
        $goods = Storage::get_products_list();
        if($goods){
            include_once(ROOT.'/views/includes/header.php');
            include_once(ROOT.'/views/main/main.php');
            include_once(ROOT.'/views/includes/footer.php');
        }
    }

    public function get_good($name) {
        try {
            $goods = Storage::get_good($name);
        } catch (No_good $e) {
            echo $e->getMessage();
        }

        include_once(ROOT.'/views/includes/header.php');
        include_once(ROOT.'/views/main/main.php');
        include_once(ROOT.'/views/includes/footer.php');
    }
}