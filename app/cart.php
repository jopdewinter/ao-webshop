<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    private $products = [];
    private $session;

    function __construct($request) {
        $this->session = $request->session();
        $this->products = $this->session->has('cart') ? json_encode($this->session->get('cart')) : [];
        echo "<script>console.log('".json_encode($this->products)."');</script>";
    }

    public function add($id)
    {
    	if (empty($products)) {
            $this->products[] = ["id" => $id, "quantity" => 1];
            return;
        }

        $in_array = false;

        for ($i = 0; $i < count($this->products); $i++) {
            if ($this->products[$i]["id"] === $id) {
                $this->products[$i]["quantity"]++;
                $in_array = true;
            }
        }

        if (!$in_array) {
            $this->products[] = ["id" => $id, "quantity" => 1];
        }
    }
}