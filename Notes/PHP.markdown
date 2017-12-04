# PHP : Server-Side Scripting

PHP is a C-Based Server-Side Scripting Language. It supports the Object 
Oriented Paradigm. As a personal note, PHP is annoying to use and its 
syntax is a mess. Use Express.JS or Python Django.

PHP Is called upon using the **CGI**(Common Gateway Interface) by the web server
when requested by its URI. The CGI **is a set of specifications that 
handles parsing data from an HTTP request and sending it to different 
programs, handling the output from them, and returning them as an HTTP request
**. Examples of these programs is the PHP interpreter. 
In order to implement this specification, we need **drivers** or
**middlewares**. 

## The PHP Interpreter

The PHP interpreter is the program that the CGI calls when a request comes
to a URI that is tied to a PHP script. After the data is extracted from
the request, it is sent as an input to the script. The PHP script then 
returns it to the server as an HTTP response. 

## Why do we use PHP ?

Using PHP means we are using a **3-tier architecture**. This is because
we have 3 layers, the browser, the server, and the interpreter. Any 
input/output has to pass through all 3.

> Browser <--> Server <--> PHP interpreter

This means that when  using PHP, the business logic is kept hidden
from the user. This adds a layer of security.

PHP also allows us to jump between HTML and PHP code easily. This means 
we can create pages that change according to the variables made in the request. 
PHP code embedded within HTML is called a **scriptlet**.

## PHP syntax

- We start every PHP script with ```<?php``` and end it with ```?>```.

- Variables are defined and called using ```$identifier``` . the rules for
the identifier are the same as in C.

   - we do not define variable types in PHP.

- When we want to mix HTML and PHP in a script, we cannot write anything
in the header.

- Statements **must** be terminated with a ```;```.

