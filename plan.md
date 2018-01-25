# Station site

### What is it about?

### Database
![alt text](https://github.com/MarchiT/StationSite/tree/master/public/images/database.png "Database image")

### Users
- register
	+ validation {display errors}
- login
	+ when logged out {can't comment + publish}
	+ validation {display errors}
	+ remembers session
	+ nav {name + profile, logout + profile}
	+ avatar can be uploaded
	
### Posts
+ publish {validation}
+ flash message
+ show
+ in latest order

### Comments
- comment {validation & error handling
- display
- relation to post and user

### Archives
- filter by *name* of month and year
- url: *?month=May&year=2018*
- query
~~~~sql
select 
	year(created_at) year,
	monthname(created_at) month,
	count(*) published
from posts
group by year, month
order by min(created_at) desc
~~~~
- orders sidebar by: min(created_at) desc 
- Post model - archives()

### Tags
- create tags migration
- in sidebar: if a tag has no posts attached to it, it is omitted
- filters by *name* of tag
- tags are displayed in single post page