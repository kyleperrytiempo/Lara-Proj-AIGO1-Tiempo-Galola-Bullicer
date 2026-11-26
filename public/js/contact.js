(() => {
    'use strict';

    const form = document.getElementById('fe-contact-form');
    if (!form) return;

    const feedback = document.getElementById('fe-form-feedback');
    const fields = {
        name: {
            input: document.getElementById('fe-name'),
            error: document.getElementById('fe-name-error'),
            message: 'Please enter your name.'
        },
        email: {
            input: document.getElementById('fe-email'),
            error: document.getElementById('fe-email-error'),
            message: 'Please enter a valid email address.'
        },
        subject: {
            input: document.getElementById('fe-subject'),
            error: document.getElementById('fe-subject-error'),
            message: 'Please enter a subject.'
        },
        message: {
            input: document.getElementById('fe-message'),
            error: document.getElementById('fe-message-error'),
            message: 'Please enter your message.'
        }
    };

    const isValidEmail = (value) => /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(value);

    function setFieldError(field, message = '') {
        field.error.textContent = message;
        field.input.setAttribute('aria-invalid', message ? 'true' : 'false');
    }

    function validateField(key) {
        const field = fields[key];
        const value = field.input.value.trim();

        if (!value) {
            setFieldError(field, key === 'email' ? 'Please enter your email address.' : field.message);
            return false;
        }

        if (key === 'email' && !isValidEmail(value)) {
            setFieldError(field, field.message);
            return false;
        }

        setFieldError(field);
        return true;
    }

    Object.keys(fields).forEach((key) => {
        const field = fields[key];
        field.input.addEventListener('blur', () => validateField(key));
        field.input.addEventListener('input', () => {
            if (field.input.getAttribute('aria-invalid') === 'true') {
                validateField(key);
            }
            feedback.className = 'fe-form-feedback';
            feedback.textContent = '';
        });
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const valid = Object.keys(fields).map(validateField).every(Boolean);
        if (!valid) {
            feedback.className = 'fe-form-feedback is-error';
            feedback.textContent = 'Please correct the highlighted fields before continuing.';
            const firstInvalid = form.querySelector('[aria-invalid="true"]');
            if (firstInvalid) firstInvalid.focus();
            return;
        }

        const visitorName = fields.name.input.value.trim();
        feedback.className = 'fe-form-feedback is-success';
        feedback.textContent = `Thank you, ${visitorName}! Your form passed validation. This demo is not connected to an email service, so your message has not been sent.`;
    });
})();
