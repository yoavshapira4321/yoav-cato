const nav_container = document.querySelector(".new_header");
const arrow = document.querySelector('.arrow')


const sub_left_header = document.querySelector('.sub_left_header');
sub_left_header.querySelectorAll('.level_1').forEach(level_1 => {
  level_1.addEventListener('click', function() {
    level_1.classList.toggle('active')
    console.log('level 1 clicked');
    level_1.querySelectorAll('.level_2').forEach(level_2 => {
    level_2.classList.toggle('active');
    
    });


  });
  level_1.querySelectorAll('.level_2').forEach(level_2 => {
    level_2.addEventListener('click', function() {
      console.log('level 2 clicked');

      level_2.classList.toggle('active')
      level_2.querySelectorAll('.level_3').forEach(level_3 => {
      level_3.classList.toggle('active')

      
      });
  
  
    });
  
  
    
      
    });


  
    
  });

  

  

document.querySelector('.humburger').onclick = function() {
    this.classList.toggle('active');

    nav_container.classList.toggle("active");


    
  };

  let eventTriggered = false;
  const left_header = document.querySelector(".left_header");

  document.addEventListener('mousemove', function(event) {

  
    if (event.clientX <= 0 && !eventTriggered) {
      eventTriggered = true;  // Set the flag to true to avoid triggering the event again
      // Your code here to handle when the mouse reaches the left edge
      left_header.classList.toggle('left_active')
    }
    if(event.clientX > 190 && eventTriggered && !sub_left_header.classList.contains('active')) {
      left_header.classList.remove('left_active');
      arrow.classList.remove('button_active');
      sub_left_header.classList.remove('active');

      eventTriggered = false;  // Reset the flag when the mouse is not at the left edge
    }
    if(event.clientX > 490 && eventTriggered && sub_left_header.classList.contains('active')) {
      left_header.classList.remove('left_active');
      arrow.classList.remove('button_active');
      sub_left_header.classList.remove('active');
      eventTriggered = false;  // Reset the flag when the mouse is not at the left edge

    }
    });
  
  // Fetch the image element inside .left_header which is inside .left_header_container
  // Select the .left_header element
  
  // Add a click event listener to the button
  arrow.addEventListener('click', function() {
    arrow.classList.toggle('button_active');
    sub_left_header.classList.toggle('active');


    
    // Toggle the 'left_active' class on the .left_header element
  });

