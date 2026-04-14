(function () {
  "use strict";

  let forms = document.querySelectorAll('.php-email-form');

  forms.forEach( function(e) {
    e.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;

      let action = thisForm.getAttribute('action');
      let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');
      
      if( ! action ) {
        displayError(thisForm, 'The form action property is not set!')
        return;
      }
      thisForm.querySelector('.loading').classList.add('d-block');
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.sent-message').classList.remove('d-block');
      toggleSubmit(thisForm, true);

      let formData = new FormData( thisForm );

      if ( recaptcha ) {
        if(typeof grecaptcha !== "undefined" ) {
          grecaptcha.ready(function() {
            try {
              grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
              .then(token => {
                formData.set('recaptcha-response', token);
                php_email_form_submit(thisForm, action, formData);
              })
            } catch(error) {
              displayError(thisForm, error)
            }
          });
        } else {
          displayError(thisForm, 'The reCaptcha javascript API url is not loaded!')
        }
      } else {
        php_email_form_submit(thisForm, action, formData);
      }
    });
  });

  function php_email_form_submit(thisForm, action, formData) {
    const tokenInput = thisForm.querySelector('input[name="_token"]');
    const csrfMeta = document.querySelector('meta[name="csrf-token"]');
    const csrfToken = tokenInput
      ? tokenInput.value
      : (csrfMeta ? csrfMeta.getAttribute('content') : null);
    const headers = {
      'Accept': 'text/plain, application/json',
      'X-Requested-With': 'XMLHttpRequest'
    };

    if (csrfToken) {
      headers['X-CSRF-TOKEN'] = csrfToken;
    }

    fetch(action, {
      method: 'POST',
      body: formData,
      credentials: 'same-origin',
      headers: headers
    })
    .then(async response => {
      const data = (await response.text()).trim();

      thisForm.querySelector('.loading').classList.remove('d-block');
      toggleSubmit(thisForm, false);

      if (!response.ok) {
        throw new Error(normalizeErrorMessage(data, 'We could not submit the form right now. Please try again.'));
      }

      if (data === 'OK') {
        thisForm.querySelector('.sent-message').classList.add('d-block');
        thisForm.reset();

        return;
      }

      throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action);
    })
    .catch((error) => {
      displayError(thisForm, error);
    });
  }

  function displayError(thisForm, error) {
    thisForm.querySelector('.loading').classList.remove('d-block');
    toggleSubmit(thisForm, false);
    thisForm.querySelector('.error-message').innerHTML = error instanceof Error ? error.message : error;
    thisForm.querySelector('.error-message').classList.add('d-block');
  }

  function normalizeErrorMessage(data, fallbackMessage) {
    const plainText = data.replace(/<[^>]+>/g, ' ').replace(/\s+/g, ' ').trim();

    if (plainText && plainText.length <= 300) {
      return plainText;
    }

    return fallbackMessage;
  }

  function toggleSubmit(thisForm, isSubmitting) {
    const submitButton = thisForm.querySelector('button[type="submit"]');

    if (submitButton) {
      submitButton.disabled = isSubmitting;
    }
  }

})();
