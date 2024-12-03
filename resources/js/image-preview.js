document.addEventListener('DOMContentLoaded', function() {
    const imageInputCigarette = document.getElementById('imageInput');
    const imageInputLiquid = document.getElementById('imageInputLiquid');

    if (imageInputCigarette) {
        imageInputCigarette.addEventListener('change', previewImageCigarette);
    }

    if (imageInputLiquid) {
        imageInputLiquid.addEventListener('change', previewImageLiquid);
    }
});

function previewImageCigarette(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const imageCigarettePreview = document.getElementById('imageCigarettePreview');
        imageCigarettePreview.src = e.target.result;
        imageCigarettePreview.style.display = 'block';
    }

    if (file) {
        reader.readAsDataURL(file);
    }
}

function previewImageLiquid(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const imageLiquidPreview = document.getElementById('imageLiquidPreview');
        imageLiquidPreview.src = e.target.result;
        imageLiquidPreview.style.display = 'block';
    }

    if (file) {
        reader.readAsDataURL(file);
    }
}

