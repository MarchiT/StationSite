select 
	year(created_at) year,
	monthname(created_at) month,
	count(*) published
from posts
group by year, month
order by min(created_at) desc


# Station site

### What is it about?

### Database diagram
- insert picture

### Users
- register
	+ validation
	+ display errors
- login
	+ validation
	+ display error
	+ remembers session
	+ logout
	+ profile
	+ nav: name + picture
	+ avatar can be uploaded
	+ can't publish
	+ can't comment

### Posts
	+ publish
	+ show

### Archives

### Comments

### Tags