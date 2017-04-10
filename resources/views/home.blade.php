
@extends('layout')

@section('blog-masthead')
	<span><b>Online Takeout</b> 10:00am - 10:00pm</span>
	<span><b>Delivery</b> 10:00am - 03:00pm | 05:00pm - 10:00pm</span>
	<span class="text-right">Call us today! <b>300-7890</b></span>
@stop

@section('navigation')
	<ul class="nav navbar-nav navbar-right">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Login or Signup</a></li>
      <li class="active pull-right">
      	<a href="#"><i class="icon ion-android-restaurant"></i>Restaurant</a>
      </li>
    </ul>
@stop



<!-- I'm still waiting to reflect the nameservers that I changed earlier.
it's because the nameservers that was assigned in leetdigital.com is not vultr nameservers but cloudflare..


* points to 45.63.24.62


cloudflare
MAYA.NS.CLOUDFLARE.COM
TONY.NS.CLOUDFLARE.COM

Redirect 302 / http://enquire.leetdigital.com/leet-digital
path leet-digitalzt0xvkpb61oI6BT2

/etc/hosts
45.63.24.62 toplinecreative.leetdigital.com
45.63.24.62 subtest.leetdigital.com
45.63.24.62 leetdigital.com
45.63.24.62 www.leetdigital.com
45.63.24.62 sandbox05.leetdigital.com 


sites-availabe example.
<VirtualHost *:80>
     ServerAdmin webmaster@example.com
     ServerName leetdigital.com
     ServerAlias www.leetdigital.com
     DocumentRoot /var/www/leetsite/
     ErrorLog /var/www/leetsite/logs/error.log
     CustomLog /var/www/leetsite/logs/access.log combined
</VirtualHost>
~                

/usr/share/doc/phpmyadmin. 

mysql database
L33tdigital

Repeat password for the MySQL "root" user:  
L33tdigital


Server Maintenance
- We can't control this type of problem when the server is having a maintainance.
Server Configuration
- Organize the configuration of each website in server and do proper conventions, like what is the name of the domain
will be the name of configurations.
Server Overload
- We need to manually reset our server once in a week to refresh all the website files and traffic to our websites.
DNS Changes
- When changing the dns we need to make sure the dns will not changed after an hour its because the dns will not be stable.
- Be careful when changing the dns and where to point is to avoid errors.
-->





