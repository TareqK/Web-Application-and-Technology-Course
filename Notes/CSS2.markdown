# Chapter 5 : Advanced CSS : Layout

## Normal Flow 

The normal flow of a web page is to have each block on its own line 
from the top of the browser window to the bottom. This is what 
we have been doing so far.

Within these blocks, we have inline elements, displayed in the 
browser acording to the available space. If the browser resizes, the 
location of the elments changes as well.

There are actually 2 types of inline elements. **Replaced inline elements**,
whose contents and appearance is defined by an external resource,such as 
```<img>```, and **Nonreplaced inline elements**, whose content is defined 
within the document, which includes all the other inline elements.


It is possible to change whether an element is block level or inline via 
the CSS ``display``` property.  This allows us to place what are usually
block elements inside other block elements, which allows us to control 
their size relative to each other.

## Positioning 

We can use a set of CSS rules to change the positioning of elements. the
main ones are

Value | Description
---|--
absolute| The element is removed from normal flow and positioned in relation to the nearest positioned anchor.
fixed|The element is fixed in a speicific position in the window even if the window is scrolled.
relative| The element is moved relative to where it would be in the normal flow.
static| The element is positioned according to the normal flow. This is the default.
z-index| Defines the level of the layer.

Note here that The difference between relative and absolute is whether 
we want to reserve the location of the element in the normal flow or not.
 
for more details about positioning, and how to use these rules, check the
[W3 schools reference](https://www.w3schools.com/css/css_positioning.asp).

Each Element has an **anchor point** which is the reference point of the 
element. For an inner element, the anchor is the parent.
### Absolute Positioning 

In absolute positioning, we place the element exactly where we want it
in it's parent block, relative to the upper-left corner of the block and the 
upper-left corner of the element. The Element can end up either overlaying
or under other elements.  
Here is an example usage:

```CSS

figure{
height:150px;
width:200px;
position:absolute:
top:150px;
left:200px;
}

```

This rule means that the top corner of every figure element is 200 pixels
below the top of its parent block and 150 pixels from its left border.

The space that would be used for this element is removed.

### Relative Positioning

This is like absolute positioning, except the point of reference is the page, 
and the space that would normally preserved for the element remains, and is not
removed.

### Static Positioning

This is the normal flow of the document.

### Fixed Positioning

The Elements are fixed in a specific position in the window even if the 
document is scrolled.




### Z-Index

The z-index defines layers within a document. We use this if we want/dont
want certain elements to overlap. It is not used often currently, though
it is still used in overlay menus. 
Here is an example Usage:

```CSS
figure{
color:red;
background:white;
z-index:5;
}

figcaption{
color:red;
background:white;
z-index:-1;
}
```
This results in every figure to have a z-index of 5 and every ```figcaption```
to have a z-index of 4. 


### Floating Elements

Floating in CSS is defining where an element is inside its parent block, and 
whether an element can or cannot be adjacent to another 
element. If the width is not specified, It moves any elements away from the 
specified side(left,right,both,none).
This attribute interrupts the normal flow of elements, causing some blocks to 
have a width less than the screen. If the width is specified, then elements 
can be placed adjacent to it.

#### Clearing Elements

The ```clear``` attribute lets us clear whatever elements are to the side
specified(left,right,both,none). Its not particularly professional to use 
however.

#### Containing Floats

Sometimes we have elements floating inside a block that contains only
floating elements. In this case, the containing block has an effective
size of 0 and the block disappears. This is because the the browser
has no idea where to display the block. We can solve this by creating
an invisible element with a specific size.

## Multi Column Layouts

There are 2 ways to create a multi column page:

1. Using floats to create columns

2. Using positioning to create columns

There are tradeoffs to each method, and we will be discussing these. 

### Using Floats to Create Columns

This technique starts with dividing the page into left and right. It 
is recommended to use ```em``` measurements, because they scale relative
to the chosen font. 

say we have this html document

```HTML
...
...
<nav>
...
..
...
</nav>
<div id="main>
...
...
...
</div>
...
...
...
```
To split this page into 2, we can use this CSS style rule

```CSS

nav{
...
...
float:left
size:12em
}
#main{
...
...
margin:14em;
}
```

Say we want to add a second column to the left.

to do that, we will have an HTML document like this:

```HTML
...
...
<nav>
...
...
...
</nav>
<aside>
...
...
...
</aside>
<div id="main>
...
...
...
</div>
...
...
...
```

with this CSS style sheet :

```CSS

nav{
...
...
float:left
width:12em
}
#main{
...
...
margin:14em;
}
aside{
...
...
float:right;
width:12em;
}
```

This results in a 3 column layout with a header and a footer,ie, a 
panel layout.

The main disadvantage of this method is resizing. It doesnt scale up 
and down well, and data loss is almost certain on smaller screens.

### Using Positioning to Create Columns

Say we want to create the same 3 column layout with a header and a footer.
Then we would have this HTML document : 

```HTML
<div id="container">
<aside>
...
...
...
</aside>
<nav>
...
...
...
</nav>
<div id="main>
...
...
...
</div>
</div>
...
...
...
```


with this CSS style sheet :

```CSS
#container{
position:relative
}
nav{
...
...
position:absolute;
left:0;
top:0;
}
aside{
...
...
position:absolute;
right:0;
top:0;
}

#main{
...
...
left-margin:14em;
right-margin:14em;
}
```

Take note that the order of the elements is important. If we place, for example
```nav``` after ```<div id="main">```,then it will be in the center instead of the
left. 

This approach is more tolerant to resizing that using floats. However,
there are some problems. Once again, different screens will render this 
differently.

## Approaches to CSS Layout

One of the main problems faced by web designers is that the size of screens changes. 
There are 2 approaches to solve this:

1. Fixed Layout : We are using pixel measurements and the size of the 
elements and their location is fixed. Resizing doesn't change the size of the
elements on the screen.

2. Liquid Layout : We are using percentages of the screen. The main advantage
of this approach is that changing the screen size changes the size of the elements.
However, this has a limit.

## Responsive Design

The first step of respoisive design is to query the media the page
is being displayed on. This is done via the ```viewport``` element.

This is done like so :

```HTML

...
<head>
	<meta name="viweport" content="width=device-width"/>
...
...


```

After setting the viewport, we know what kind of device we are going to 
load our site on. We do this using **Media Queries**, like so :

```CSS

@media only screen and (max-width:480px){
CSS rules......
}

```

We apply this on our HTML like so :

```HTML

...
...
<link rel="stylesheet" href="mobile.css" media="screen and (max-width:480px)"/>

```
## CSS Frameworks

Frameworks are programs we build our programs on. One of the most famous
CSS frameworks is [Bootstrap](http://getbootstrap.com/), which does 
most of the heavy lifting for us in reactive design. Bootsrap has a grid
system, which divides the page into 12 sections.
