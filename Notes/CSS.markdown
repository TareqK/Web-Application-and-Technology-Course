# CSS 

CSS is an acronym of **C**ascading **S**tyle **S**heets. While HTML is 
used to lay down the "skeleton" of the page, CSS is what is used to 
make it stylish, adding color and other properties to HTML elements. 
A CSS file is simply a *collection of **rules***. 

## The Box Model

All HTML elements use the **Box Model** when they are rendered.
The box model is a hierarchy that determines the display properties
around the element.

![The Box Model](https://www.washington.edu/accesscomputing/webd2/student/unit3/images/boxmodel.gif)

- The Margin is the area around the element.
- The Border is the area wherein the element lies.
- The Padding is the area between the edge of the border and the content.
- The Content is the content of the element being displayed.

We can use CSS to change how these properties are displayed to the user.

## CSS Rule Structure

Every CSS rule has the following structure

```CSS
selector{
	property1:value;
	property2:value;
}
```

### Properties

Properties are what changes we want to make to the displaying of that 
HTML element. There are many properties, here are some of them 
and some example values for them.

Property| Example Values
--|--
```color```| "#FFFFFF", "red", "black""
```font-weight```| "bold", "italic"
```margin```|  "3px", "5%"
```opacity```|"0.5", "0.7"
```background```| "#00ff00 url("image.png")"
```border```| "5px solid red", "10px solid green"
```border-color```| "#ff0000", "blue"
```padding```| "2cm 4cm 3cm 4cm", "10px 5px 15px", "10px"

For more CSS properties and examples of their values,
please refer to the 
[W3Schools CSS Properties Reference](https://www.w3schools.com/cssref/default.asp)


#### Relative and Absolute Values

In CSS, there are 2 types of values in CSS : Absolute and Relative. 
Absolute Values are static values, that are measured in length units
such as px or cm. Relative values are values that change with the 
size of the page(or their reference point). These are usually fractions
or percentages and their size is calculated depending on the size of the
screen they are being displayed on.  

### Selectors

Every CSS rule begins with a selector. A selector identifies which 
element of the HTML document will be affected by the decelerations in 
the rule. 

An example is setting the font and color of emphasis :


```CSS
em{
	color:red;
	font-weight:bold;
}
```
### Selectors for Multiple Elements

If we have a list of elements we want to apply the same properties to ,
we use a comma separated list to express them, like so :

```CSS
em, div, p{
	color:blue;
	background:yellow
}

```

### Selectors for Nested  Elements

If we have an element nested within another element, and we only 
want to apply a rule to that particular type of nesting(eg, a list 
within an article, or an item within an unordered list,etc), we 
type them one after the other, from parent to child, like so :

```CSS
article p{
	background:red;
	font-size:200%;
}
```

### Class Selectors 

Sometimes we want to use a different CSS styling for a certain element.
we use the ```class``` attribute in HTML to do so, allowing us 
to define multiple CSS rules for the same element but only 
using one. Lets have a look at this section of an HTML document :

```HTML 

<p class="important">
asdadasdasd
</p>

<p class="normal">
asfaiidsofoaisfoasfd
</p>

<p>
adsfaiwojfoivznxkzldKWNDFOGSNDFOI
</p>

<h1 class="important">asdawef</h1>
```

and this accompanying CSS document :

```CSS

.important {
	color:red;
}
.normal{
	color:blue
}
p{
	color:black	
}

```

What this does is that all Elements whose class is important are 
displayed in red, all those with the class normal are displayed
in blue, and all paragraphs with no class are displayed as black.

However, say we change the CSS to become :

```CSS

p.important {
	color:red;
}

p.normal{
	color:blue
}

p{
	color:black	
}

```

and keep the same HTML document. What happens now is that **only paragraphs**
with the class important are typed in red, while 
the header is displayed as normal. We use the :

```CSS 

selector.class{
property:value;	
}
```

Syntax to target a specific element and its classes, while we use the :

```CSS 

selector.class{
property:value;	
}
```

Syntax to target **all elements with this class**.

### Pseudo Selectors

Sometimes, we want to change the rendering of an element depending 
on if or how the user has interacted with it. For this, we use
**Pseudo Class Selectors**. Pseudo Class Selectors are a keyword
added to a selector to change how the element is displayed after/during
user interaction.

```CSS

selector:pseudo-class{
	property1:value1;
	property2:value2;
}
```

Say we want to change how a link looks like if the user
hovers the mouse over it. WE would use the hover pseudo class like so :

```CSS
a:hover{
	color:black;
	font-size:200$;
}

```
[See here](https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes#Syntax)
for a list of standard pseudo-classes and their usage.

## Tying HTML and CSS

### Using an External Sheet
HTML and CSS are tied together in the ```<head>``` section of the 
HTML document. This is done with the following syntax :

```HTML
<!DOCTYPE html>
<html>
<head lang = "en"><!-- The Language of the webpage -->
	<meta charset="utf-8"><!-- The Charset we are using -->
	<title>my title</title><!-- Our Title -->
	<link rel="stylesheet" href="css/main.css" /><!-- Setting the styling or the alternative documents -->
	</meta>
	</head>
<body>
...
```
Before rendering the page, The HTML parser integrates the CSS and HTML files
to produce the output we want.Check out
[this example](./Examples/example7/) to see this in action.
### Using an Internal Sheet
We can also tie HTML with CSS in the **same document**. this is done
in the ```<style>``` section of an HTML document. this is done like so :

```HTML

<head>
<style>
body {
    background-color: linen;
}

h1 {
    color: maroon;
    margin-left: 40px;
}
</style>
</head> 

```

### Using Inline CSS

Another way of tying HTML and CSS is using Inline CSS. This is 
CSS typed within the HTML document and changes only 1 element.  It is 
not recommended to do this, since we are mixing semantics and 
presentation. An example of this is :
```HTML

<h1 style="color:blue;margin-left:30px;">This is a heading</h1> 

``` 
