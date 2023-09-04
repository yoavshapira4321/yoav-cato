const bulletsParent = document.getElementById("bullets");
const labels = Array.from(bulletsParent.getElementsByTagName("label"));
const innerParent = document.querySelector(".inner");
const slides = Array.from(innerParent.querySelectorAll(".slide"));
const inner = document.querySelector('#slides .inner');

labels[0].style.backgroundColor = "#158864";

function labelClickHandler(event) {
    // Reset background color for all labels
    labels.forEach(label => {
      label.style.backgroundColor = "";
    });
    
    // Set background color for the clicked label
    event.target.style.backgroundColor = "#158864";
    
    // Get the corresponding input element's ID
    const inputId = event.target.getAttribute("for");
    
    // Do something with the inputId, such as triggering a slide change
    console.log(`Label clicked for input: ${inputId}`);
  }
  
  

labels.forEach(label => {
  label.addEventListener("click", labelClickHandler);
});


inner.style.width = `${slides.length * 100}%`;
slides.forEach(slide => {
  slide.style.width = `${100 / slides.length}%`;
});

slides.forEach((slide, index) => {
  const radio = document.getElementById(`slide${index + 1}`);
  radio.addEventListener('change', () => {
    const marginLeftValue = -index * 100;
    console.log(marginLeftValue);
    inner.style.marginLeft = `${marginLeftValue}%`;
  });
});