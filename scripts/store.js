import {books} from './books.js';

let booksHTML = '';

books.forEach((book) => {
  booksHTML += `
    <div class="grid-item">
      <img src="${book.image}" alt="Image ${book.id}" id="image${book.id}">
      <div class="Btn-div">
        <button class="Btn read-online-btn">
          <span class="svgContainer">
            <svg width="512" height="512" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
              <mask id="ipSReadBook0">
                <g fill="none" stroke="#fff" stroke-width="4">
                  <path fill="#fff" stroke-linecap="round" stroke-linejoin="round"
                    d="M24 21v23c-3.291-4-13.371-4-18-4V18c9.874 0 16.114 2 18 3Zm0 0v23c3.291-4 13.371-4 18-4V18c-9.874 0-16.114 2-18 3Z" />
                  <circle cx="24" cy="12" r="8" />
                </g>
              </mask>
              <path fill="#000000" d="M0 0h48v48H0z" mask="url(#ipSReadBook0)" />
            </svg>
            <span class="BG"></span>
            <div class="tooltip">Read</div>
        </button>
        <a href="${book.pdf}" download="${book.title}" style="text-decoration:none; display : inline">
          <button class="Btn download-btn">
            <span class="svgContainer">
              <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M6 20h12M12 4v12m0 0l3.5-3.5M12 16l-3.5-3.5" />
              </svg>
              <span class="BG"></span>
              <div class="tooltip">Download</div>
          </button>
        </a>
        <button class="Btn favorites-btn">
          <span class="svgContainer">
            <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill="#000000" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53L12 21.35Z"/>
          </svg>
            <span class="BG"></span>
            <div class="tooltip">Favorite</div>
        </button>
      </div>
    </div>
  `;
  
  document.querySelector('.js-book-grid').innerHTML = booksHTML;
});

books.forEach((book) => {
  tippy(`#image${book.id}`, {
    content: `${book.desc}`,
  });
});