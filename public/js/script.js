// Script for automatic generate slug in add post
const title = document.querySelector('#title');
const slug = document.querySelector('#slug');

title.addEventListener('change', function(){
  fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
});

// const nama = document.querySelector('#name');
// const slug2 = document.querySelector('#slug');

// nama.addEventListener('change', function(){
//   fetch('/dashboard/categories/checkSlug?nama=' + nama.value)
//     .then(response => response.json())
//     .then(data => slug2.value = data.slug2)
// });

// Script for preview image in add post
function PreviewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFReader){
        imgPreview.src = oFReader.target.result;
    }
}