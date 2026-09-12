/* V2 contact form — vanilla port; posts to /forms/contact.php (Name, Email, Subject, Message) */
(function () {
    'use strict';
    var form = document.getElementById('contact_form');
    if (!form) return;
    var status = document.getElementById('cf_status');
    var btn = document.getElementById('cf_submit');

    fetch('/forms/csrf_token.php')
        .then(function (r) { return r.json(); })
        .then(function (data) { var el = document.getElementById('cf_csrf'); if (el) el.value = data.csrf_token; })
        .catch(function () { console.error('Failed to fetch CSRF token'); });

    function show(ok, msg) {
        status.textContent = msg;
        status.className = 'form-status ' + (ok ? 'is-ok' : 'is-err');
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var name = document.getElementById('cf_name').value.trim();
        var email = document.getElementById('cf_email').value.trim();
        var subject = document.getElementById('cf_subject').value.trim();
        var message = document.getElementById('cf_message').value.trim();
        if (name.length < 2) return show(false, 'Please enter a valid name (at least 2 characters).');
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return show(false, 'Please enter a valid email address.');
        if (subject.length < 2) return show(false, 'Please choose what we can help you with.');
        if (message.length < 10) return show(false, 'Please enter a message (at least 10 characters).');

        btn.disabled = true;
        var label = btn.textContent;
        btn.textContent = 'Sending…';
        fetch('/forms/contact.php', { method: 'POST', body: new FormData(form) })
            .then(function (r) { return r.json(); })
            .then(function (data) {
                show(!!data.success, data.message || (data.success ? 'Thank you! We will be in touch shortly.' : 'Something went wrong. Please call (313) 654-1915.'));
                if (data.success) form.reset();
            })
            .catch(function () { show(false, 'Something went wrong. Please call (313) 654-1915.'); })
            .finally(function () { btn.disabled = false; btn.textContent = label; });
    });
})();
