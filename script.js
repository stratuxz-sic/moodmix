const search = document.getElementById('search');
search.addEventListener('keyup', () => {

  const cards = document.querySelectorAll('.card');

  cards.forEach(card => {
    const text = card.textContent.toLowerCase();

    if (text.includes(search.value.toLowerCase())) 
      {
        card.style.display = 'block';
      } 
    else 
      {
        card.style.display = 'none';
      }

  });

});