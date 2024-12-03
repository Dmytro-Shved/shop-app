{{-- Liquid Form --}}
<form action="{{ route('liquids.store') }}" method="POST" enctype="multipart/form-data"
      class="form__nov-product">
    <h3 class="login__title">Create new Liquid</h3>

    @csrf
    {{-- Name --}}
    <div class="product-input">
        <input type="text" name="name" class="input" value="{{ old('name') }}" placeholder="Name">

        @error('name')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- PG/VG Ratio --}}
    <div class="product-input">
        <input type="text" name="pg_vg_ratio" class="input" value="{{ old('pg_vg_ratio') }}" placeholder="PG/VG Ratio">

        @error('pg_vg_ratio')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Volume --}}
    <div class="product-input">
        <input type="number" name="volume" class="input" value="{{ old('volume') }}" placeholder="Volume">

        @error('volume')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Flavor --}}
    <div class="product-input">
        <input type="text" name="flavor" class="input" value="{{ old('flavor') }}" placeholder="Flavor">

        @error('flavor')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Price --}}
    <div class="product-input">
        <input type="number" name="price" class="input" value="{{ old('price') }}" placeholder="Price">

        @error('price')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Image --}}
    <div class="product-input-image">
        <input type="file" name="image" id="imageInputLiquid" class="input" placeholder="Liquid Image">
        <img id="imageLiquidPreview" src="#" alt="Liquid Image preview" class="image-preview">

        @error('image')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Confirm --}}
    <div class="confirm-button">
        <button type="submit" class="confirm-btn">Confirm</button>
    </div>

</form>

