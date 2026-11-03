# Legacy form endpoints

This repository is deployed as a static GitHub Pages website. GitHub Pages
does not execute PHP. The former PHP form handlers and PHPMailer 5.2.4
implementation have therefore been retired; the old endpoint files return
HTTP 410 if run on a PHP-capable server.

The contact and signup form pages still need a separately hosted form service
or backend before submissions can be processed. Do not reintroduce the old
PHPMailer files or embed SMTP credentials in this repository. Configure any
future backend with server-side validation, output escaping, CSRF protection,
rate limiting, spam protection, and a maintained mail library.
