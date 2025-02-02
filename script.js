function scrollToSection(event, id) {
    event.preventDefault();
    const element = document.getElementById(id);
    const offset = 4 * 16; // 4rem in pixels
    const elementPosition = element.getBoundingClientRect().top + window.pageYOffset;
    const offsetPosition = elementPosition - offset;

    window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
    });
}


function showNotification(message, isError = false) {
    const notification = document.getElementById('notification');
    notification.textContent = message;
    notification.classList.toggle('error', isError);
    notification.style.display = 'block';

    setTimeout(() => {
    notification.style.display = 'none';
}, 10000);
}

    document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');

    if (status === 'success') {
    showNotification('Your message is sent. We will contact You soon.');
    urlParams.delete('status');
    window.history.replaceState({}, document.title, window.location.pathname);
    } else if (status === 'error') {
    showNotification('Произошла ошибка при отправке сообщения.', true);
    urlParams.delete('status');
    window.history.replaceState({}, document.title, window.location.pathname);

    }
});
