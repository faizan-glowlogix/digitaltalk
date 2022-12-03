X:
==

Controller is a little messy every thing related to booking is available there. So its not a best practice to add everything related to one module in one controller. We must use resourceful controller and always try to use resourceful methods. I have divided single booking controller into seperate resourceful controller which are quite easy to manage. Controller should not be in directly contact with models. There should be any other layer that links with data layers. The purpose of a controller is to just get data from view and pass it to repository layer. And get data from repository pass it to view.

BookingRepository is a well structured code but the variable names are not in meaningful. in line # 60 variable name is $cuser. What do you mean by Cuser. I couldn't understand. Another thing is that variable names are not in camcelCase. If you are using it on somewhere then you should follow the same naming convention in all over the code. The store method in booking repository is quite large. we should have to refactor it into smaller functions. so that it will make a proper sense.

Overall remarks are code is okay. Not so good but not so bad. The code is well structured no linting issue found. And it is okay. need some small fixes that we need to remove comment out code that is given in booking repository. Also Code have comments on some parts it should be available in all methods. 

So to summarize i would say code quality is fine. Need some refactoring but other than that it is fine.

Things are good to have is that we should create a seperate file validation purposes. Booking respository contains some validational logic. I think it should be move to laravel request validation class. Also for responses it will be better if we create a single trait for responses. and then based on our logic a proper responce will be given to all end users in one single format
for example:

responce()->json([
	'code' => 404,
	'data' => [],
	'status' => 'Not Found'
]);

the basic response for every api call will be this. But if we found data the this basic response will be override with our actual. That will also be helpful here. Its just a suggestion.

Y:
==

I have created a feature test for CreateOrUpdate method that is given in user repository. I also have refactored the CreateOrUpdate method into one smaller methods. for unit testing purposes. Laravel provide us both ways to test our code. Either we create unit test for it or we will create feature test for a complete block of code. CreateOrUpdate is a feature test.
I have created a single file in which unit test is also done also feature test. 