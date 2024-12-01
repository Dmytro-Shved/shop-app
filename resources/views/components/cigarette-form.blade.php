{{-- Cigarette Form --}}
<form action="{{ route('cigarettes.store') }}" method="POST" enctype="multipart/form-data"
      class="form__nov-product">
    <h3 class="login__title">Create new Cigarette</h3>

    @csrf
    {{-- Name --}}
    <div class="product-input">
        <input type="text" name="name" class="input" value="{{ old('name') }}" placeholder="Name">

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Type --}}
    <div class="product-input">
        <input type="text" list="options" class="input" value="{{ old('type') }}" name="type" placeholder="Type">
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
        <input type="text" name="strength" class="input" value="{{ old('strength') }}" placeholder="Strength">

        @error('strength')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Puffs --}}
    <div class="product-input">
        <input type="number" name="puffs" class="input" value="{{ old('puffs') }}" placeholder="Puffs">

        @error('puffs')
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
        <input type="file" name="image" id="imageInput" class="input" placeholder="Image" onchange="previewImage(event)">
        <img id="imagePreview" src="#" alt="Image preview" style="display:none;">

        @error('image')
        <p>{{ $message }}</p>
        @enderror
    </div>

    {{-- Confirm --}}
    <div class="confirm-button">
        <button type="submit" class="confirm-btn">Confirm</button>
    </div>

    {{-- Mini image --}}
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block'; // Показываем миниатюру
            }

            if (file) {
                reader.readAsDataURL(file); // Читаем изображение
            }
        }
    </script>
</form>
