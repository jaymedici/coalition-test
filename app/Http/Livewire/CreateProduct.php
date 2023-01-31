<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateProduct extends Component
{
    public $formData = [];

    public function addProduct()
    {
        Validator::make($this->formData, [
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ])->validate();

        $data = $this->getFormData();
        $jsonData = $this->readExistingJson();
        $jsonData[] = $data;

        $this->saveDataToJsonFile($jsonData);

        $this->emit('productAdded');
        $this->formData = [];
    }

    protected function getFormData(): array
    {
        return [
            'ProductName' => $this->formData['name'],
            'Quantity' => $this->formData['quantity'],
            'PricePerItem' => $this->formData['price'],
            'Datetime' => now()->format('Y-m-d H:i:s'),
        ];
    }

    protected function readExistingJson(): array
    {
        $jsonFile = file_get_contents(storage_path('app/Products.json'));
        $jsonData = json_decode($jsonFile, true);

        if (! is_array($jsonData)) return [];
        
        return $jsonData;
    }

    protected function saveDataToJsonFile(array $data)
    {
        file_put_contents(storage_path('app/Products.json'), json_encode(
            $data, JSON_PRETTY_PRINT));
    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
