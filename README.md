# php basic controller flow

we don't want to have all our code in the public directory, or even worse
in one single big file!!!

this project gives us an structure that we can follow to make projects bigger
and more scalable

```bash
.
├── public
│   └── index.php
├── src
│   └── controller_functions.php
└── templates
    ├── about.php
    ├── contact.php
    ├── home.php
    └── recommendations.php

```

index only redirect to one of the templates
