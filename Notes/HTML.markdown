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
are **completely** seperated. New sets of tags were added as well, as was animation
and other features.

## Syntax of HTML

### Elements and Attributes

HTML **documents** are made up of a set of **elements** and **attributes**.
Every element has an **opening tag** and a **closing tag**. Elements have 
attributes. This is their general syntax .


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
```<br>``` tag, but all attributes belong to an element. 

- ```My Link``` : The Content. This is what is displayed to the user.Tags without 
content are known as empty tags. they use a shorthand notation.

- ```</a>``` : The Closing tag for this element.

#### Empty Elements
Elements such as ```<br />``` are called empty tags. They don't have 
any content. These elements can be closed using the shorthand notation 
```/>``` instead of the normal syntax.

#### Nested Elements and Document Structure
It Is Possible to nest elements in HTML, however, it is very
important to mind which tags close first and which tags contain
which. It makes no sense, for example, to have the ```<head>```
tag nested in the ```<body>``` tag, or to close the ```<head>```
tag after the ```<body>``` tag in an HTML file. Its always
important to know which elements are parents of which elements
and closing them in the right order. This is the 
hierarchy of HTML elements:



![Heirarchy of HTML elements](http://www.westciv.com/style_master/hands_on_tutorial_sm/images/containment_hierarchy.png)

HTML documents have a Tree structure, with its root being 
the ```<html>``` tag. The ```head``` section contains the 
**metadata**, which are invisible parameters that tell us more about 
the document. 

#### Attribute Inheritance 
Some child attributes will inherit certain attributes from their parents, such
as font size, position, and color.

#### Some Common HTML Tags

Tag Name | Symbol 
--- | ---
Heading | ```<h1>```  
Paragraph | ```<p>``` 
Break Line | ```<br />``` 
Horizontal Bar | ```<hr />``` 
Unordered List | ```<ul>``` 
Definition List | ```<dl>```
Definition Term | ```<dt>```
Definition Description | ```<dd>```
Ordered List | ```<ol>```
List Item | ```<li>``` 
Figure | ```<figure>```  
Image | ```<img>```
Link | ```<link>``` 
Active Link | ```<a>``` 

For a more complete list of elements and attributes and how they are used,
[click here](http://www.simplehtmlguide.com/cheatsheet.php).


### Escape Characters

Sometimes, we want to display a special character like ```>``` to the
user. For this, we use the ```&``` symbol before it, like this
```&>```, to display it.

### Relative and Absolute paths

Sometimes in HTML, we want to fetch a certain resource from our
own server. There are 
2 ways we can do this. We can use a **relative** path, which is the URL of the 
resource minus the current URL(ie, where the resource is relative to the
current file). The other way is using the **absolute** path to the resource,
which is usually the complete URL of the resource.

It is always preferable to use relative paths when writing HTML documents,
because if we do ever move the HTML files, we wont have to re-write all
the links in them.

However, if we do want to fetch a resource from another server, we 
can only use its absolute path. 

More formally, an absolute path is defined as :

> An Absolute or full path points to the same location in a file system,
 regardless of the current working directory.

And a relative path is defined as :

> A Relative path is the path thats starts from the current directory.

Local and Absolute relative paths use a Unix-like path representation.

### Example HTML Document Source

```HTML

<!DOCTYPE html>
<html>
<head lang = "en"><!-- The Language of the webpage -->
	<meta charset="utf-8"><!-- The Charset we are using -->
	<title>my title</title><!-- Our Title -->
	<link rel="stylesheet" href="css/main.css" /><!-- Setting the styling or the alternative documents -->
	<link type="text/javascript" href="js/myscript.js" /><!-- Calling a script -->
	</meta>
	</head>
<body>
<div id="my div">
	<h1>This is a simple document with not much content</h1>
	<h2>This header is smaller</h2>
	<p>This is a photo</p>
	<img src="http://www.html-helper.net/wp-content/uploads/2013/07/HTML.jpg" alt="my image" /><!-- Inserting an Image in a paragraph using its absolute path -->
	<img src="./my_image" alt="an image" /><!-- Referring to an image using its relative path-->
	<br />
	<a href="http://www.google.com">This is a simple active link</a>
	<ul>
		<li>This</li>
		<li>Is an</li>
		<li>Unordered List</li>
	</ul>
	<hr />
	<ol>
	
		<li>And This</li>
		<li>Is an</li>
		<li>Ordered List</li>
	</ol>
	<hr />
	<dl>
		<dt>This</dt>
		<dd>Is a Definition List</dd>
	</dl>
	<hr />
	<ul>
		<li>And This
			<ol>
				<li>Is a List in a List!</li>
			</ol>
		</li>
	</ul>
</div>
<div id="my second div">
This is the start of another Div. 
<p>
and this is a paragraph in a div.
</p>
<a href="#my div"> And this active link takes us to the first div</a>
</div>
</body>
</html>

```


