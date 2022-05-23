[![Codacy Badge](https://api.codacy.com/project/badge/Grade/6eef7c24d5a84f1da79186ffc99e618d)](https://app.codacy.com/manual/v-dem/queasy-webapp?utm_source=github.com&utm_medium=referral&utm_content=v-dem/queasy-framework&utm_campaign=Badge_Grade_Dashboard)
[![Total Downloads](https://poser.pugx.org/v-dem/queasy-webapp/downloads)](https://packagist.org/packages/v-dem/queasy-webapp)

# [QuEasy PHP Framework](https://github.com/v-dem/queasy-framework/) - Sample application

## Package `v-dem/queasy-webapp`

QuEasy PHP Framework sample application.

### Requirements

*   PHP version 5.3 or higher
*   SQLite

### Installation

    composer create-project --stability dev v-dem/queasy-webapp

It will download and install project files, create SQLite database and make `logs` and `database` folders writable (666).
That's all. A good idea is to configure your web server to access web app at its `public` folder as website root, but it will work in any case.

> There is already a user "admin"/"gfhjkm" created, so you already can sign in.

