{{-- Liquid Form --}}
<form action="{{ route('liquids.store') }}" method="POST" enctype="multipart/form-data"
      class="form__nov-product">
    <h3 class="login__title">Create new Liquid</h3>

    @csrf
    {{-- Name --}}
    <div class="product-input">
        <input type="text" name="name" class="input" placeholder="Name">

        @error('name')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- PG/VG Ratio --}}
    <div class="product-input">
        <input type="text" name="pg_vg_ratio" class="input" placeholder="PG/VG Ratio">

        @error('pg_vg_ratio')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Volume --}}
    <div class="product-input">
        <input type="number" name="volume" class="input" placeholder="Volume">

        @error('volume')
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
    <button type="submit">Confirm</button>
</form>
