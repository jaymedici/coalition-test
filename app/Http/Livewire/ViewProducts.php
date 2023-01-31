<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewProducts extends Component
{
    protected $listeners = ['productAdded' => 'render'];
    public $editFormData = [];
    public $key;

    public function editProduct($key)
    {
        $this->key = $key;
        $products = $this->getJsonData();
        $this->editFormData = $products[$key];
        
        $this->dispatchBrowserEvent('showEditModal');
    }

    public function updateProduct()
    {
        $products = $this->getJsonData();
       
        $products[$this->key] = [
            'ProductName' => $this->editFormData['ProductName'],
            'Quantity' => $this->editFormData['Quantity'],
            'PricePerItem' => $this->editFormData['PricePerItem'],
            'Datetime' => now()->format('Y-m-d H:i:s'),
        ];

        file_put_contents(storage_path('app/Products.json'), json_encode(
            $products, JSON_PRETTY_PRINT));
    
        $this->dispatchBrowserEvent('hideEditModal');
        $this->editFormData = [];
        $this->render();
    }

    protected function getJsonData()
    {
        $jsonFile = file_get_contents(storage_path('app/Products.json'));
        $jsonData = json_decode($jsonFile, true);

        if (! is_array($jsonData)) return [];

        krsort($jsonData);
        return $jsonData;
    }

    protected function getTotalValueSum()
    {
        $products = $this->getJsonData();
        $totalValueSum = 0;

        foreach ($products as $product) {
            $totalValueSum += $product['Quantity'] * $product['PricePerItem'];
        }

        return $totalValueSum;
    }

    public function render()
    {
        $products = $this->getJsonData();
        $totalValueSum = $this->getTotalValueSum();

        return view('livewire.view-products', [
            'products' => $products,
            'totalValueSum' => $totalValueSum,
        ]);
    }
}
