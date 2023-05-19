// SHOW NAVBAR AFTER SCROLL
//Scroll to Top Button function
var navbar = document.getElementById("header");
var navlist = document.getElementById("nav-list")
headerText = document.getElementById('header-text')


// When the user scrolls down 50px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 50) {
        document.getElementById("header").classList.add("scrolled");
    } 
    else {
        document.getElementById("header").classList.remove("scrolled");
    }
}

//Get Current Screen Size
window.onresize = screen;
window.onload = screen;
function screen(){
    myWidth = window.innerWidth;
    document.getElementById('screen-size').innerHTML = "Width is: " + myWidth + "px";
    // console.log(myWidth);
} 


// Stat Real Time Counter

const counters = document.querySelectorAll('.number');

counters.forEach(counter => {
  const countTo = parseInt(counter.getAttribute('data-count'));
  const duration = 2000;
  const increment = Math.ceil(countTo / (duration / 16));

  let currentCount = 1;

  const updateCount = () => {
    if (currentCount < countTo) {
      currentCount += increment;
      counter.textContent = `+ ${currentCount}`;
      setTimeout(updateCount, 16);
    } else {
      counter.textContent = `+ ${countTo}`;
    }
  };

  updateCount();
});

// Navigation bAR
let nav = document.getElementById('navlist')
let navIcon = document.getElementById('navIcon')
let openIcon = document.getElementById('openIcon')
let closeIcon = document.getElementById('closeIcon')

navIcon.addEventListener('click', function(){
    nav.classList.toggle('show');
    // scrollFunction();
    document.getElementById("header").classList.add("scrolled");
    // navbar.classList.toggle('cover');
})

// Subscription Modal Box 
let modalBox = document.getElementById('modalBox')
let discountBtn = document.getElementById('discountBtn')
discountBtn.addEventListener("click", ()=>{
    modalBox.style.display = "flex";
})
// document.onmouseleave = () => {
//     modalBox.style.display = "none"
// }
const closeModal = () => {
    modalBox.style.display = "none"
}

// Validate Subscriber Email

const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
let subscriberEmail = document.getElementById("subscriber-email")


const subscribeForm = document.getElementById("subscribe-form");

subscribeForm.addEventListener("submit", function(event){
event.preventDefault();
const email = subscriberEmail.value.trim();
const isValidEmail = emailRegex.test(email);
  if (isValidEmail) {
    alert("Your Subscription for 15% Discount has been Received, Check Your Email");
    subscriberEmail.value =""
  } 
  else {
    alert("Your Email address is not valid");
  }
})
// console.log(`The best team is ${super_eagles}`)
// let text =
//     '{ "employees" : [' +
//     '{ "firstName":"John" , "lastName":"Doe" },' +
//     '{ "firstName":"Anna" , "lastName":"Smith" },' +
//     '{ "firstName":"Peter" , "lastName":"Jones" } ]}';

// Generate Random Booking ID in booking form
// program to generate random strings

// declare all characters
let booking_id = document.getElementById('booking_id').value
let generate_button = document.getElementById('generateID')
const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
generate_button.addEventListener(click, ()=>{
  let booking_id = ' ';
  let length = 7;
    const charactersLength = characters.length;
    for ( let i = 0; i < length; i++ ) {
        booking_id += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
})


