select 
	year(created_at) year,
	monthname(created_at) month,
	count(*) published
from posts
group by year, month
order by min(created_at) desc