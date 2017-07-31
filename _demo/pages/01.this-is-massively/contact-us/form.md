---
title: 'Contact Us'
form:
    name: footer-contact-form
    fields:
        -
            name: name
            label: Name
            autocomplete: 'on'
            type: text
            outerclasses: field
            validate:
                required: true
        -
            name: email
            label: Email
            type: email
            outerclasses: field
            validate:
                required: true
        -
            name: message
            label: Message
            type: textarea
            outerclasses: field
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            outerclasses: field
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            classes: field
            value: Send Message
    process:
        -
            captcha:
        -
            email:
                subject: '[Site Contact Form] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for getting in touch!'
        -
            display: thankyou
---
