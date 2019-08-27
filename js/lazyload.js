window.onload = () => {
  // Get 100 random images
  fetch('https://picsum.photos/v2/list?limit=30')
    .then(function(response) {
      return response.json();
    })
    .then(function(myJson) {
      // Call the createImages function to generate the HTML code
      createImages(myJson);
      // Remove the loading spinner
      document.getElementById('lds-roller').remove();
    })
    .catch(err => {
      console.log(err);
    });
};

function createImages(imgs) {
  for (let i of imgs) {
    // Create an image HTML tag
    const image = document.createElement('img');
    image.setAttribute('data-lazy', i.download_url);
    image.classList.add('lazy-loading');
    document.getElementById('imagesContainer').appendChild(image);
  }
  // Sets an observer for each image
  lazyTargets = document.querySelectorAll('.lazy-loading');
  lazyTargets.forEach(lazyLoad);
}

// The lazy loading observer
function lazyLoad(target) {
  const obs = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        const src = img.getAttribute('data-lazy');

        img.setAttribute('src', src);
        img.classList.add('fadeIn');

        observer.disconnect();
      }
    });
  });
  obs.observe(target);
}
