import Navigation from './modules/navigation.js';

document.addEventListener("DOMContentLoaded", function () {
  // Handler when the DOM is fully loaded
  console.log('js executed...');
  const navigation = new Navigation();
  
  if (navigation) {
    console.log('navigation executed...')
  }
  return navigation
});
