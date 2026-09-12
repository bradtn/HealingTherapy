/* V2 appointment form — vanilla port of the jQuery handler in assets/vendor/php-email-form/appointment.js */
(function () {
    'use strict';
    var form = document.getElementById('appointment_form');
    if (!form) return;
    var status = document.getElementById('ap_status');
    var btn = document.getElementById('ap_btn_submit');

    var d = new Date(); d.setDate(d.getDate() + 1);
    var dateInput = document.getElementById('preferredDate');
    if (dateInput) dateInput.min = d.toISOString().split('T')[0];

    fetch('/forms/csrf_token.php')
        .then(function (r) { return r.json(); })
        .then(function (data) { var el = document.getElementById('csrf_token'); if (el) el.value = data.csrf_token; })
        .catch(function () { console.error('Failed to fetch CSRF token'); });

    var set = function (id, val) { var el = document.getElementById(id); if (el) el.value = val; };
    set('landing_page', window.location.href);
    if (document.referrer) set('referrer', document.referrer);
    var params = new URLSearchParams(window.location.search);
    ['utm_source', 'utm_medium', 'utm_campaign'].forEach(function (k) { if (params.has(k)) set(k, params.get(k)); });

    function show(ok, msg) {
        status.textContent = msg;
        status.className = 'form-status ' + (ok ? 'is-ok' : 'is-err');
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var name = document.getElementById('name').value.trim();
        var email = document.getElementById('email').value.trim();
        var phone = document.getElementById('phone').value.trim();
        var message = document.getElementById('message').value.trim();
        if (name.length < 2) return show(false, 'Please enter a valid name (at least 2 characters).');
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return show(false, 'Please enter a valid email address.');
        if (phone.replace(/\D/g, '').length < 10) return show(false, 'Please enter a valid phone number (at least 10 digits).');
        if (message.length < 10) return show(false, 'Please tell us a little about your needs (at least 10 characters).');

        btn.disabled = true;
        var label = btn.textContent;
        btn.textContent = 'Sending…';
        fetch('/forms/appointment.php', { method: 'POST', body: new FormData(form) })
            .then(function (r) { return r.json(); })
            .then(function (data) {
                show(!!data.success, data.message || (data.success ? 'Thank you! We will contact you shortly.' : 'Something went wrong. Please call (313) 654-1915.'));
                if (data.success) form.reset();
            })
            .catch(function () { show(false, 'Something went wrong. Please call (313) 654-1915.'); })
            .finally(function () { btn.disabled = false; btn.textContent = label; });
    });
})();
