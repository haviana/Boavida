---
title: Belavida
menu: Home
onpage_menu: true
content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _header
            - _services
            - _pecados
            - _boasvidas
            - _events
            - _store
            - _team
            - _form
form:
    name: my-nice-form
    action: /home
    fields:
        - name: name
          id: name
          label: Name
          classes: form-control form-control-lg
          placeholder: Insira aqui o  seu Nome
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          id: email
          classes: form-control form-control-lg
          label: Email
          placeholder: Insira aqui o seu Email
          type: email
          validate:
            rule: email
            required: true

        - name: message
          label: Message
          classes: form-control form-control-lg
          size: long
          placeholder: Insira aqui a sua Mensagem
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          classes: "btn btn-primary btn-lg"
          value: Enviar

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name }}"
            body: "{% include 'forms/data.html.twig' %}"
        - message: Obrigado pela sua mensagem, prometemos ser breves a responder!
---
