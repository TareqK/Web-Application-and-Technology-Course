# JavaScript : Client-Side Scripting

JavaScript is a Object-Based scripting language that was first introduced by 
Netscape in their Netscape Navigator in 1996. JavasScript is a standardized
implementation of **ECMAScript**. It was initially annoying to use and
wasn't useful to many. However, it has evolved over the years and has
become ubiquitous on the web.

## What is a Scripting Language?

A scripting language like JavaScript or PHP is different from a compiled 
language like C or Java. There are no binary files, and instead of a 
compiler there is an interpreter that reads, analyzes and runs the 
code simultaneously. Only the parts that are being run are scanned,
so we can have syntax errors or logical errors somewhere in the code
and the code would run up to that point without giving any warnings. 

The JavaScript interpreter is a component in the browser.

## Why do we Need JavaScript ?

So far, in HTML and CSS, we have seen that there is no real interaction 
with the user. At most, we can style the page to the user. JavaScript
helps us create a rich user experience while keeping the basics of the web,
in that it is all text without binaries.

Over time, JavaScript has evolved from simple animation/user input scripting language to 
a fully fledged language that can be used for anything from game development
to mobile development. There are many JavaScript frameworks available, such 
as JQuery, react, node.js, Angular.js, nativescript etc.

In this course, we will be talking about pure JavaScript and JQuery.

## Client-Side Scripting

Client-Side Scripting is when we write a script and send it to the client
to execute. This can be done either by fetching a separate file and running it
or embedded within the HTML document. All the execution is done on the client 
side(the browser).

There are other kinds of Client-Side scripting languages, such as Macromedia Flash
or Microsoft Silverlight(th is really bad.).
However, these are binary files and are executed by a plugin. The problem
with binary files is that we cant tell what they do and malicious code 
can be inserted without us being able to audit it.

Another Technology is **Client-Side Applets**, such as java applets. These
run the code inside a runtime-environment on the client's machine, rather
than within the browser. These were the first(successful) attempts to 
create a rich-user experience in the web browser. 

## HTTP request-response Loop

JavaScript essentially keeps posting and getting HTTP requests to a server,
blanking the page and rendering the new HTML files that come from the server.
This is annoying, as the whole page has to be rendered all over again every
action.

## AJAX

AJAX stands for **A**Synchrous **J**avaScript **A**nd **X**ML. It is a 
technology where data requests are asynchronous, and we dont have 
to reload the whole page. This has become very important. We make **XMLHTTP**
requests, and at the same time, the client side keeps running. When the
response arrives from the server, the part of the page concerned with the 
response is updated. This gives a smoother experience to the user since
we dont have to reload the whole page and interrupt their actions 
whenever there is a change in the content. 

## JavaScript Layers

> HTML --> CSS --> JavaScript(Presentation) --> JavaScript(Validation) --> JavaScript(Asynchronous) --> JavaScript(Frameworks)

Every Layer of JavaScript does something different. The Presentation layer creates the 
view of the page, the validation layer checks the user inputs on the client-side,
the asynchronous layer dynamically updates the content on the page, and 
on top of all these, there are frameworks, which make our job easier
and give us extra features.

