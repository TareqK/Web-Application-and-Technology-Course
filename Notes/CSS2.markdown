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

### Absolute Positioning 

In absolute positioning, we place the element exactly where we want it
in it's parent block, relative to the upper-left corner of the block and the 
upper-left corner of the element.. The Element can end up either overlaying
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
This results in every figure to have a z-index of 5 and every figcaption
to have a z-index of 4. 


## Floating Elements

Floating in CSS is whether an element can or cannot be adjacent to another 
element. It moves any elements away from the specified side(left,right,both,none).
This attribute interrupts the normal flow of elements, causing some blocks to 
have a width less than the screen. 
