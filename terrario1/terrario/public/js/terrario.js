document.addEventListener('DOMContentLoaded', function () {
    // Mobile nav toggle
    var toggle = document.querySelector('.site-header__toggle');
    var nav = document.querySelector('.site-header__nav');

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('site-header__nav--open');
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    }

    // Notification: manual close + auto-dismiss
    var notification = document.getElementById('contact-notification');
    if (notification) {
        var closeBtn = notification.querySelector('.notification__close');
        var dismiss = function () { notification.remove(); };

        if (closeBtn) closeBtn.addEventListener('click', dismiss);
        setTimeout(dismiss, 6000);
    }
});
