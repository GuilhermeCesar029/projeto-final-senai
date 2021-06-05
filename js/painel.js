document.addEventListener('DOMContentLoaded', () => {

    // Pegando todos os elemento da classe "navbar-burger"
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  
    // verificando se tem algun navbar-burger
    if ($navbarBurgers.length > 0) {
  
      // Adicionando um evento de click em cada class navbar-burger
      $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {
  
          // Destino
          const target = el.dataset.target;
          const $target = document.getElementById(target);
  
          // Deixando a classe ativada
          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
  
        });
      });
    }
  
});
  