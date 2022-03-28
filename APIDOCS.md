# COMMENT API
COMMENT API is a custom made API, that enables you to add comments to the MYSQL Database. It displays the IP Address of 
your client machine, together with your timezone in 'UTC'

## BASE URL
Your Base URL is the unique address that enables you to access the provided endpoints.

>https://blooming-mesa-56911.herokuapp.com/


### The Available Endpoints for the API are as follows :
```
    1.Get all comments - GET /api/v1/comments
    2.Get one comment - GET /api/v1/comments/2
    3.Create a comment - POST /api/comments

``` 

## GET '/api/v1/comments'

> Get comment data.


Sample Response :

	{
			"id": 14,
			"bookid": "90",
			"comment": "People often claim to hunger for truth, but seldom like the taste when it's served up.",
			"date_added": "Monday, 28-Mar-22 14:27:12 UTC",
			"visitor": "10.1.89.58"
		}


## POST '/api/v1/comments'

> Post a Comment.
```
Sample Response:

    {
	"bookid": "90",
	"comment": "People often claim to hunger for truth, but seldom like the taste when it's served up.",
	"date_added": "Monday, 28-Mar-22 14:27:12 UTC",
	"visitor": "10.1.89.58"
    }
```
