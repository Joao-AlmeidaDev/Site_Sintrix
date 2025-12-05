<!-- Google tag (gtag.js) - Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-70NFMXQ2GE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-70NFMXQ2GE', {
    'send_page_view': true,
    'cookie_flags': 'SameSite=None;Secure'
  });
  
  // Função auxiliar para rastreamento de eventos
  window.trackEvent = function(eventName, eventData = {}) {
    if (typeof gtag === 'function') {
      gtag('event', eventName, eventData);
    }
  };
</script>
