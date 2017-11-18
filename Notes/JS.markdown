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


## Tying JavaScript and HTML

Similar to CSS,There are 3 main ways to integrate JavaScript with HTML.

1. Inline JavaScript.
2. Embedded JavaScript.
3. External JavaScript.

### Inline JavaScript.

In inline JavaScript, we use the ```<a>``` element in HTML to call 
the javascript interpreter. For example, we can say:

```HTML

<a href="JavaScript:OpenWindow();">more info</a>
<input type="button" onclick="alert('Are you sure?');"/>

```

This creates an elert on pressing the button.

### Embedded JavaScript

here we yse the ```<script>``` element to call the JavaScript interpreter
on the portion of the HTML file.


### External JavaScript

we do this in the ```<head>``` section of the HTML document, using the 
```<script type="text/javascript" .... />``` element. This is 
similar to CSS.

### JavaScript Syntax

For a detailed review of JavaScript syntax and best practices, check out 
the [W3 Schools Referrence](https://www.w3schools.com/js/js_syntax.asp).

JavaScript is a **C-Oriented Language**. This means that every statement
should(and preferably must) end with a ```;```, and blocks are defined using 
curly brackets ```{}```. It is also **Case Sensitive** 
and **Type Sensitive**. JavaScript best practices tell us  
to use **Camel Notation**. 

A quirk of JavaScript is that the Scope of
variables in blocks is not supported. This means that variables defined
within a block can be accessed from outside the block it was defined in.

Comments in JavaScript are begun with ```//```, and multiline comments are
begun with ```/*``` and ended with ```*/```.

### Objects

In JavaScript, everything is an object, or technically, object like. We interact
with objects similar to the way we do in Java, with the exception of the 
```String```and ```Array```classes, as well as the primitives,
which are inferred implicitly.

### Properties 

We can change the properties of an object using the ```.``` notation. There
is no concept of private,public,or protected properties in a class. The 
```.``` is used as both a getter and a setter, and we can say
```someObject.someProperty = someValue``` to set the value
 and ```console.log(someObject.someProperty)``` to get the value.


### Variables

Variables in JavaScript are defined with the ```var``` keyword. Variables
in JavaScript have no type, and we can change their data type on the fly
as we go without raising any errors. All variables in JavaScript are **Reference
Variables**, which means they all point to an object. In fact, everything 
in JavaScript is an object, *even functions*. 

### Arrays 

Arrays in JavaScript can contain multiple types of objects at the same time. 
We dont have to give their size before hand, and they can grow and shrink 
during runtime. There are several array functions, such as ```push()```,```pop()```,
```concat()```,```shift()```,```sort()```, and many more.


### Loops 
Loops in JavaScript works mostly like in C. there are for loops, while loops,
and **enhanced for loops**. 

### Conditional Statements

Conditional Statements work similar to C as well, however, we have the
```===``` operator to match Type **and** Value.

### Try-Catch

Like Java, JavaScript has a ```try...catch``` statement to handle 
exceptions.

### Interacting With the JavaScript Interpreter

The ```document``` reference in JavaScript refers to the HTML document
the script was called from. We can use this if we want to modify the 
HTML page using ```document.write()```.

JavaScript has a ```console``` reference which is useful for debugging. 
using the ```console.log()``` function prints a string to the 
browser debugging console which can help us find out what went wrong.

Another useful way to interact with JavaScript is using the ```alert()```
function, which produces a browser pop-up that we can click away. However,
using this too often is tedious, so for development purposes, using ```console.log```
is easier.



