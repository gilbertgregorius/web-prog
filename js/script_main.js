function CarouselHome (){
    const carouselContainer = document.getElementById('carousel-home');
    const textCarousel = [
      ['Badan Eksekutif Mahasiswa', 'To grow by learning and serving', 'https://docs.google.com/forms/d/e/1FAIpQLSf7NViqjj4i6qMbfX-WR5PCvqdDWW9k0SNSiX6J407i3D5nFw/closedform', 'Register'],
      ['We Transform', 'By the Glory of God', '/html/index.html#learn-more', 'Learn More'],
    ];
    
    for (let i = 0; i < 2; i++) {
      const [h1Text, h5Text, linkButton, buttonText] = textCarousel[i];
      const isActive = i === 0;
      
      const carouselItem = document.createElement('div');
      carouselItem.classList.add('carousel-item');
      if (isActive) {
        carouselItem.classList.add('active');
      }
      
      const maskDiv = document.createElement('div');
      maskDiv.classList.add('mask', 'd-flex', 'justify-content-center', 'align-items-center', 'h-100');
      maskDiv.style.backgroundColor = 'rgba(0, 0, 0, 0.6)';
      
      const textDiv = document.createElement('div');
      textDiv.classList.add('text-white', 'text-center');
      
      const h1Element = document.createElement('h1');
      h1Element.classList.add('mb-3');
      h1Element.textContent = h1Text;
      
      const h5Element = document.createElement('h5');
      h5Element.classList.add('mb-4');
      h5Element.innerHTML = '<i>' + h5Text + '</i>';
      
      const buttonElement = document.createElement('a');
      buttonElement.classList.add('btn', 'btn-outline-light', 'btn-lg', 'm-2');
      buttonElement.href = linkButton;
      buttonElement.setAttribute('role', 'button');
      buttonElement.setAttribute('rel', 'nofollow');
      buttonElement.setAttribute('target', '_blank');
      buttonElement.textContent = buttonText;
      
      textDiv.appendChild(h1Element);
      textDiv.appendChild(h5Element);
      textDiv.appendChild(buttonElement);
      
      maskDiv.appendChild(textDiv);
      
      carouselItem.appendChild(maskDiv);
      
      carouselContainer.appendChild(carouselItem);
    }
}

function scrollToDiv(event) {
    // Prevent the default behavior of the anchor tag
    event.preventDefault();

    // Get a reference to the destination div
    const destinationDiv = document.getElementById('destinationDiv');

    // Scroll to the destination div
    destinationDiv.scrollIntoView({ behavior: 'smooth' });
}

CarouselHome()

function BPHMember() {
    var members = [
        {
            img: "https://calvin.ac.id/wp-content/uploads/2023/11/DSC07519-scaled.jpg",
            name: "Maleakhi Ezekiel",
            role: "President"
        },
        {
            img: "https://calvin.ac.id/wp-content/uploads/2023/11/DSC07508-scaled.jpg",
            name: "Valerie Wangsawijaya",
            role: "Vice President"
        },
        {
            img: "https://calvin.ac.id/wp-content/uploads/2023/11/DSC07530-scaled.jpg",
            name: "Martin Chang",
            role: "Bendahara 1"
        },
        {
            img: "https://calvin.ac.id/wp-content/uploads/2023/11/DSC07539-scaled.jpg",
            name: "Pixel Ariel Christopher",
            role: "Sekretaris/Bendahara 2"
        }
    ];

    let text = "";
    for (let i = 0; i < members.length; i++) {
        text += '<div class="item features-image col-12 col-md-6 col-lg-3"><div class="item-wrapper"><div class="item-img mb-3"><img src="' + members[i].img + '"></div><div class="item-content align-left"><h6 class="item-subtitle mbr-fonts-style display-5"><strong>' + members[i].name + '</strong></h6><p class="mbr-text mbr-fonts-style display-7">' + members[i].role + '</p></div></div></div>';
    }

    document.getElementById("members").innerHTML = text;
}

BPHMember()


// Making the div card

// function divCard() {
//     const allText = [
//         ["https://calvin.ac.id/wp-content/uploads/2023/11/DSC07519-scaled.jpg", "Maleakhi Ezekiel"],
//         ["https://calvin.ac.id/wp-content/uploads/2023/11/DSC07508-scaled.jpg", "Valerie Wangsawijaya"],
//         ["https://calvin.ac.id/wp-content/uploads/2023/11/DSC07530-scaled.jpg", "Martin Chang"],
//         ["https://calvin.ac.id/wp-content/uploads/2023/11/DSC07539-scaled.jpg", "Pixel Ariel Christopher"]
//     ];
//     let wrapper = document.getElementById('profile-team');
//     for (let i = 0; i < allText.length; i++) {
//         const [linkText, name] = allText[i];
//         let card = document.createElement('div');
//         card.setAttribute('id', 'card-team')

//         let img = document.createElement('img');
//         img.src = linkText;
//         img.classList.add('card-image'); // Add a class for styling the image

//         let title = document.createElement('h2');
//         title.classList.add('card-title');
//         title.textContent = name;

//         card.appendChild(img);
//         card.appendChild(title);

//         wrapper.appendChild(card);
//     }
// }
// divCard();

// const cards = document.querySelectorAll("#card");

// function isElementInViewport(el) {
//   const rect = el.getBoundingClientRect();
//   return (
//     rect.top >= 0 &&
//     rect.left >= 0 &&
//     rect.bottom <=
//       (window.innerHeight || document.documentElement.clientHeight) &&
//     rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//   );
// }

// function isCardVisible() {
//   for (card of cards) {
//     isElementInViewport(card)
//       ? card.classList.add("isVisible")
//       : card.classList.remove("isVisible");
//   }
// }

// document.addEventListener("DOMContentLoaded", isCardVisible);
// window.addEventListener("scroll", isCardVisible);
// window.addEventListener("resize", isCardVisible);