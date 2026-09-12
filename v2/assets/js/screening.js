/* Healing Therapy Center — M-CHAT-R™ autism screening, vanilla JS.
   Instrument: Modified Checklist for Autism in Toddlers, Revised (Robins,
   Fein & Barton, 2009), reproduced in full and unmodified. Scoring per the
   official manual: for all items EXCEPT 2, 5 and 20 a response of "No" is the
   at-risk response; for items 2, 5 and 20 a response of "Yes" is at-risk.
   Total 0–2 low risk · 3–7 medium risk · 8–20 high risk. */
(function () {
    'use strict';
    var QUESTIONS = [
        "If you point at something across the room, does your child look at it?",
        "Have you ever wondered if your child might be deaf?",
        "Does your child play pretend or make-believe? (e.g. pretend to drink from an empty cup, talk on a toy phone, or feed a doll)",
        "Does your child like climbing on things? (e.g. furniture, playground equipment, or stairs)",
        "Does your child make unusual finger movements near his or her eyes? (e.g. wiggle fingers close to the eyes)",
        "Does your child point with one finger to ask for something or to get help? (e.g. point to a snack or toy out of reach)",
        "Does your child point with one finger to show you something interesting? (e.g. point to an airplane or a big truck)",
        "Is your child interested in other children? (e.g. watch them, smile at them, or go to them)",
        "Does your child show you things by bringing them to you or holding them up for you to see — not to get help, but just to share? (e.g. show you a flower or a toy)",
        "Does your child respond when you call his or her name? (e.g. look up, talk or babble, or stop what they're doing)",
        "When you smile at your child, does he or she smile back at you?",
        "Does your child get upset by everyday noises? (e.g. a vacuum cleaner or loud music)",
        "Does your child walk?",
        "Does your child look you in the eye when you are talking to him or her, playing with him or her, or dressing him or her?",
        "Does your child try to copy what you do? (e.g. wave bye-bye, clap, or make a funny noise)",
        "If you turn your head to look at something, does your child look around to see what you are looking at?",
        "Does your child try to get you to watch him or her? (e.g. look at you for praise, or say \"look\" or \"watch me\")",
        "Does your child understand when you tell him or her to do something? (e.g. if you say \"put the book on the chair\" or \"bring me the blanket\")",
        "If something new happens, does your child look at your face to see how you feel about it? (e.g. hearing a strange noise, or seeing a new toy)",
        "Does your child like movement activities? (e.g. being swung or bounced on your knee)"
    ];
    // 1-indexed items where "Yes" is the at-risk answer
    var YES_IS_RISK = { 2: true, 5: true, 12: true };

    var listEl = document.getElementById('mchat-questions');
    var progressEl = document.getElementById('mchat-progress');
    var progressLabel = document.getElementById('mchat-progress-label');
    var submitBtn = document.getElementById('mchat-submit');
    var resultEl = document.getElementById('mchat-result');
    var resetBtn = document.getElementById('mchat-reset');
    if (!listEl) return;

    var answers = new Array(QUESTIONS.length).fill(null);

    QUESTIONS.forEach(function (q, i) {
        var li = document.createElement('li');
        li.className = 'mchat-q';
        li.innerHTML =
            '<div class="mchat-q__num">' + (i + 1) + '</div>' +
            '<div class="mchat-q__body">' +
                '<p class="mchat-q__text">' + q + '</p>' +
                '<div class="mchat-q__opts" role="group" aria-label="Question ' + (i + 1) + '">' +
                    '<button type="button" class="mchat-opt" data-a="yes">Yes</button>' +
                    '<button type="button" class="mchat-opt" data-a="no">No</button>' +
                '</div>' +
            '</div>';
        li.querySelectorAll('.mchat-opt').forEach(function (btn) {
            btn.addEventListener('click', function () {
                answers[i] = btn.getAttribute('data-a');
                li.querySelectorAll('.mchat-opt').forEach(function (b) { b.classList.toggle('is-on', b === btn); });
                li.classList.add('is-answered');
                update();
            });
        });
        listEl.appendChild(li);
    });

    function answeredCount() { return answers.filter(function (a) { return a !== null; }).length; }

    function update() {
        var n = answeredCount(), pct = Math.round(n / QUESTIONS.length * 100);
        progressEl.style.width = pct + '%';
        progressEl.setAttribute('aria-valuenow', String(pct));
        progressLabel.textContent = n + ' of ' + QUESTIONS.length + ' answered';
        submitBtn.disabled = n < QUESTIONS.length;
    }

    function score() {
        var s = 0;
        answers.forEach(function (a, i) {
            var item = i + 1;
            var risk = YES_IS_RISK[item] ? (a === 'yes') : (a === 'no');
            if (risk) s++;
        });
        return s;
    }

    var BANDS = [
        { max: 2, key: 'low', title: 'Low Risk', lead: 'Your responses suggest a low likelihood of autism spectrum concerns at this time.',
          body: 'A low-risk result does not require any specific follow-up unless you or your pediatrician have other concerns. If your child is younger than 24 months, it\'s a good idea to screen again after their second birthday, since development changes quickly at this age. Continue talking with your pediatrician at regular well-child visits.' },
        { max: 7, key: 'medium', title: 'Medium Risk', lead: 'Your responses suggest it would be worthwhile to look a little closer.',
          body: 'A medium-risk result means a follow-up conversation is recommended to better understand your answers — not that your child has autism. Many children who screen at medium risk are developing typically. We\'d encourage you to speak with your pediatrician and consider scheduling a comprehensive evaluation so any questions can be answered by a specialist.' },
        { max: 20, key: 'high', title: 'Higher Risk', lead: 'Your responses suggest a comprehensive evaluation is recommended.',
          body: 'A higher-risk result means a full diagnostic evaluation is the recommended next step — and that earlier support tends to lead to better outcomes. This screening is not a diagnosis. Our team can complete a comprehensive assessment and, if appropriate, connect your child with early intervention services. Please reach out so we can help you take the next step.' }
    ];

    submitBtn.addEventListener('click', function () {
        if (answeredCount() < QUESTIONS.length) return;
        var s = score();
        var band = BANDS.find(function (b) { return s <= b.max; });
        resultEl.className = 'mchat-result is-' + band.key;
        resultEl.innerHTML =
            '<p class="mchat-result__eyebrow">Your Screening Result</p>' +
            '<div class="mchat-result__score"><span>' + s + '</span> / 20</div>' +
            '<h3 class="mchat-result__title">' + band.title + '</h3>' +
            '<p class="mchat-result__lead">' + band.lead + '</p>' +
            '<p>' + band.body + '</p>' +
            '<div class="mchat-result__cta">' +
                '<a class="btn btn--pill btn--primary" href="/appointment">Request an Evaluation<svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></a>' +
                '<a class="btn btn--pill btn--ghost" href="tel:313-654-1915">Call (313) 654-1915</a>' +
            '</div>' +
            '<p class="mchat-result__note">This screening is an educational tool based on the M-CHAT-R™ and is not a diagnosis. Only a qualified professional can diagnose autism spectrum disorder.</p>';
        resultEl.hidden = false;
        resetBtn.hidden = false;
        resultEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
        resultEl.setAttribute('tabindex', '-1');
        resultEl.focus({ preventScroll: true });
    });

    resetBtn.addEventListener('click', function () {
        answers = new Array(QUESTIONS.length).fill(null);
        listEl.querySelectorAll('.mchat-q').forEach(function (li) {
            li.classList.remove('is-answered');
            li.querySelectorAll('.mchat-opt').forEach(function (b) { b.classList.remove('is-on'); });
        });
        resultEl.hidden = true;
        resetBtn.hidden = true;
        update();
        document.getElementById('mchat').scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

    update();
})();
