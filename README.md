## php-mvc
#### I will explain more stuffs later - Shohan

- mvc stands for model, view and controller. But the flow to be accurate is - controller -> model -> view 

- [ ] in server side scripting, we always receive request from client or user end, then we process the request
- [ ] we know about basic php request handling, generally they are retrieved from get, post and request global variables
- [ ] so when we are receiving the request, we can actually test and process it if it verifies our general access or not
- [ ] as some hint we can actually use http request method check, we can use server global variable of php
- [ ] for slightly better handling requests and making it restrcited much we can use htacccess and also learn about it
- [ ] we have to handle routing stuffs from now, routing means where we will actually send the current request
- [ ] if you feel you are a beginner, just handle it very easily with some if else block or matching patterns or similar
- [ ] don't make it complex, always try to think the easiest method you can apply, better avoiding any package usage here
- [ ] so after handling the route section which means now we know now where the request will be sent
- [ ] after handling above stuffs we know so far the request is good enough to be handled so we pass it to our main controller
- [ ] every single request must be sent and must be processed from base or main controller
- [ ] if the request needs some interaction with application database, it will be sent to the model section
- [ ] from the model section the request will fetch it's needed data and then the request must be send to view along the data

** this is so far a basic flow which came from my understanding, things can be changed with your own coding style **
