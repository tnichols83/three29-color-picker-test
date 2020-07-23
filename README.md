# Three29 Color Picker

For this assignment please [review the video](https://youtu.be/hCtDH4mE59k) listed below for reference for the functionality of this
web application. After you finish the video return here. When you build this feel free to use any
libraries you want or any build tools you prefer to work with. When you install it will create a sqlite database file which the default `.env` file utilizes. There are database
migrations that need to be ran that will setup the colors table in the format we want. The overall concept
of this test is to take the color picker hex string and convert it into red/green/blue on the backend. The overall task
should be easy but this is more of a code golf type situation where I want to gauge how cleanly you can execute
this task and if you are able to work with a full stack problem from start to finish with a set of requirements.


## Official Requirements List
1. Updating the existing colors on the page should utilize AJAX/JSON. ES6 code is encouraged, do not worry about browser support.
On no other part of this page will you be explicitly required to utilize JS other than the deletion confirmation message.
2. Do not use jQuery.
3. You should be able to update/delete/create colors on the list.
4. You are required to use the default picker element which will have a hex value on the input. Part of the task is to
challenge you to convert between this and the structure used in database schema in a clean way.
5. You are required to store the value in the database table format provided. Do not modify the DB schema in any way. 


## Extra Credit
1. Use Laravel Mix
2. Add Tests

_I know this seems silly for how small the site is but it would be ideal to so proficiency in tools we utilize daily at Three29._
