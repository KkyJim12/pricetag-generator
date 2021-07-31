<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function  __construct($image_id)
    {
        $this->image_id = $image_id;
    }

    public function model(array $row)
    {
        return new Product([
            'name' => $row[0],
            'price' => $row[1],
            'unit' => $row[2],
            'barcode' => $row[3],
            'image_id' => $this->image_id,
        ]);
    }
}
