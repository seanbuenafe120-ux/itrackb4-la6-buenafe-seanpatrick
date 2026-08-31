Self Assessment Questions

Q1 Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.

A1 I placed the featured route above the detail route. If they were swapped, Laravel would evaluate the detail route first and treat the literal string "featured" as the `{id}` parameter. It would then search the array for an item with an ID of "featured", fail to find it, and throw a 404 error instead of showing the featured page.

Q2 What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?

A2 When someone accesses an invalid or non-existent ID, the app returns a 404 Not Found page. To make this happen, I added a guard clause in the controller method using `abort(404)` if the requested item ID is not found in the array.

Q3 Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.

A3 Named routes keep links dynamic instead of hardcoding URL paths throughout the views. If URLs were hardcoded and the route path in `routes/web.php` was changed later on, every navigation link across the application would break, leading to broken navigation and 404 errors.