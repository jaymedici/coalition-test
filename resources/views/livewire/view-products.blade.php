<div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price per item</th>
                <th scope="col">Datetime</th>
                <th scope="col">Total Value</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $key => $product)
            <tr>
                <td>{{ $product['ProductName'] }}</td>
                <td>{{ $product['Quantity'] }}</td>
                <td>{{ $product['PricePerItem'] }}</td>
                <td>{{ $product['Datetime'] }}</td>
                <td>{{ $product['Quantity'] * $product['PricePerItem'] }}</td>
                <td>
                    <a wire:click.prevent="editProduct({{$key}})"
                        class="btn btn-sm btn-info" href="">
                        Edit
                    </a> 
                </td>
            </tr>
            @empty
                <td colspan="6" class="text-center">No Product added</td>
            @endforelse
            <tr>
                <td colspan="4" class="text-right"><strong>Total Value Sum</strong></td>
                <td>{{ $totalValueSum }}</td>
                <td></td>
            </tr>
            
        </tbody>
    </table>

    <div wire:ignore.self class="modal fade" id="editProductForm" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <form wire:submit.prevent="updateProduct">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductFormLabel">Edit Product</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="addProduct">
                @csrf
                <div class="form-group">
                    <label for="name">Product name</label>
                    <input wire:model="editFormData.ProductName" id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity in stock</label>
                    <input wire:model="editFormData.Quantity" id="quantity" name="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror">
                    @error('quantity')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price per item</label>
                    <input wire:model="editFormData.PricePerItem" id="price" name="price" type="number" class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>
