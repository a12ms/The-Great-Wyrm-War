# The Great Wyrm War
My first (semi) big personal programing project.
The project was for my homebrew DND campaing, and my friends could vote to join the army of one of the dragons and impact the story with their votes. The idea was that each person could have their own little knight avatar alongside their favorite dragon.

---------------------------------------------------
---Summer of 2024---
# Server
The server is actually my old laptop which sits in my room pluged in power 24/7. I know it's not practical but hey I'm just starting and I REALLY wanted to have a home server with zero budget. I found XAMPP the easiest web server for me and I stuck to it.

# Database
For the data base phpMyAdmin was my best friend, I say writing SQL codes there was my favorite part. 
I made 3 Tables. One for Emails and the registery number. And one for each dragon.
The Table for each dragon contains the name of the user, the comment it self and the date-and-time it was posted.
The "Email and registery number" table was mainly made so it could pervent people from vote-spaming. The registery codes are randomly generated. The website asks for the registery number to... register users comment. So what server does is that it looks at the database to see if the email and registery number maches. If it does then perfect! they can post their comment, but I didn't want the users to reuse their registery number nor their emails. So what database does is that it dosen't send message to an email twice and when the user uses it's registery number, the registery number in the database gets repalced with random letters (not numbers), the catch is the fact that the user can only submit numbers. Maybe it's a dumb solution to stop vote-spaming but it works.

# Domain and Other cloud stuff
As I said I wanted to spend the least amount of budget for this prodject, so the .ir domain was cheapest I could find (Around 1 dollar per 3 years).
For achieving the all mighty http"S" I found parspack.com to be my best option. they provided SSL and CDN and other fun cloud stuff that I definitely didn't almost lose my mind over.

# The whole experience
I really had time making this website. like the week that I was working on this website I legit had fun. Even though bunch of my problems would have been solved with Javascript I pushed forward with the tools I had with my dear PHP. I really hope that in future I could expand this website and I hope I could use more complex programming to be more proud of my self.
You can check the project out and participate in it, in greendownhill.ir .

---------------------------------------------------
