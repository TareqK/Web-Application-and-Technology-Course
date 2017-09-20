# Introduction 

## What is the Web?

- It is many computers connected together.
	
- Has [a long history](https://webfoundation.org/about/vision/history-of-the-web/)

- Has many applications.

- One if these is the **Internet**.

## How the Web Works

- client-server architecture.

- Web is considered a distributed software.

- The browser is programmed to understand and display HTML files.

- You build over the browser when you program for web.

- You Build over the Server when you program for web.

### Static Websites

- These Websites were more prevalent when the web was young.

- The Workflow is as follows:

  - User requests the content.

  - Server retrieves files from hard disk.

  - Server sends HTML and other content to browser.

  - Browser renders and displays the files.

- The webmaster is responsible for upkeep and maintenance.

### Dynamic Websites 

- More prevalent now.

- The Workflow is as follows:
  
  - User requests content.
  
  - Server recognizes it must run a dynamic script (PHP,JSP,ASP,etc).

  - Server executes the script (Using Common Gateway Interface).

  - Script Outputs HTML.

  - Server sends the generated HTML and media files to user.

  - Browser renders and displays the files.  

- Pages change as inputs change.

### Web 2.0 and Beyond

- Its not a new technology, its a new requirement for web applications to 
give a richer experience. 

- In Web 2.0, web page creation is distributed between clients and servers. This
creates a more interactive web experience such as social media websites.

## Where is the Internet?

- Nobody actually owns the Internet

- It doesn't really exist in one physical location

In reality, nobody actually "owns" the Internet, but many organizations 
and companies are part of managing it. For example, ISP's Manage the
Infrastructure , Companies produce hardware that lets us access it, Organizations
like ICANN and W3F manage it, etc. Its a group of overseers that agree on 
using something. 

But the Internet is a real, physical thing, its just very distributed. 

### IPV4 vs IPV6
Any device on the internet has a unique IP address. There are 2 
IP protocols in use. 

- IPV4 :

  - Older and being phased out

  - 4 8 bit components

  - 2^32 addresses possible

  - almost full

- IPV6 :

 - Newer, current protocol

 - 8 16 bit components

 - 2^128 addresses possible

 - Will probably never full up
 
### Internet Exchange Points

- Allow ISP's to peer (interconnect) with each other in a shared facility ,
improving performance for each partner in the peer relationship.

- to buy a domain on a certain IXP, we contact one of these partners
and reserve it. The request is sent to the IXP to see if it is taken or not.
If it is not taken, then you can assign it. Every region(or country usually) 
has an IXP.

- When we want a server, the DNS server asks the IXP if it knows what is the 
IP address of a domain is. If it is not cached on the DNS, it is cached.
 
### Domain Name System

- We need it because we dont want to memorize IP addresses.

- Domain names are tied to an IP address.

- Convenient in case we want to move our hosting, since the Domain Name is *mapped* to the 
new IP

#### Domain Names

- Makes it easier to memorize website names

- Its like a contact name on your phone. It finds the number that is attached
to the name and dials it. 

- This is done on a Domain Name Server(DNS)

- The Workflow is as follows:
  
  - The browser sends the domain name we enter to the DNS server.

  - The DNS server looks up the domain name and finds its IP.

  - The DNS server returns the IP address.

#### Domain Hosting 

- After Buying a domain, We have to host a website somewhere. This somewhere
is a hosting server. After that, we connect our Domain name to our domain. 
Now, When someone enters www.ourwebsite.com, the DNS server points them 
to our website.

- Where you host is entirely up to you. You can host your website at a hosting
company or host it on your own servers(so as long as the IP address is static).

- If you do change the hosting server or the IP address, people can still
find you by your domain name since it always points to you.

#### DNS Overview

- User enters the name.

- The Domain Name is sent to the DNS server.

- The DNS server resolves the Domain Name(finds the IP and returns it to the user).
  
  - If the DNS server does not have the IP address, it goes and looks for them at an IXP and caches it.

- The Browser requests the resource at the IP address returned by the DNS server(ie, creates an HTTP request for it).


### URL's 

- Used to allow clients to request a resource from a server.

- has the following structure :

```HTML

protocol://domainname/path?querystring#fragment

```
- The protocol determines how the webserver will deal with our request and what it will return to us. for example,
	HTTP will return an HTML page, FTP will return a file, RTSP will return a stream, etc.

- The Domain Name points to the server.

- The Path points to where a resource is to the server.

- The Query string is used to pass queries(similar to command line arguments in C or java).

- The Fragment refers to an element in the retrieved resource, and it's processing is usually done on the client side 
	eg https://en.wikipedia.org/wiki/Fragment_identifier#Examples will open wikipedia on the Fragment Identifier article,
	and will scroll down automatically to the Examples section of the page.
  
### Web Hosting

- A webhost is made up of a webserver and any supporting programs(mail, ftp, database, CGI, etc).

- Many domains can point to one host. 

- Many websites can be hosted on one host. This is usually done by **port forwarding** or **virtual machines**. 

## Ports

Ports allow us to communicate with many programs on one Internet connection. They are Ethernet
channels that Internet programs listen to and get/send data from/to. Ports generate events for 
programs to "wake them up".

## HTTP

HTTP stands for **H**yper **T**ext **T**ransfer **P**rotocol. It is a **Stateless** protocol ie,
it does not "remember". As soon as the response is sent, the connection closes to free up resources.
HTTP forms the backbone of the Internet. 

### Basic Work Flow

- The HTTP protocol establishes a TCP connection on **port 80**(Usually) on the server(not necessarily 80 on the client).

  - We can change the port as a server administrator, but either every request has to 
	have the port added to it as (www.domain.com:port), or we set up
	[port forwarding](https://en.wikipedia.org/wiki/Port_forwarding).

- The Server waits for the request.

- The Client sends the request.

- The Server then responds with a response code, headers, and an optional message(which can also be files).

- After the HTTP response is received, the browser(or the application) is responsible for processing and displaying it.

### HTTP Request types

- GET : Fetches a resource.

- POST : Sends a message or resource.

- DELETE : Deletes a certain resource.

- PUT : Modifies or adds a certain resource. 

### HTTP request Structure

An example HTTP request is :

```HTTP

GET /index.html HTTP/1.1
Host: example.com
User-Agent: Mozilla/5.0(Windows RT; WOW64; rv:15) Gecko/123123123 Firefox/15.0.1
Accept: text/html,application/xhtml+xml
Accept-Language: en-us , en;q=0.5
Accept-Encoding: gzip,deflate
Connection: keep-alive
Cache-Control: max-age=0

```

This is a break down of some important variables:

- Keep-Alive : in HTTP, keep-alive is basically keeping the same connection to the server up(for a certain time period) and 
reusing it instead of opening a new connection for every request/response pair.Once the client sees that it no longer needs the connection
(all the resources needed are obtained), it closes the connection.

  - Advantages of Keep-Alive :

    - Lower CPU and memory usage (because fewer connections are open simultaneously).

	- Enables HTTP pipelining of requests and responses.

	- Reduced network congestion (fewer TCP connections).

	- Reduced latency in subsequent requests (no handshaking).

	- Errors can be reported without the penalty of closing the TCP connection.
 
  - Disadvantages of Keep-Alive :

	- If the client does not close the connection when all of the data it needs has been received,
	  then the resources needed to keep the connection open on the server will be unavailable for other clients.
 
- Media Internet Type : In HTTP, Media Internet Type specifies what the data being transfered should be. It tells the 
application to use to handle the request. 

- User Agent : In HTTP, the User Agent is the application who made this request. Its usually the application, OS, and version of the 
application that made that request.

- Cache-Control : Determines if the page will be cached or not, and how much it will stay cached.

### HTTP Response Structure :

An Example HTTP response is

```HTTP

HTTP/1.1 200 OK
Server : Apache
Content-Length : 1111
Content-Encoding : gzip
Connection : close
Content-Type: text/html,charset=UTF-8

<html>
<head>
............

```
- Response code : Tells us if the response is OK or not, and what went wrong

- Server : Tells us what kind of server issued this response

- Content Type: Tells us how to deal with the response, and what the encoding is. This is
  especially important if we are using languages other than english.
