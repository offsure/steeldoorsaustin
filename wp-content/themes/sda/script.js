// Navbar background on scroll
document.addEventListener('scroll', () => {
  const nav = document.querySelector('.navbar');
  if(window.scrollY > 16){
    nav.classList.add('scrolled','navbar-dark','bg-dark');
  }else{
    nav.classList.remove('scrolled','bg-dark');
  }
});

// Project filter
const filterButtons = document.querySelectorAll('.project-filter [data-filter]');
const items = document.querySelectorAll('.project-item');
filterButtons.forEach(btn => {
  btn.addEventListener('click', () => {
    filterButtons.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const f = btn.getAttribute('data-filter');
    items.forEach(it => {
      const show = (f === 'all') || it.dataset.category === f;
      it.classList.toggle('d-none', !show);
    });
  });
});

// Form submit (demo)
function handleSubmit(){
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const door = document.getElementById('doorType').value;
  if(!name || !email || !phone || !door) return;
  const msg = `Thanks, ${name}! We will contact you shortly about: ${door}.`;
  alert(msg);
}

// products
document.addEventListener("DOMContentLoaded", function () {
    // Get the container for the "All" tab images
    const allImagesContainer = document.getElementById("all-images");

    // Loop through each tab to get images and clone them to "All" tab
    for (let i = 1; i <= 8; i++) {
        const tabPane = document.getElementById(`p0${i}`);
        const images = tabPane.querySelectorAll("img");

        images.forEach(img => {
            const col = document.createElement("div");
            col.className = "col-md-3 mb-3";
            const clonedImage = img.cloneNode(true);
            console.log(clonedImage, "pankaj");
            
            col.appendChild(clonedImage);
            allImagesContainer.appendChild(col);
        });
    }
});