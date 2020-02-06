<?php

namespace App\Modules\FileHandler\Controller;

class FileController {
    
    /**
     * @Route("/world", name="world_list")
     */
    public static function world()
    {
        return 'Hello World, Composer!';
    }

}