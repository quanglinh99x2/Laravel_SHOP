<?php
namespace App\Components;

use App\Menu;

class MenuRecursive{
    private $html = "";
    public function __construct(){
        $this->html = '';
    }
    public function menuRecursiveAdd($parentIdFindName="",$parent_id =0,$subMark=''){
        $data = Menu::where('parent_id',$parent_id)->get();

        foreach($data as $item){
            $strSelected = '';
            if(!empty($parentIdFindName) && $parentIdFindName == $item->id) {$strSelected = "selected";}
            $this->html .= "<option ".$strSelected." value=".$item->id.">".$subMark.$item->name."</option>";
            $this->menuRecursiveAdd($parentIdFindName,$parent_id = $item->id,$subMark."--");
        }
        return $this->html;
    }
}
