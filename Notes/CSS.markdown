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

### Collapsing 

If we set the size of the ```margin``` or ```padding```, sometimes
2 elements will **overlap**. If there are 2 rules for 2 elements that overlap
**vertically**, then the distance between them is ** the longer distance
in the rule** ie, if one margin is 90px and one is 50px, then the vertical distance
between the 2 elements will be 90px. if
they overlap **horizontally**, then both rules are applied and 
**the total distance between them is the length of the margins added together**. ie,
if we have 2 elements horizontally overlapping, one that has a margin of 20px and 
the other 30px, then the horizontal distance between the 2 elements will be 50px.

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

#### Selectors for Multiple Elements

If we have a list of elements we want to apply the same properties to ,
we use a comma separated list to express them, like so :

```CSS
em, div, p{
	color:blue;
	background:yellow
}

```

#### Selectors for Nested  Elements

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

#### Pseudo Selectors

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
hovers the mouse over it. We would use the hover pseudo class like so :

```CSS
a:hover{
	color:black;
	font-size:200$;
}

```
[See here](https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes#Syntax)
for a list of standard pseudo-classes and their usage.


#### Class Selectors 

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


#### Element(ID) Selectors 

Say we have this line in an HTML document :

```HTML

<h1 id="title">This is a heading</h1> 

```
We can target this specific element using its ID in CSS. To do this, 
we use an **element selector** element selectors have this syntax :

```CSS
 
#id{
	property:value;
}

```

so in this case, we would say

```CSS

#title{
	color:red;
	font-weight:bold;
}

```

#### Attribute Selectors

We can select specific attributes to style. We do this using the
```[attribute]``` selector, which changes every attribute with this 
name. For example, if we want to change how the ```title``` attribute 
is displayed, we would use this CSS rule :

```CSS

[title] {
	cursor : help;
	padding : 3px;
	color : purple;
}

```

Say we have this HTML document :


```HTML
...
...
<img src="../images/log" title="Home Icon" />
<article title="my main article" >
...
...
</article>

```
This results in every title in our HTML document being purple with a
3px padding. 

We can also specify a specific attribute value or set of attribute 
values to change using the

```CSS

[attribute operation value]{
	property:value;
	
}
```
Syntax. For example, The CSS rule :

```CSS

[title="mytitle"]{
	color:green;
	
}

```

matches every title attribute with the value ```mytitle```. 

Another example is the CSS rule :

```CSS

[title~="command"]{
	color:green;
	
}

```

which matches every title attribute with the word ```command``` somewhere
in it. 

We can also specify which attribute of which element we want 
to change using the

```CSS

element[attribute operation value]{
	property:value;
	
}

```

Syntax. For example, the CSS rule :

```CSS

p[title*="Brazil"]{
	color:green;
	background-color:yellow;
	
}

```
Changes the title of every paragraph element containing the string ```Brazil```
in its title attribute to have green text and a yellow background.


For a full list of possible attribute selectors and operators,
[see here](https://developer.mozilla.org/en-US/docs/Web/CSS/Attribute_selectors).


#### Contextual Selectors

In CSS, we can select elements based on context, ie , where they 
lie in the document. These are used, for example, where we want 
only the title of a paragraph in an article to be a specific color,
or if we want a specific text font but only on the left margin, and so 
on. There are 4 types of contextual selectors :

Selector |Applies when | Example 
---|---|---
Descendant(>) | The element is a direct child of another | div>p 
Child( ) | The element is a child, no matter how far, of the root element | div p h1 
Adjacent Sibling(+) | When the elements have the same parent and are next to each other, the rule is applied to the second element| h1+h2 
Sibling(\~) | When the elements have the same parent, the rule is applied to the second element| p\~p 



### Inheritance 

Some CSS rules properties inherited by the children of an element.
However, not all properties can be inherited . A Child
will inherit all inheritable properties from its parent(s), all the 
way up to and excluding the ```<html>``` Element. Some properties such as
```margin``` or ```border``` are not inheritable, while properties
such as ```color``` or ```font-family``` are inheritable. 
Generally speaking, **inheritable properties are those concerned with 
font and color, while non-inheritable properties are 
those concerned with spacing and placement/alignment.**

#### Forcing inheritance

we can use the ```inherit``` keyword to force an element to inherit
an usually non-inheritable property from its parent. However, this is
not recommended nor is it supported in all browsers.


## Tying HTML and CSS(Style Locations)

### Using an External Sheet


HTML and CSS are tied together in the ```<head>``` section of the 
HTML document using the ```<link>``` element. This is done with the 
following syntax :

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
```
Before rendering the page, The HTML parser integrates the CSS and HTML files
to produce the output we want.Check out
[this example](./Examples/example7/) to see this in action.

A Special advantage of this method is that the browser can cache 
the style sheet which help reduce load times and improve
the performance of the site. 

Another advantage is that we can stay consistent, since any changes
to the style sheet reflect on all pages that use this style sheet.

Say that we are importing 2 different external style sheets like this :
```HTML
<!DOCTYPE html>
<html>
<head lang = "en"><!-- The Language of the webpage -->
	<meta charset="utf-8"><!-- The Charset we are using -->
	<title>my title</title><!-- Our Title -->
	<link rel="stylesheet1" href="css/first.css" /><!-- Sheet 1 -->
	<link rel="stylesheet2" href="css/second.css" /><!-- Sheet 2 -->
	</meta>
	</head>
<body>
```

In this case, the rules in sheet ```second.css``` will override
the rules in sheet ```first.css```. If there are X amount of css rules for an element, 
then the last one loaded is the one that is applied.

### Using an Internal Sheet(Embedded CSS)

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

It is not recommended however, to do this, since it is difficult 
to have consistent style over multiple documents, and we are mixing 
presentation with semantics.

### Using Inline CSS

Another way of tying HTML and CSS is using Inline CSS. This is 
CSS typed within the HTML document and changes only 1 element, overriding
any previous CSS rules. This is done using the ```style``` attribute.
However, It is not recommended to do this, since we are mixing semantics and 
presentation. For example, say we want to change one particular header's
color and margins, then we can do the following : 

```HTML

<h1 style="color:blue;margin-left:30px;">This is a heading</h1> 

``` 

We can combine all 3 types of CSS, if we have to, especially if we want
to override a specific set of elements on a page, as 
Inline CSS overrides embedded CSS, embedded CSS overrides external CSS, and 
external CSS overrides the built in browser style.

> Inline CSS &gt; Embedded CSS &gt; External CSS &gt; Built in Browser Style
