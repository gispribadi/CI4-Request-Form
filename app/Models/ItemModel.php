<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table            = 'm_goods';
    protected $primaryKey       = 'goods_id';
    protected $allowedFields    = ['goods_id', 'goods_name', 'goods_categoryid'];

    public function getItems()
    {
        return $this->select('goods_id AS item_id, goods_name AS item_name')
            ->where('goods_categoryid', 1)
            ->findAll();
    }
}
