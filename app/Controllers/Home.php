<?php

namespace App\Controllers;
use App\Models\ItemModel;

class Home extends BaseController
{
    public function index()
    {
        $session = session();

        if ($session->has("user_id")) {
            return view("index");
        } else {
            return redirect()->to(base_url('/'))->withInput()->with('error','Your session is over, please login');
        }
    }

    public function createReq()
    {
        $session = session();

        if ($session->has("user_id")) {
            $goodsModel = new ItemModel();

            $items = $goodsModel->getItems();

            return view("create-request", ['items' => $items]);
        } else {
            return redirect()->to(base_url('/'))->withInput()->with('error','Your session is over, please login');
        }
    }

    public function listReq()
    {
        $session = session();

        if ($session->has("user_id")) {
            return view("list-request");
        } else {
            return redirect()->to(base_url('/'))->withInput()->with('error','Your session is over, please login');
        }
    }
}
