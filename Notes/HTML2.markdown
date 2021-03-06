# Chapter 4 : HTML Tables and Forms

## Tables

Tables are created using the ```<table>``` element. 
They can be used to display many types of content. Tables 
can contain other HTML elements within them. This is especially
useful when we are generating an HTML page(even though this is not 
recommended, since we use CSS to do that in practice). The table has 
2 sub elements ```<tr></tr>``` and ```<td></td>```. For example, we can 
organize some data like this

```HTML

<table>

	<tr>
		<td>hi</td>
		<td>its</td>
		<td>me</td>
		<td>your</td>
		<td>brother</td>
	</tr>
	<tr>
		<td>hello</td>
		<td>it is</td>
		<td>I</td>
		<td>thine</td>
		<td>sibling</td>
	</tr>
</table>

```
### Table Headers
Tables can have headings, using the ```<th></th>``` element. Say 
we want to add a header to our table above. 

```HTML
<table>

	<tr>
		<th>row 1</th>
		<th>row 2</th>
		<th>row 3</th>
		<th>row 4</th>
		<th>row 5</th>
	</tr>
	<tr>
		<td>hi</td>
		<td>its</td>
		<td>me</td>
		<td>your</td>
		<td>brother</td>
	</tr>
	<tr>
		<td>hello</td>
		<td>it is</td>
		<td>I</td>
		<td>thine</td>
		<td>sibling</td>
	</tr>
</table>
```
### Spanning Rows and Columns

we can use the ```colspan=""``` and ```rowspan=""``` attributes to create 
spanning columns and rows.  for example :


```HTML

<table>

	<tr>
		<th>row 1</th>
		<th>row 2</th>
		<th>row 3</th>
		<th colspan="2">row 4 and 5</th>
	</tr>
	<tr>
		<td>hi</td>
		<td>its</td>
		<td>me</td>
		<td >your</td>
		<td>brother</td>
	</tr>
	<tr>
		<td>hello</td>
		<td>it is</td>
		<td>I</td>
		<td>thine</td>
		<td>sibling</td>
	</tr>
</table>

```

However, this is not semantic, and is not standard practice. it is 
preferred to do all this in CSS sheets.


### Additional Table Tags

Tag | Description
---|---
```<caption>``` | Gives the table a title/name, helps with accessibility
```<col>```,```<colgroup>``` | describe columns, useful for when we want to change the style of certain column groups or individual columns.
```<thead>``` | the header row of the table, helps give all headers a certain style.
```<tfoot>``` | the footer row of the table, give all footers a certain style.
```<tbody>``` | contains the data of the table, helps us set the style of the table.

All these tags help us give a more semantic meaning to the table.

### Table CSS Properties

Property | Description
---|---
```border``` | Sets all the border properties in one declaration
```border-collapse``` | Specifies whether or not table borders should be collapsed
```border-spacing``` | Specifies the distance between the borders of adjacent cells
```caption-side``` | Specifies the placement of a table caption
```empty-cells``` | Specifies whether or not to display borders and background on empty cells in a table
```table-layout``` | Sets the layout algorithm to be used for a table

## HTML Forms

Forms provide an alternative way to interact with a web server.

### Form Structure 

A form is created using the ```form``` element. It has 2 important
attributes, ```method``` and ```action``` . ```method``` defines
the HTTP method to be used(GET/POST/UPDATE/DELETE) and ```action``` defines
which resource this request will  be made to . for example :

```HTML

<form method="get" action="process.php">
	<fieldset>
	...
	...
		<input type="text" name="title/>
	...
	...
		<select name="where">
			<option>Choose where</option>
			<option>Location x</option>
			...
			...
			<option>Location z</option>
		</select>
	...
	...
		<input type="submit" />
	</fieldset>
</form>
```

Creates a new form that makes a GET request to the resource process.php 
to be run.

For more details on form elements and their attributes, [see the W3Schools reference](https://www.w3schools.com/html/html_form_elements.asp)

### Input Validation

There are several ways to validate the input of a form. The simplest is
using the ```pattern``` attribute, which matches the text to a
regular exression. 

Another way is using javascript, but that is a topic for another time.

