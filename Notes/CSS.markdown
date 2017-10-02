# CSS 

CSS is an acronym of **C**ascading **S**tyle **S**heets. While HTML is 
used to lay down the "skeleton" of the page, CSS is what is used to 
make it stylish, adding color and other properties to HTML elements. 
A CSS file is simply a *collection of **rules***. 

## CSS Rule Structure
Every CSS rule has the following structure

```CSS
selector{
	property1:value;
	property2:value;
}
```

### Selectors

Every CSS rule begins with a selector. A selector identifies which 
element of the HTML document will be affected by the declerations in the
rule. 

An example is setting the font of emphasis

```CSS
em{
	color:red;
	font-weight:bold;
}
```

### Properties

Properties are what changes we want to make to the displaying of that 
HTML element. There are many properties, here are some of them 
and some example values

Property| Example Values
--|--
```color```| #FFFFFF,red,black
```font-weight```| bold,talic
```font```| calibri
```margin```|  3px,5%

For more CSS properties and examples of their values,
 please refer to the 
 [W3Schools CSS Properties Reference](https://www.w3schools.com/cssref/default.asp)
## Tying HTML and CSS

HTML and CSS are tied together in the ```<head>``` setion of the 
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
Check out [this example](./Examples/example7/) to see this in action.

Before rendering the page, The HTML parser integrates the CSS and HTML files
to produce the output we want. 
