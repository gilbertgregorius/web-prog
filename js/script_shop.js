// Carousel for New Items
const newItemsCarouselInner = document.createElement('div');
newItemsCarouselInner.classList.add('carousel-inner');

const carouselItems = [
    {
        image: '../assets/carousel/carousel1.jpg',
        caption: 'New Arrival: T-Shirts'
    },
    {
        image: '../assets/carousel/carousel2.jpg',
        caption: 'Summer Collection: Shorts'
    },
    {
        image: '../assets/carousel/carousel3.jpg',
        caption: 'Limited Edition: Hoodies'
    }
];

carouselItems.forEach((item, index) => {
    const carouselItem = document.createElement('div');
    carouselItem.classList.add('carousel-item');
    if (index === 0) {
        carouselItem.classList.add('active');
    }

    const imgElement = document.createElement('img');
    imgElement.src = item.image;
    imgElement.alt = item.caption;
    imgElement.classList.add('d-block', 'w-100');

    carouselItem.appendChild(imgElement);
    newItemsCarouselInner.appendChild(carouselItem);
});

document.getElementById('newItemsCarousel').appendChild(newItemsCarouselInner);

// Shop Items
const shopItems = [
    {
        image: '../assets/carousel/carousel1.jpg',
        title: 'Item 1',
        price: '$19.99'
    },
    {
        image: '../assets/carousel/carousel2.jpg',
        title: 'Item 2',
        price: '$24.99'
    },
    // Add more shop items as needed
];

const shopItemsContainer = document.getElementById('shopItems');

shopItems.forEach(item => {
    const card = document.createElement('div');
    card.classList.add('col');

    const cardDiv = document.createElement('div');
    cardDiv.classList.add('card', 'h-100');

    const imgElement = document.createElement('img');
    imgElement.src = item.image;
    imgElement.alt = item.title;
    imgElement.classList.add('card-img-top');

    const cardBodyDiv = document.createElement('div');
    cardBodyDiv.classList.add('card-body');

    const titleElement = document.createElement('h5');
    titleElement.classList.add('card-title');
    titleElement.textContent = item.title;

    const priceElement = document.createElement('p');
    priceElement.classList.add('card-text');
    priceElement.textContent = item.price;

    cardBodyDiv.appendChild(titleElement);
    cardBodyDiv.appendChild(priceElement);

    cardDiv.appendChild(imgElement);
    cardDiv.appendChild(cardBodyDiv);

    card.appendChild(cardDiv);
    shopItemsContainer.appendChild(card);
});