# Chapter 2 : HTML

## A Brief Introduction 

HTML stands for **H**yper **T**ext **M**arkup **L**anguage. It is based
on [Standard Generalized Markup Language](http://searchmicroservices.techtarget.com/definition/SGML-Standard-Generalized-Markup-Language).
HTML is **NOT** a programming language. 

### What is a Markup Language?

A Markup language is defined as : 
 
>a way of annotating a document in such a way  to make a the annotations distinct 
>from the text being annotated. 

Basically, This means that certain elements are visually distinctive from the text, indicated
by **marks**. An example of a markup language is (ironically) markdown, which is what
this document is written in! 

In HTML, these *marks* are known as **tags**. 

## The standards of HTML 

### HTML

HTML Is The original standard, based on SGML.

### XHTML 

XHTML Has stricter rules to make rendering more predictable(especially with nested tags).
This was done by separating the *semantics*, the meaning of the tags,from the 
*presentation*, how they are rendered to the user. An example of this is the 
```<em></em>``` tag. It Also added **XML support** . This allowed more robust 
expression of the text by allowing the user to create his/her own set of
markups. It Also added syntax checking (every tag must have a closing tag in the 
right order), and files that don't parse correctly are not rendered. In short,
**we applied XML standards to HTML**. 

### HTML5 

HTML5 is the current standard. It Is more oriented towards semantics. In HTML5,
all attributes related to presentation are removed, and semantics and presentation
are **completely** seperated. New sets of tags were added as well, as was animation and other features added.

## Syntax of HTML

### Elements and Attributes

HTML **documents** are made up of a set of **elements** and **attributes**.
Every element has an **opening tag** and a **closing tag**. Elements have 
attributes. We will be discussing general concepts in HTML. For a 
complete list of elements and attributes and how they are used,
[click here](http://www.simplehtmlguide.com/cheatsheet.php).


```HTML

<openingTag Attribute="some attribute">Content<closingTag>

```

eg : 

```HTML 
<a href="http://mylink.com">My Link</a>

```
breaking this line down :

- ```<a```: The Element. ```<a```  indicates an that this is an active link.

- ```href="http://mylink.com"``` : The Attribute. It tells the element from where
to fetch something. Not all elements have attributes, such as the
```<br>``` tag, but all attributes belong to an element. Tags without 
attributes or content are known as empty tags. they use a shorthand notation.

- ```My Link``` : The Content. This is what is displayed to the user.

- ```</a>``` : The Closing tag for this element.

#### Empty Elements
Elements such as ```<br />``` take no attributes, 
and are called empty elements. These elements can be closed
using the shortahand notation ```/>``` instead of the normal
syntax.

#### Nested Elements
It Is Possible to nest elements in HTML, however, it is very
important to mind which tags close first and which tags contain
which. It makes no sense, for example, to have the ```<head>```
tag nested in the ```<body>``` tag, or to close the ```<head>```
tag after the ```<body>``` tag in an HTML file. This is the 
heirarchy of HTML elements:

[Heirarchy of HTML elements](http://www.webreference.com/html/rendering/flowChart2.gif)
