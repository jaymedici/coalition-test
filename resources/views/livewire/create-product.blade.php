<div class="card mt-3" style="width: 50%; margin: 0 auto">
    <div class="card-body">
        <form wire:submit.prevent="addProduct">
            @csrf
            <div class="form-group">
                <label for="name">Product name</label>
                <input wire:model="formData.name" id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="quantity">Quantity in stock</label>
                <input wire:model="formData.quantity" id="quantity" name="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror">
                @error('quantity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price per item</label>
                <input wire:model="formData.price" id="price" name="price" type="number" class="form-control @error('price') is-invalid @enderror">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success ml-auto mt-3">Add</button>
        </form>
    </div>
</div>