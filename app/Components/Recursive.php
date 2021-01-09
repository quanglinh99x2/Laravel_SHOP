<?php

namespace App\Components;

class Recursive{

    private $data;
    private $htmlSelect;
    public function __construct($data){
        $this->data = $data;
    }
    // Hàm đệ quy cho category
    public function categoryRecursive($parentId,$id=0,$text =''){
        //$data = Category::all();

        foreach($this->data as $value){
            if($value['parent_id'] == $id ){
                $strSelected = '';
                if (!empty($parentId) && $parentId == $value['id']) { $strSelected = "selected";}
                $this->htmlSelect .= "<option ".$strSelected." value=".$value['id'].">".$text.$value['name']."</option>";
                $this->categoryRecursive($parentId,$value['id'],$text.'--');
            }
        }
        return $this->htmlSelect;
    }
}
?>
