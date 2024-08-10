function truncateText(selector, maxLength) {
    const elements = document.querySelectorAll(selector);
    
    elements.forEach(element => {
        let text = element.innerText;
  
        if (text.length > maxLength) {
          text = text.substring(0, maxLength) + '...';
        }
        
        element.innerText = text;
    });

  }
  
  // Exemplo de uso:
  truncateText('.desc-prod', 18);