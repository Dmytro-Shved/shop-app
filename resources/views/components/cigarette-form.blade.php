{{-- Cigarette Form --}}
<form action="{{ route('cigarettes.store') }}" method="POST" enctype="multipart/form-data"
      class="form__nov-product">
    <h3 class="login__title">Create new Cigarette</h3>

    @csrf
    {{-- Name --}}
    <div class="product-input">
        <input type="text" name="name" class="input" placeholder="Name">

        @error('name')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Type --}}
    <div class="product-input">
        <input type="text" list="options" class="input" name="type" placeholder="Type">
        <datalist id="options">
            <option value="elfbar">
            <option value="pod">
        </datalist>

        @error('type')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Strength --}}
    <div class="product-input">
        <input type="text" name="strength" class="input" placeholder="Strength">

        @error('strength')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Puffs --}}
    <div class="product-input">
        <input type="number" name="puffs" class="input" placeholder="Puffs">

        @error('puffs')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Flavor --}}
    <div class="product-input">
        <input type="text" name="flavor" class="input" placeholder="Flavor">

        @error('flavor')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Price --}}
    <div class="product-input">
        <input type="number" name="price" class="input" placeholder="Price">

        @error('price')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Image --}}
    <div class="product-input">
        <input type="file" name="image" class="input" placeholder="Image">

        @error('image')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Confirm --}}
    <div class="#">
        <button type="submit">Confirm</button>
    </div>
</form>
